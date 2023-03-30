@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Database Ticketing</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tiket/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
                            <li><a href="{{url('/tiket/exportpdf')}}" class="btn btn-sm btn-success btn-min-width box-shadow-3">PDF Data</a></li>
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
                                    <td style="width: 10%;" class="text-center text-nowrap">{{date('d F Y', strtotime($item->request_date))}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->coding_bus}}</td>
                                    <td>{{$item->rute_awal}}</td>
                                    <td>{{$item->tujuan2}}</td>
                                    <td style="width: 10%;" class="text-center text-nowrap">{{date('d F Y', strtotime($item->boarding_date))}}</td>
                                    <td>{{$item->lintasan}}</td>
                                    <td class="p-0 text-center text-nowrap" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                        <a href="{{url('/tiket/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                            <i class="la la-print">Print / PDF</i>
                                            @if (Auth::user()->jabatan != 'admin')

                                                @else
                                                <a href="{{url('/tiket/delete/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Print">
                                                    <i class="la la-print">Delete</i>
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
</section>
{{-- new --}}
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

$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );

    new $.fn.dataTable.FixedHeader( table );
} );
</script>


@endsection
