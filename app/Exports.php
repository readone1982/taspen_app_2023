<?php

namespace App\Exports;

use App\Ticketlist;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TicketExports implements FromView
{
    public function view(): View
    {
        return view('tenant.tiket.exports', [
            'tiketlist' => TicketList::all()
        ]);
    }
}
