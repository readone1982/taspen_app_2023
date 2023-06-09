<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\TicketList;
use App\Unit;
use App\Exports\FltExport;
use App\Exports\TicketExports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\HelloEmail;
use App\Mail\InvoiceEmail;
use App\Mail\InvoiceEmail2;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class TiketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


public function tiket($year = null, $month = null)
    {

        if($year == null){
            $year = date('Y');
        }

        if($month == null){
            $month = date('m');
        }else{
            if(strlen($month) == 1){
                $month = '0'.$month;
            }
        }

        $list = Ticket::with('owner','list')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $process = Ticket::with('owner','list')->where('status' , 'process')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $done = Ticket::with('owner','list')->where('status' , 'done')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $cancel = Ticket::with('owner','list')->where('status' , 'cancel')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $waiting = Ticket::with('owner','list')->where('status' , 'Waiting For Finished')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('tenant.tiket.index', [
            'menu' => 'tenant',
            'submenu' => 'tiket',
            'list' => $list,
            'process' => $process,
            'done' => $done,
            'cancel' => $cancel,
            'year' => $year,
            'month' => $month,
            'waiting' => $waiting,
        ]);
    }

    public function tiketCreate(Request $request)
    {
        $unit = Unit::with('owner')->whereNull('deleted_at')->orderBy('id', 'asc')->get();
        return view('tenant.tiket.create', [
            'menu' => 'tenant',
            'submenu' => 'tiket',
            'unit' => $unit,
            'year' => $request->input('year') !== null ? $request->input('year') : '',
            'month' => $request->input('month') !== null ? $request->input('month') : '',
        ]);
    }

    public function tiketSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'request_date' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('tiket/create')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $unit = Unit::find($request->unit_id);

            $item = new Ticket;
            $item->owner_id = $unit->owner_id;
            $item->unit = $unit->full_number;
            $item->lintasan = $unit->verification;
            $item->tujuan2 = $unit->interior;
            $item->rute_awal = $unit->address;
            $item->coding_bus = $unit->codingbus;
            $item->request_name = $request->request_name;
            $item->request_date = date('Y-m-d H:i:s', strtotime($request->request_date));
            $item->received_date = date('Y-m-d H:i:s', strtotime($request->received_date));
            $item->received_name = $request->received_name;
            $item->received_through = $request->received_through;
            $item->form_description = $request->form_description;
            $item->month = $request->month;
            $item->year = $request->year;
            $item->kota_awal = $request->kota_awal;
            $item->tujuan = $request->tujuan;
            $item->rute_lintasan = $request->rute_lintasan;
            $item->boarding_date = $request->boarding_date;
            $item->status = 'Process';
            $item->name = 'Taspen';
            $item->save();

            $edit = Ticket::find($item->id);
            $edit->number = 'TSPN'.date('dmy').$item->id;
            $edit->save();

            foreach ($request->list_boarding as $key_name => $item_name) {
                if($item_name != '' && $item_name != null){
                    $list_item = new TicketList;
                    $list_item->ticket_id = $item->id;
                    $list_item->bus = $item->coding_bus;
                    $list_item->tujuan = $item->tujuan2;
                    $list_item->rutee = $item->lintasan;
                    $list_item->numbering = 'TSPN'.date('dmy').$item->id;
                    $list_item->boardname = $request->list_boarding[$key_name];
                    $list_item->boardktp = $request->list_ktp[$key_name];
                    $list_item->boardphone = $request->list_phone[$key_name];
                    $list_item->boardtype = $request->list_type[$key_name];
                    $list_item->save();
                }
            }

            return redirect('/tiket')->with('success', 'The Data was saved successfully.');
        } catch (\Throwable $th) {
            return redirect('/tiket/create')->withErrors('Sorry, there is an error while adding new data.');
        }
    }

    public function tiket_edit(Request $request, $id)
    {
        $tiket = Ticket::with('owner','list')->find($id);
        $unit = Unit::with('owner')->whereNull('deleted_at')->orderBy('full_number', 'asc')->get();
        return view('tenant.tiket.edit', [
            'menu' => 'tenant',
            'submenu' => 'tiket',
            'tiket' => $tiket,
            'unit' => $unit,
            'year' => $request->input('year') !== null ? $request->input('year') : '',
            'month' => $request->input('month') !== null ? $request->input('month') : '',
        ]);
    }

    public function tiket_detail($id)
    {
        $tiket = Ticket::with('owner','list')->find($id);
        return view('tenant.tiket.detail', [
            'menu' => 'tenant',
            'submenu' => 'tiket',
            'tiket' => $tiket,
        ]);
    }

    public function tiket_update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'request_date' => ['required'],
            'unit_id' => ['required'],
            'request_name' => ['required'],
            'received_name' => ['required'],
            'received_date' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('tenant/tiket/edit/'.$id)
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $unit = Unit::find($request->unit_id);

            $item = Ticket::find($id);
            $item->owner_id = $unit->owner_id;
            $item->unit = $unit->full_number;
            $item->request_name = $request->request_name;
            $item->request_date = date('Y-m-d H:i:s', strtotime($request->request_date));
            $item->request_phone = $request->request_phone;
            $item->request_type_tr = $request->request_type_tr;
            $item->type_fl = $request->type_fl;

            $item->received_date = date('Y-m-d H:i:s', strtotime($request->received_date));
            $item->received_name = $request->received_name;
            $item->received_through = $request->received_through;
            $item->assigned_to = $request->assigned_to;

            $item->form_description = $request->form_description;
            $item->response = $request->response;
            $item->form_handling = $request->form_handling;
            $item->month = $request->month;
            $item->year = $request->year;
            $item->save();

            $cleardata = TicketList::where('form_tiket_id', $id)->delete();
            if($cleardata)
            {
                foreach ($request->list_name as $key_name => $item_name) {
                    if($item_name != '' && $item_name != null){
                        $list_item = new TicketList;
                        $list_item->form_tiket_id = $item->id;
                        $list_item->name = $item_name;
                        // Tambahan
                        $list_item->number = $item->number;
                        $list_item->unit = $item->unit;
                        // Tambahan
                        $list_item->description = $request->list_description[$key_name];
                        $list_item->price = $request->list_price[$key_name];
                        $list_item->qty = $request->list_qty[$key_name];
                        $list_item->jumlah = intval($request->list_price[$key_name]) * intval($request->list_qty[$key_name]);
                        $list_item->save();
                    }
                }
            }

            return redirect('tenant/tiket')->with('success', 'The Data was saved successfully.');
        } catch (\Throwable $th) {
            return redirect('tenant/tiket/edit/'.$id)->withErrors('Sorry, there is an error while adding new data.');
        }
    }
    public function tiket_cancel($id)
    {
        try {
            $tiket = Ticket::find($id);
            $tiket->status = 'Cancel';
            $tiket->save();

            return redirect('tenant/tiket')->with('success', 'The Data was saved successfully.');
        } catch (\Throwable $th) {
            return redirect('tenant/tiket/edit/'.$id)->withErrors('Sorry, there is an error while editing the data.');
        }
    }

    public function tiket_done($id)
    {
        try {
            $tiket = Ticket::find($id);
            $tiket->status = 'Done';
            $tiket->save();

            return redirect('tenant/tiket')->with('success', 'The Data was saved successfully.');
        } catch (\Throwable $th) {
            return redirect('tenant/tiket/edit/'.$id)->withErrors('Sorry, there is an error while editing the data.');
        }
    }

    public function tiket_pdf($id)
    {
        $tiket = Ticket::with('owner','list')->find($id);
        $data['tiket'] = $tiket;

        $pdf = PDF::loadview('tenant.tiket.pdf', $data)
        ->setOptions(['defaultFont' => 'calibri', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'chroot' => public_path('app-assets/images')])
        ->setPaper('Legal','potrait');
        return $pdf->stream($tiket->number.'.pdf');
    }

    public function export_pdf()
    {
        $tiketlist = TicketList::all();
        $data['tiketlist'] = $tiketlist;

        $pdf = PDF::loadview('tenant.tiket.exportpdf', $data)->setOptions(['defaultFont' => 'calibri', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->setPaper('Legal','landscape');
        return $pdf->download();
    }

    public function export()
    {
        return Excel::download(new TicketExports, 'data.xlsx');
    }

    public function tiketDelete($id)
    {
        try {
            $tiket = Ticket::find($id);
            $tiket->delete();

            $tiketlist = Ticketlist::where('ticket_id', $id)->get();
            foreach ($tiketlist as $item) {
                $tiketlist_delete = TicketList::find($item->id);
                $tiketlist_delete->delete();

            }
            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => 'The Data was deleted.'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 500,
                'status' => false,
                'message' => 'Sorry, there is an error while deleting the data.'
            ]);
        }
    }
}
