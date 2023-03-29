<?php

namespace App\Exports;

use App\Invoice;
use App\PaymentBank;
use App\FormLayanan;
use App\FormLayananList;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class TicketExports implements FromView, WithTitle
{
        return view('tenant.tiket.exports', [

            'tiketlist' => TicketList::whereNull('deleted_at')->get();

        ]);
    }

