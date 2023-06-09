<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Database Penumpang dan Tujuan Peserta Mudik</title>
    @include('tenant.tiket.pdf_styles')
</head>
<body>
    <!-- Invoice Company Details -->
    <table style="width: 100%;padding: 0;margin: 0;">
        <tr>
            <td style="padding: 0;margin: 0;width: 8%;text-align: left;">
                <img src="{{ asset('app-assets') }}/images/taspen.png" alt="Company Logo" style="padding: 0;margin: 0;height: 90px;padding-bottom: 12px;" />
            </td>
            <td style="padding: 0;margin: 0;width: 92%;text-align: center;">
                <ul class="px-0 list-unstyled">
                    <li style="font-weight: bold;font-size: 20px;font-weight: bold;padding-bottom: 4px;">Database Penumpang dan Tujuan Peserta Mudik</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;"></li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <table class="table table-striped table-bordered" style="width: 100% !important;">
        <thead>
            <tr>
                <th style="width: 2%;">No</th>
                <th style="width: 10%;">Number</th>
                <th style="width: 10%;">Bus</th>
                <th style="width: 10%;">Nama</th>
                <th style="width: 10%;">Tlp.</th>
                <th style="width: 10%;">Tujuan</th>
                <th style="width: 10%;">Type</th>
                <th style="width: 10%;">Rute</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiketlist as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->numbering}}</td>
                <td>{{$item->bus}}</td>
                <td>{{$item->boardname}}</td>
                <td>{{$item->boardphone}}</td>
                <td>{{$item->tujuan}}</td>
                <td>{{$item->boardtype}}</td>
                <td>{{$item->rutee}}</td>
                {{-- <td>{{date('d F Y', strtotime($item->start_date))}}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
