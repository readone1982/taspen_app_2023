@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Database Ticketing - </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tiket/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
                            <li><a href="{{url('/tiket/exportpdf')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Export Data</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard pt-0">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul class="m-0 pl-3">
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="m-0 pl-3">
                                    <li>{{$errors->first()}}</li>
                                </ul>
                            </div>
                            @endif
                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="process-tab" data-toggle="tab" href="#process" role="tab" aria-controls="process" aria-selected="true">Process</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="done-tab" data-toggle="tab" href="#done" role="tab" aria-controls="done" aria-selected="false">Done</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">Cancel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="waiting-tab" data-toggle="tab" href="#waiting" role="tab" aria-controls="waiting" aria-selected="false">Waiting</a>
                                </li> --}}
                            </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="process" role="tabpanel" aria-labelledby="process-tab" style="padding-top: 15px;">
                                        <div class="table-responsive-xl">
                                            <table class="table table-striped table-bordered zero-configuration table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal Pemesanan</th>
                                                        <th>No. Tiket</th>
                                                        <th>Armada</th>
                                                        <th>Rute Awal</th>
                                                        <th>Tujuan</th>
                                                        <th>Tanggal Keberangkatan</th>
                                                        <th>Rute</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($process as $item)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>
                                                        <td style="width: 10%;" class="text-center text-nowrap">{{date('d F Y H:i', strtotime($item->request_date))}}</td>
                                                        <td>{{$item->number}}</td>
                                                        <td>{{$item->coding_bus}}</td>
                                                        <td>{{$item->rute_awal}}</td>
                                                        <td>{{$item->tujuan2}}</td>
                                                        <td>{{$item->boarding_date}}</td>
                                                        <td>{{$item->lintasan}}</td>
                                                        <td class="p-0 text-center text-nowrap" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                            <a href="{{url('/tiket/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                                <i class="la la-print">Print / PDF</i>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="done" role="tabpanel" aria-labelledby="done-tab" style="padding-top: 15px;">
                                        <div class="table-responsive-xl">
                                            <table class="table table-striped table-bordered zero-configuration table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%;">No</th>
                                                        <th style="width: 10%;">Tanggal</th>
                                                        <th style="width: 15%;">Number</th>
                                                        <th style="width: 5%;">Unit</th>
                                                        <th style="width: 5%;">Handling By</th>
                                                        <th style="width: 15rem;">Request Type</th>
                                                        <th style="width: 10%;">Request Description</th>
                                                        <th style="width: 10%;">Received Through</th>
                                                        <th style="width: 10%;">Form Handling</th>
                                                        <th style="width: 10%;">Assigned To</th>
                                                        <th style="width: 5%;">Status</th>
                                                        <th style="width: 5%;">Diselesaikan Oleh</th>
                                                        <th style="width: 5%;">Tanggal Selesai</th>
                                                        <th style="width: 5%;">Catatan</th>
                                                        <th style="width: 5%;">Updated At / Done Time Tenant Relation</th>
                                                        <th style="width: 5%;">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($done as $item)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>
                                                        <td class="text-center text-nowrap">{{date('d F Y H:i', strtotime($item->request_date))}}</td>
                                                        <td>{{$item->number}}</td>
                                                        <td>{{$item->unit}}</td>
                                                        <td>{{$item->received_name}}</td>
                                                        <td>{{$item->request_type_tr}}</td>
                                                        <td>{{$item->form_description}}</td>
                                                        <td>{{$item->received_through}}</td>
                                                        <td>{{$item->form_handling}}</td>
                                                        <td>{{$item->assigned_to}}</td>
                                                        <td class="text-center">{!! ($item->status == 'Process' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}</td>
                                                        <td>{{$item->done_by}}</td>
                                                        @if($item->done_date != null)
                                                        <td>{{date('d F Y H:i', strtotime($item->done_date))}}</td>
                                                        @else
                                                        <td>{{$item->status}}</td>
                                                        @endif
                                                        <td>{{$item->note}}</td>
                                                        <td>{{date('d F Y H:i', strtotime($item->updated_at))}}</td>

                                                        <td class="p-0 text-center text-nowrap" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                            <a href="{{url('/tenant/layanan/detail/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Detail">
                                                                <i class="la la-file-text">Detail</i>
                                                            </a>
                                                            @if($item->status == 'Process')
                                                            <a href="{{url('/tenant/layanan/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                                <i class="la la-edit">Edit</i>
                                                            </a>
                                                            <a class="btn btn-sm btn-outline-success" title="Cancel" onclick="actionReject('{{url('/tenant/layanan/cancel/'.$item->id)}}')">
                                                                <i class="la la-close"> Cancel</i>
                                                            </a>
                                                            @endif
                                                            <a href="{{url('/tenant/layanan/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                                <i class="la la-print">Print</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="cancel" role="tabpanel" aria-labelledby="cancel-tab" style="padding-top: 15px;">
                                        {{-- Close Tag Dika --}}
                                        <div class="table-responsive-xl">
                                            <table class="table table-striped table-bordered zero-configuration table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%;">No</th>
                                                        <th style="width: 10%;">Tanggal</th>
                                                        <th style="width: 15%;">Number</th>
                                                        <th style="width: 5%;">Unit</th>
                                                        <th style="width: 5%;">Handling By</th>
                                                        <th style="width: 15rem;">Request Type</th>
                                                        <th style="width: 10%;">Request Description</th>
                                                        <th style="width: 10%;">Received Through</th>
                                                        <th style="width: 10%;">Form Handling</th>
                                                        <th style="width: 10%;">Assigned To</th>
                                                        <th style="width: 5%;">Status</th>
                                                        <th style="width: 5%;">Diselesaikan Oleh</th>
                                                        <th style="width: 5%;">Tanggal Selesai</th>
                                                        <th style="width: 5%;">Catatan</th>
                                                        <th style="width: 5%;">Updated At / Done Time Tenant Relation</th>
                                                        <th style="width: 5%;">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cancel as $item)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>
                                                        <td class="text-center text-nowrap">{{date('d F Y H:i', strtotime($item->request_date))}}</td>
                                                        <td>{{$item->number}}</td>
                                                        <td>{{$item->unit}}</td>
                                                        <td>{{$item->received_name}}</td>
                                                        <td>{{$item->request_type_tr}}</td>
                                                        <td>{{$item->form_description}}</td>
                                                        <td>{{$item->received_through}}</td>
                                                        <td>{{$item->form_handling}}</td>
                                                        <td>{{$item->assigned_to}}</td>
                                                        <td class="text-center">{!! ($item->status == 'Process' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}</td>
                                                        <td>{{$item->done_by}}</td>
                                                        @if($item->done_date != null)
                                                        <td>{{date('d F Y H:i', strtotime($item->done_date))}}</td>
                                                        @else
                                                        <td>{{$item->status}}</td>
                                                        @endif
                                                        <td>{{$item->note}}</td>
                                                        <td>{{date('d F Y H:i', strtotime($item->updated_at))}}</td>

                                                        <td class="p-0 text-center text-nowrap" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                            <a href="{{url('/tenant/layanan/detail/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Detail">
                                                                <i class="la la-file-text">Detail</i>
                                                            </a>
                                                            @if($item->status == 'Process')
                                                            <a href="{{url('/tenant/layanan/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                                <i class="la la-edit">Edit</i>
                                                            </a>
                                                            <a class="btn btn-sm btn-outline-success" title="Cancel" onclick="actionReject('{{url('/tenant/layanan/cancel/'.$item->id)}}')">
                                                                <i class="la la-close"> Cancel</i>
                                                            </a>
                                                            <a class="btn btn-sm btn-outline-success" title="Done" onclick="actionConfirm('{{url('/tenant/layanan/done/'.$item->id)}}')">
                                                                <i class="la la-check"> Done</i>
                                                            </a>
                                                            @endif
                                                            <a href="{{url('/tenant/layanan/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                                <i class="la la-print">Print</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- waiting --}}
                                    <div class="tab-pane fade show" id="waiting" role="tabpanel" aria-labelledby="waiting-tab" style="padding-top: 15px;">
                                        {{-- Close Tag Dika --}}
                                        <div class="table-responsive-xl">
                                            <table class="table table-striped table-bordered zero-configuration table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 1%;">No</th>
                                                        <th style="width: 10%;">Tanggal</th>
                                                        <th style="width: 15%;">Number</th>
                                                        <th style="width: 5%;">Unit</th>
                                                        <th style="width: 5%;">Handling By</th>
                                                        <th style="width: 15rem;">Request Type</th>
                                                        <th style="width: 10%;">Request Description</th>
                                                        <th style="width: 10%;">Received Through</th>
                                                        <th style="width: 10%;">Form Handling</th>
                                                        <th style="width: 10%;">Assigned To</th>
                                                        <th style="width: 5%;">Status</th>
                                                        <th style="width: 5%;">Diselesaikan Oleh</th>
                                                        <th style="width: 5%;">Tanggal Selesai</th>
                                                        <th style="width: 5%;">Catatan</th>
                                                        <th style="width: 5%;">Updated At / Done Time Tenant Relation</th>
                                                        <th style="width: 5%;">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($waiting as $item)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>
                                                        <td class="text-center text-nowrap">{{date('d F Y H:i', strtotime($item->request_date))}}</td>
                                                        <td>{{$item->number}}</td>
                                                        <td>{{$item->unit}}</td>
                                                        <td>{{$item->received_name}}</td>
                                                        <td>{{$item->request_type_tr}}</td>
                                                        <td>{{$item->form_description}}</td>
                                                        <td>{{$item->received_through}}</td>
                                                        <td>{{$item->form_handling}}</td>
                                                        <td>{{$item->assigned_to}}</td>
                                                        <td class="text-center">{!! ($item->status == 'Process' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}</td>
                                                        <td>{{$item->done_by}}</td>
                                                        @if($item->done_date != null)
                                                        <td class="text-center text-nowrap">{{date('d F Y H:i', strtotime($item->done_date))}}</td>
                                                        @else
                                                        <td class="text-center text-nowrap">{{$item->status}}</td>
                                                        @endif
                                                        <td>{{$item->note}}</td>
                                                        <td class="text-center text-nowrap">{{date('d F Y H:i', strtotime($item->updated_at))}}</td>

                                                        <td class="p-0 text-center text-nowrap" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                  Actions
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <a href="{{url('/tenant/layanan/detail/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Detail">
                                                                        <i class="la la-file-text">Detail</i>
                                                                    </a>
                                                                    @if($item->status == 'Process')
                                                                    <a href="{{url('/tenant/layanan/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                                        <i class="la la-edit">Edit</i>
                                                                    </a>
                                                                    <a class="btn btn-sm btn-outline-success" title="Cancel" onclick="actionReject('{{url('/tenant/layanan/cancel/'.$item->id)}}')">
                                                                        <i class="la la-close"> Cancel</i>
                                                                    </a>
                                                                    <a class="btn btn-sm btn-outline-success" title="Done" onclick="actionConfirm('{{url('/tenant/layanan/done/'.$item->id)}}')">
                                                                        <i class="la la-check"> Done</i>
                                                                    </a>
                                                                    @endif
                                                                    @if($item->status == 'Waiting For Finished')
                                                                    <a class="btn btn-sm btn-outline-success" title="Done" onclick="actionConfirm('{{url('/tenant/layanan/done/'.$item->id)}}')">
                                                                        <i class="la la-check"> Done</i>
                                                                    </a>
                                                                    <a href="{{url('/tenant/layanan/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                                        <i class="la la-print">Print</i>
                                                                    </a>
                                                                </ul>
                                                            </div>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- waiting --}}
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
{{-- Script --}}
<script>
function actionConfirm(url){
    swal({
        title: "Are You Sure ?",
        text: "Data ini tidak dapat dirubah kembali",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Tidak, batalkan!",
                value: null,
                visible: true,
                className: "btn-warning",
                closeModal: false,
            },
            confirm: {
                text: "Ya, konfirmasi!",
                value: true,
                visible: true,
                className: "btn-success",
                closeModal: false
            }
        }
    }).then(isConfirm => {
        if (isConfirm) {
            $.get(url).done(function( data ) {
                swal("Sukses", "Data Berhasil Di Proses");
                setTimeout(() => {
                    location.reload();
                }, 1000);
            }).fail(function( error ) {
                swal("Aksi dibatalkan", error.message, "error");
            });
        } else {
            swal("Cancelled", "Your selected data is safe :)", "error");
        }
    });
}

function actionReject(url){
    swal({
        title: "Apa Anda yakin ?",
        text: "Data ini akan terCancel",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Tidak, batalkan!",
                value: null,
                visible: true,
                className: "btn-warning",
                closeModal: false,
            },
            confirm: {
                text: "Ya, Batalkan FLT",
                value: true,
                visible: true,
                className: "btn-danger",
                closeModal: false
            }
        }
    }).then(isConfirm => {
        if (isConfirm) {
            $.get(url).done(function( data ) {
                swal("Sukses", "Data berhasil di tolak!");
                setTimeout(() => {
                    location.reload();
                }, 1000);
            }).fail(function( error ) {
                swal("Aksi dibatalkan", error.message, "error");
            });
        } else {
            swal("Cancelled", "Your selected data is safe :)", "error");
        }
    });
}

function actionFilter(url){
    var year = $('#year').val()
    var month = $('#month').val()
    window.location = url+'/'+year+'/'+month;
}
</script>

@endsection
