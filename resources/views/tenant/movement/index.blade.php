@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Tenant Relation - Item Movement</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/movement/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
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
                        {{-- Dika --}}
                        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link" id="process-tab" data-toggle="tab" href="#process" role="tab" aria-controls="process" aria-selected="false">ON PROCESS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="done-tab" data-toggle="tab" href="#done" role="tab" aria-controls="done" aria-selected="false">COMPLETED</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">CANCELED</a>
                            </li>
                        </ul> --}}
                        {{-- Dika --}}
                        <table class="table table-striped table-bordered zero-configuration table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 1%; text-align: center;">No</th>
                                    <th style="width: 10%; text-align: center;">Tanggal</th>
                                    <th style="width: 15%; text-align: center;">Number</th>
                                    <th style="width: 10%; text-align: center;">Unit</th>
                                    <th style="width: 10%; text-align: center;">Status</th>
                                    <th style="width: 10%; text-align: center;">Handling By</th>
                                    <th style="width: 10%; text-align: center;">Category</th>
                                    <th style="width: 29%; text-align: center;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{date('d F Y H:i', strtotime($item->request_date))}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->unit}}</td>
                                    <td class="text-center">{!! ($item->status == 'Cancel' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}</td>
                                    <td>{{$item->by_user}}</td>
                                    <td>{{$item->imv_cat}}</td>
                                    <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                        <a href="{{url('/tenant/movement/detail/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="la la-file-text"></i>
                                        </a>
                                        @if($item->status == 'Process')
                                        <a href="{{url('/tenant/movement/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                            <i class="la la-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-outline-success" title="Cancel" onclick="actionReject('{{url('/tenant/movement/cancel/'.$item->id)}}')">
                                            <i class="la la-close"></i>
                                        </a>
                                        <a class="btn btn-sm btn-outline-success" title="Done" onclick="actionConfirm('{{url('/tenant/movement/done/'.$item->id)}}')">
                                            <i class="la la-check"></i>
                                        </a>
                                        @endif
                                        <a href="{{url('/tenant/movement/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                            <i class="la la-print"></i>
                                        </a>
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
</section>
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
    </script>
@endsection
