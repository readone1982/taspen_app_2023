@extends('layouts.app')

@section('content')
@php
$total_unit = \App\Unit::whereNull('deleted_at')->count();
$total_tagihan = \App\Invoice::where('year', date('Y'))->where('month', intval(date('m')))->whereNull('deleted_at')->count();
$total_payment = \App\Invoice::has('payment')->where('year', date('Y'))->where('month', intval(date('m')))->whereNull('deleted_at')->count();
$complain = \App\Complain::with('owner')->orderBy('id', 'desc')->limit(5)->get();
$payment = \App\Payment::with('invoice','payment_method')->orderBy('id', 'desc')->limit(10)->get();
$flt = \App\FormLayanan::with('owner')->orderBy('id', 'desc')->limit(10)->get();
// //////////////////////////////Invoice //////////////////////////
// $total_email_sent = \App\Invoice::has('sent')->where('year', date('Y'))->where('month', intval(date('m')))->whereNull('deleted_at')->count();

$pendapatan_listrik = 0;
$pendapatan_air = 0;
$pendapatan_sinking = 0;
$pendapatan_service = 0;
$pendapatan_denda = 0;
$pendapatan_admin = 0;
$pendapatan_lain = 0;
$grand_total_pendapatan = 0;
// Piutang
$piutang_listrik = 0;
$piutang_air = 0;
$piutang_sinking = 0;
$piutang_service = 0;
$piutang_denda = 0;
$piutang_admin = 0;
$piutang_lain = 0;
$grand_total_piutang = 0;
// close
// Selisih
$grand_total_selisih = 0;
// Selisih
$invoice_paid = \App\Invoice::has('payment')->where('year', date('Y'))->where('month', intval(date('m')))->whereNull('deleted_at')->get();
foreach ($invoice_paid as $key => $value) {
    $pendapatan_listrik = $pendapatan_listrik + $value->listrik_total_biaya;
    $pendapatan_air = $pendapatan_air + $value->air_total_biaya;
    $pendapatan_sinking = $pendapatan_sinking + $value->sinking_fund;
    $pendapatan_service = $pendapatan_service + $value->service_charge;
    $pendapatan_denda = $pendapatan_denda + $value->denda;
    $pendapatan_admin = $pendapatan_admin + $value->biaya_administrasi;
    $pendapatan_lain = $pendapatan_lain + $value->biaya_lainnya;
    $grand_total_pendapatan = $grand_total_pendapatan + $value->grand_total;
}
$invoice_unpaid = \App\Invoice::doesnthave('payment')->where('year', date('Y'))->where('month', intval(date('m')))->whereNull('deleted_at')->get();
foreach ($invoice_unpaid as $key => $value) {
    $piutang_listrik = $piutang_listrik + $value->listrik_total_biaya;
    $piutang_air = $piutang_air + $value->air_total_biaya;
    $piutang_sinking = $piutang_sinking + $value->sinking_fund;
    $piutang_service = $piutang_service + $value->service_charge;
    $piutang_denda = $piutang_denda + $value->denda;
    $piutang_admin = $piutang_admin + $value->biaya_administrasi;
    $piutang_lain = $piutang_lain + $value->biaya_lainnya;
    $grand_total_piutang = $grand_total_piutang + $value->grand_total;
}
$grand_total_selisih = $grand_total_piutang - $grand_total_pendapatan;
// $invoice_unpaid = \App\Invoice::where('year', date('Y'))->where('month', intval(date('m')))->whereNull('deleted_at')->count();
// foreach ($invoice_unpaid as $key => $value) {
//     $piutang_listrik = $piutang_listrik + $value->listrik_total_biaya;
// }
@endphp
<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">{{$total_unit}}</h3>
                            <h6>Total Unit</h6>
                        </div>
                        <div>
                            <i class="icon-home info font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning">{{$total_tagihan}}</h3>
                            <h6>Tagihan Bulan Ini</h6>
                        </div>
                        <div>
                            <i class="icon-basket warning font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$total_payment}}</h3>
                            <h6>Unit Sudah Bayar</h6>
                        </div>
                        <div>
                            <i class="icon-credit-card success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="danger">{{intval($total_tagihan - $total_payment)}}</h3>
                            <h6>Unit Belum Bayar</h6>
                        </div>
                        <div>
                            <i class="icon-info danger font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Dika New --}}
