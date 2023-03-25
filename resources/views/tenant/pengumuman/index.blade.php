@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Pengumuman</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/billing/pengumuman/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
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
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">No</th>
                                    <th>Tanggal</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Document</th>
                                    <th style="width: 100px;">Email</th>
                                    <th style="width: 100px;">Actions Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{date('d F Y H:i', strtotime($item->created_at))}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if ($item->image != null && $item->image != '')
                                        <a href="{{$item->image}}" target="_blank">Lihat Image</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->document != null && $item->document != '')
                                        <a href="{{$item->document}}" target="_blank">Lihat Document</a>
                                        @endif
                                    </td>
                                    <td class="p-0 text-center text-nowrap" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                        @if ($item->status == 'unsent')
                                            <a href="{{url('/billing/pengumuman/blast/'.$item->id)}}" class="btn btn-sm btn-outline-info" title="Blast">
                                                <i class="la la-send"></i> Owner & Resident
                                            </a>
                                            <a href="{{url('/billing/pengumuman2/blast/'.$item->id)}}" class="btn btn-sm btn-outline-info" title="Blast">
                                                <i class="la la-send"></i> Resident
                                            </a>
                                            <a href="{{url('/billing/pengumuman3/blast/'.$item->id)}}" class="btn btn-sm btn-outline-info" title="Blast">
                                                <i class="la la-send"></i> Ownership
                                            </a>
                                            <a href="{{url('/billing/pengumuman4/blast/'.$item->id)}}" class="btn btn-sm btn-outline-info" title="Blast">
                                                <i class="la la-send"></i> Testing
                                            </a>
                                        @else
                                            <h4><span class="badge badge-success">Total {{$item->blast->count()}}<hr style="margin-top: 4px;margin-bottom: 4px;border-color: #FFF;">Terkirim {{$item->blast->where('status', 'sent')->count()}}</span></h4>
                                        @endif
                                    </td>
                                    <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                        <a href="{{url('/billing/pengumuman/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit"><i class="la la-edit"></i></a>
                                        <button type="button" class="btn btn-sm btn-outline-danger" title="Delete" onclick="actionDelete('{{url('/billing/pengumuman/delete/'.$item->id)}}')"><i class="la la-trash"></i></button>
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
function actionDelete(url){
    swal({
        title: "Are you sure?",
        text: "You will not be able to revert this action!",
        icon: "warning",
        showCancelButton: true,
        buttons: {
            cancel: {
                text: "No, cancel!",
                value: null,
                visible: true,
                className: "btn-warning",
                closeModal: false,
            },
            confirm: {
                text: "Yes, delete it!",
                value: true,
                visible: true,
                className: "btn-danger",
                closeModal: false
            }
        }
    }).then(isConfirm => {
        if (isConfirm) {
            $.get(url).done(function( data ) {
                swal("Deleted!", data.message, "success");
                setTimeout(() => {
                    location.reload();
                }, 1000);
            }).fail(function( error ) {
                swal("Cancelled", error.message, "error");
            });
        } else {
            swal("Cancelled", "Your selected data is safe :)", "error");
        }
    });
}
</script>
@endsection
