@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Tenant Relation - Form Access Card</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/access/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
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
                                    <th style="width: 1%;">No</th>
                                    <th style="width: 25%;">Tanggal</th>
                                    <th style="width: 15%;">Nama</th>
                                    <th style="width: 15%;">Unit</th>
                                    <th style="width: 15%;">Status</th>
                                    <th style="width: 29%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{date('d F Y H:i', strtotime($item->created_at))}}</td>
                                    <td>{{$item->company_name}}</td>
                                    <td>{{$item->unit}}</td>
                                    <td class="text-center">{!! ($item->status == 'Cancel' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}</td>
                                    <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                        <a href="{{url('/tenant/access/detail/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="la la-file-text"></i>
                                        </a>
                                        <a href="{{url('/tenant/access/edit/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="la la-file-text"> Edits</i>
                                        </a>
                                        @if($item->status == 'Process')
                                        <a href="{{url('/tenant/access/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Cancel">
                                            <i class="la la-close"></i>
                                        </a>
                                        <a href="{{url('/tenant/access/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Done">
                                            <i class="la la-check"></i>
                                        </a>
                                        @endif
                                        <a href="{{url('/tenant/access/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
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
@endsection