<div class="row">
    <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">Rp {{number_format($grand_total_piutang, 0, ',', '.')}}</h3>
                            <h6>Grand Total Invoice</h6>
                        </div>
                        <div>
                            <i class="icon-credit-card danger font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">Rp {{number_format($grand_total_pendapatan, 0, ',', '.')}}</h3>
                            <h6>Grand Total Pendapatan</h6>
                        </div>
                        <div>
                            <i class="icon-info success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">Rp {{number_format($grand_total_selisih, 0, ',', '.')}}</h3>
                            <h6>Selisih Penagihan</h6>
                        </div>
                        <div>
                            <i class="icon-info danger font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Dika New --}}
{{-- Dashboard email address--}}
    {{-- <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">{{intval($total_email_sent)}}</h3>
                                <h6>Total Email Terkirim</h6>
                            </div>
                            <div>
                                <i class="icon-info danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- Dashboard Dika --}}
{{-- <div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">{{$total_unit}}</h3>
                            <h6>Total Unit</h6>
                        </div>
                        <div>
                            <i class="icon-credit-card success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning">{{$total_tagihan}}</h3>
                            <h6>Tagihan Bulan Ini</h6>
                        </div>
                        <div>
                            <i class="icon-credit-card success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{$total_payment}}</h3>
                            <h6>Unit Sudah Bayar</h6>
                        </div>
                        <div>
                            <i class="icon-credit-card success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="danger">{{intval($total_tagihan - $total_payment)}}</h3>
                            <h6>Unit Belum Bayar</h6>
                        </div>
                        <div>
                            <i class="icon-credit-card success font-large-2 float-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- Close Tag tinggal hapus --}}

<div class="row">
    <div id="recent-transactions" class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pembayaran Terakhir</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">Tanggal</th>
                                <th class="border-top-0">Unit</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Metode</th>
                                <th class="border-top-0">Total</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment as $item)
                            <tr>
                                <td class="text-truncate">{{$item->date}}</td>
                                <td class="text-truncate">{{$item->invoice->unit->full_number}}</td>
                                <td class="text-truncate">{{$item->name}}</td>
                                <td class="text-truncate">{{$item->payment_method->name}}</td>
                                <td class="text-truncate">{{number_format($item->total, 0, ',', '.')}}</td>
                                <td class="text-truncate">
                                    @if ($item->status == 'ACRUAL PAID')
                                    <i class="la la-dot-circle-o success font-medium-1 mr-1"></i> LUNAS
                                    @elseif ($item->status == 'NOT ACRUAL - KURANG BAYAR')
                                    <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> KURANG
                                    @elseif ($item->status == 'ACRUAL - LEBIH BAYAR')
                                    <i class="la la-dot-circle-o info font-medium-1 mr-1"></i> LEBIH
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bawaan dari Sahrul -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pendapatan Bulan Ini</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content">
                <div id="cost-revenue" class="height-250 position-relative"></div>
            </div>
            <div class="card-footer">
                <div class="row mt-1">
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Listrik</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_listrik, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Air</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_air, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Sinking Fund</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_sinking, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Service Charge</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_service, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Denda</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_denda, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Administrasi</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_admin, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Pendapatan Lainnya</h6>
                        <h2 class="block font-weight-normal">{{number_format($pendapatan_lain, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Grand Total Pendapatan</h6>
                        <h2 class="block font-weight-normal">{{number_format($grand_total_pendapatan, 0, ',', '.')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Close Tag Bawaan Sahrul -->
<!-- Tambahan Dari Dika untuk Piutang Table -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Piutang</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content">
                <div id="cost-revenue2" class="height-250 position-relative"></div>
            </div>
            <div class="card-footer">
                <div class="row mt-1">
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Listrik</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_listrik, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Air</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_air, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Sinking Fund</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_sinking, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Service Charge</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_service, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Denda</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_denda, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Administrasi</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_admin, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">piutang Lainnya</h6>
                        <h2 class="block font-weight-normal">{{number_format($piutang_lain, 0, ',', '.')}}</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-6 text-center">
                        <h6 class="text-muted">Grand Total piutang</h6>
                        <h2 class="block font-weight-normal">{{number_format($grand_total_piutang, 0, ',', '.')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Close Tag Piutang Grafik -->

<!-- Complain Table -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Complain Terbaru</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                    <div class="table-responsive">
                        <table id="new-orders-table" class="table table-hover table-xl mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Unit</th>
                                    <th class="border-top-0">Description</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complain as $item)
                                <tr>
                                    <td class="text-truncate">{{date('d F Y H:i', strtotime($item->created_at))}}</td>
                                    <td class="text-truncate">{{$item->owner->name}}</td>
                                    <td class="text-truncate">{{$item->unit}}</td>
                                    <td class="text-truncate">{{$item->description}}</td>
                                    <td class="text-truncate">
                                        {!! ($item->status == 'OPEN' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- FLT --}}
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Layanan Tenant</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                    <div class="table-responsive">
                        <table id="new-orders-table" class="table table-hover table-xl mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Unit</th>
                                    <th class="border-top-0">Kategori</th>
                                    <th class="border-top-0">Assigned To</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flt as $item)
                                <tr>
                                    <td class="text-truncate">{{date('d F Y H:i', strtotime($item->created_at))}}</td>
                                    <td class="text-truncate">{{$item->owner->name}}</td>
                                    <td class="text-truncate">{{$item->unit}}</td>
                                    <td class="text-truncate">{{$item->request_type_tr}}</td>
                                    <td class="text-truncate">{{$item->assigned_to}}</td>
                                    <td class="text-truncate">
                                        {!! ($item->status == 'Process' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="monthly-sales" class="height-250" style="position: absolute;visibility: hidden;top: 0;"></div>

{{-- <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div> --}}
@endsection
