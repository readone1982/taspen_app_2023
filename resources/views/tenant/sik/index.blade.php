@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Tenant Relation - Surat Izin Kerja</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/sik/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
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
                                    <th style="width: 25%;">Tanggal Pengajuan</th>
                                    <th style="width: 15%;">Number</th>
                                    <th style="width: 15%;">Unit</th>
                                    <th style="width: 25%;">Rencana Selesai</th>
                                    <th style="width: 15%;">Reminder</th>
                                    <th style="width: 15%;">Status</th>
                                    <th style="width: 40%;">Actions</th>
                                    <th>Jangka Waktu SIK 1 :</th>
                                    <th>Reminder Perpanjangan Ke-1 :</th>
                                    <th>Jangka Waktu SIK 2 : </th>
                                    <th>Reminder Perpanjangan Ke-2 :</th>
                                    <th>Jangka Waktu SIK 3 : </th>
                                    <th>Reminder Perpanjangan Ke-3 :</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{date('d F Y H:i', strtotime($item->created_at))}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->unit}}</td>
                                    <td>{{date('d F Y H:i', strtotime($item->period_end))}}</td>
                                    <td class="text-center">
                                        @php
                                        if(date('Y-m-d') < date('Y-m-d', strtotime($item->period_start))){
                                            echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                        }
                                        else if(date('Y-m-d') > date('Y-m-d', strtotime($item->period_end))){
                                            echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                        }
                                        else{
                                            $now = time();
                                            $your_date = strtotime($item->period_end);
                                            $datediff = $your_date - $now;
                                            $interval = round($datediff / (60 * 60 * 24));
                                            $color = '';
                                            if($interval <= 5){
                                                $color = 'red';
                                            }else{
                                                $color = 'blue';
                                            }
                                            echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari Lagi</span>';
                                        }
                                        @endphp
                                    </td>
                                    <td class="text-center">{!! ($item->status == 'Cancel' ? '<span style ="color: red;font-weight: bold;">'.$item->status.'</span>' : '<span style ="color: green;font-weight: bold;">'.$item->status.'</span>') !!}</td>
                                    <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                        <a href="{{url('/tenant/sik/detail/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Detail">
                                            <i class="la la-file-text"></i>
                                        </a>
                                        @if($item->status == 'Process')
                                        {{-- <a href="{{url('/tenant/sik/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                            <i class="la la-edit"></i>
                                        </a> --}}
                                        <a href="{{url('/tenant/sik/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Cancel">
                                            <i class="la la-close"></i>
                                        </a>
                                        <a href="{{url('/tenant/sik/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Done">
                                            <i class="la la-check"></i>
                                        </a>
                                        @endif
                                        <a href="{{url('/tenant/sik/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                            <i class="la la-print"></i>
                                        </a>
                                            {{-- Updates Pekerjaan --}}
                                        <a href="{{url('/tenant/sik/edit/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Updates">
                                            <i class="la la-check-square-o"></i>
                                        </a>
                                    </td>
                                    <td></td>
                                    {{-- Perpanjangan 1 --}}
                                    <td class="text-center">
                                        @php
                                        if(date('Y-m-d') < date('Y-m-d', strtotime($item->period_start))){
                                            echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                        }
                                        else if(date('Y-m-d') > date('Y-m-d', strtotime($item->period_end))){
                                            echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                        }
                                        else{
                                            $now = time();
                                            $your_date = strtotime($item->period_end);
                                            $datediff = $your_date - $now;
                                            $interval = round($datediff / (60 * 60 * 24));
                                            $color = '';
                                            if($interval <= 5){
                                                $color = 'red';
                                            }else{
                                                $color = 'blue';
                                            }
                                            echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari Lagi</span>';
                                        }
                                        @endphp
                                    </td>
                                    {{-- Perpanjangan ke-1 Close --}}
                                    <td></td>
                                    {{-- {Perpanjangan Ke-2} --}}
                                    <td class="text-center">
                                        @php
                                        if(date('Y-m-d') < date('Y-m-d', strtotime($item->period_start))){
                                            echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                        }
                                        else if(date('Y-m-d') > date('Y-m-d', strtotime($item->period_end))){
                                            echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                        }
                                        else{
                                            $now = time();
                                            $your_date = strtotime($item->period_end);
                                            $datediff = $your_date - $now;
                                            $interval = round($datediff / (60 * 60 * 24));
                                            $color = '';
                                            if($interval <= 5){
                                                $color = 'red';
                                            }else{
                                                $color = 'blue';
                                            }
                                            echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari Lagi</span>';
                                        }
                                        @endphp
                                    </td>
                                    {{-- Perpanjangan Ke-2 --}}
                                    <td></td>
                                    {{-- Perpanjangan Ke-3 --}}
                                    <td class="text-center">
                                        @php
                                        if(date('Y-m-d') < date('Y-m-d', strtotime($item->period_start))){
                                            echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                        }
                                        else if(date('Y-m-d') > date('Y-m-d', strtotime($item->period_end))){
                                            echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                        }
                                        else{
                                            $now = time();
                                            $your_date = strtotime($item->period_end);
                                            $datediff = $your_date - $now;
                                            $interval = round($datediff / (60 * 60 * 24));
                                            $color = '';
                                            if($interval <= 5){
                                                $color = 'red';
                                            }else{
                                                $color = 'blue';
                                            }
                                            echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari Lagi</span>';
                                        }
                                        @endphp
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
