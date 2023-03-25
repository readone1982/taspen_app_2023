@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Estore - Electronic Store</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li style="text-align: right;">
                                Filter Data :
                            </li>
                            <li>
                                <select class="select2 form-control w-100" id="date" name="date">
                                    <option value="{{ date('d')+1 }}">{{ date('d')+1 }}</option>
                                    @for ($i = 0; $i < 5; $i++)
                                        <option value="{{ date('d')-$i }}" {{($date == (date('d')-$i)) ? 'selected' : ''}}>{{ date('d')-$i }}</option>
                                    @endfor
                                </select>
                            </li>
                            <li>
                                <select class="select2 form-control w-100" id="year" name="year">
                                    <option value="{{ date('Y')+1 }}">{{ date('Y')+1 }}</option>
                                    @for ($i = 0; $i < 5; $i++)
                                        <option value="{{ date('Y')-$i }}" {{($year == (date('Y')-$i)) ? 'selected' : ''}}>{{ date('Y')-$i }}</option>
                                    @endfor
                                </select>
                            </li>
                            <li style="width: 175px;">
                                <select class="select2 form-control w-100" id="month" name="month">
                                    <option value="1" {{(intval($month) == 1) ? 'selected' : ''}}>Januari</option>
                                    <option value="2" {{(intval($month) == 2) ? 'selected' : ''}}>Februari</option>
                                    <option value="3" {{(intval($month) == 3) ? 'selected' : ''}}>Maret</option>
                                    <option value="4" {{(intval($month) == 4) ? 'selected' : ''}}>April</option>
                                    <option value="5" {{(intval($month) == 5) ? 'selected' : ''}}>Mei</option>
                                    <option value="6" {{(intval($month) == 6) ? 'selected' : ''}}>Juni</option>
                                    <option value="7" {{(intval($month) == 7) ? 'selected' : ''}}>Juli</option>
                                    <option value="8" {{(intval($month) == 8) ? 'selected' : ''}}>Agustus</option>
                                    <option value="9" {{(intval($month) == 9) ? 'selected' : ''}}>September</option>
                                    <option value="10" {{(intval($month) == 10) ? 'selected' : ''}}>Oktober</option>
                                    <option value="11" {{(intval($month) == 11) ? 'selected' : ''}}>November</option>
                                    <option value="12" {{(intval($month) == 12) ? 'selected' : ''}}>Desember</option>
                                </select>
                            </li>
                            <li><a href="{{url('tenant/estore/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                    {{-- ori --}}
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('tenant/estore/create')}}" class="btn btn-sm btn-info btn-min-width box-shadow-3">Add Data</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                    {{-- ori --}}
                </div>
                {{-- Belajar --}}
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-2">
                            <div class="card2 pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger"></h3>
                                                <h6>Received</h6>
                                            </div>
                                            <div>
                                                <i class="bi bi-person-bounding-box primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-2">
                            <div class="card2 pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger"></h3>
                                                <h6>Taked</h6>
                                            </div>
                                            <div>
                                                <i class="bi bi-person-bounding-box primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-2">
                            <div class="card2 pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger"></h3>
                                                <h6>Mailbox</h6>
                                            </div>
                                            <div>
                                                <i class="bi bi-person-bounding-box primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-2">
                            <div class="card2 pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger"></h3>
                                                <h6>Vanished</h6>
                                            </div>
                                            <div>
                                                <i class="bi bi-person-bounding-box primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Belajar --}}
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
                              <a class="nav-link" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-selected="false">Dashboard Receiving</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" id="stored-tab" data-toggle="tab" href="#stored" role="tab" aria-controls="stored" aria-selected="true">Stored</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="taked-tab" data-toggle="tab" href="#taked" role="tab" aria-controls="taked" aria-selected="false">Taked</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="vanish-tab" data-toggle="tab" href="#vanish" role="tab" aria-controls="vanish" aria-selected="false">Vanished</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mailbox-tab" data-toggle="tab" href="#mailbox" role="tab" aria-controls="vanish" aria-selected="false">Mailbox</a>
                              </li>
                        </ul>
                        {{-- Draft Content --}}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="draft" role="tabpanel" aria-labelledby="draft-tab" style="padding-top: 15px;">
                                <table class="table table-striped table-bordered zero-configuration text-nowrap" style="width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%;">No</th>
                                            <th style="width: 5%;">Unit</th>
                                            <th style="width: 25%;">No. Document</th>
                                            <th style="width: 15%;">Tanggal Terima Paket</th>
                                            <th style="width: 15%;">Nama Pengirim</th>
                                            <th style="width: 15%;">Ekspedisi Pengirim</th>
                                            <th style="width: 5%;">Umur Paket</th>
                                            <th style="width: 15%;">Status</th>
                                            <th style="width: 15%;">Nama Penerima Berdasarkan Resi</th>
                                            <th style="width: 35%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($draft as $item)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$item->unit}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>{{date('d F Y H:i', strtotime($item->received_date))}}</td>
                                            <td>{{$item->sender_name}}</td>
                                            <td>{{$item->ekspedisi}}</td>
                                            {{-- Umur --}}
                                            <td class="text-center">
                                                @php
                                                if(date('Y-m-d') < date('Y-m-d', strtotime($item->received_date))){
                                                    echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                                }
                                                // else if(date('Y-m-d') > date('Y-m-d', strtotime($item->received_date))){
                                                //     echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                                // }
                                                else{
                                                    $now = time();
                                                    $your_date = strtotime($item->received_date);
                                                    $datediff = $now - $your_date;
                                                    $interval = round($datediff / (60 * 60 * 24));
                                                    $color = '';
                                                    if($interval <= 5){
                                                        $color = 'red';
                                                    }else{
                                                        $color = 'blue';
                                                    }
                                                    echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari</span>';
                                                }
                                                @endphp
                                            </td>
                                            <td>{{$item->status}}</td>
                                            {{-- Umur --}}
                                            <td>{{$item->receiver_name}}</td>
                                            <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                <a href="{{url('tenant/estore/detail/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Detail">
                                                    <i class="bi bi-fingerprint">Detail</i>
                                                </a>
                                                {{-- <a href="{{url('tenant/estore/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="bi bi-clipboard2-check"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Cancel / Vanish">
                                                    <i class="bi bi-person-dash"></i>
                                                </a> --}}
                                                <a href="{{url('tenant/estore/process/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Store Process">
                                                    <i class="bi bi-basket2-fill">Storing Proses</i>
                                                </a>
                                                {{-- <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Process Done Taked">
                                                    <i class="bi bi-key"></i>
                                                </a> --}}
                                                <a href="{{url('tenant/estore/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                    <i class="bi bi-printer">Print</i>
                                                </a>
                                                {{-- <a href="https://wa.me/{{$item->hp}}?text=Hi {{$item->receiver_name}} - {{$item->unit}}, Paket anda dengan No.{{$item->number}} dapat diambil di E-Store Gold Coast Sea View Apartment. Harap menunjukan pesan ini untuk mempermudah pengambilan paket. Terimakasih
                                                _{{ Auth::user()->name }} - {{ Auth::user()->jabatan }}_" target="_blank" class="btn btn-sm btn-outline-primary" title="Hubungi">
                                                    <i class="bi bi-messenger"></i>
                                                </a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- stored Controllers --}}
                            <div class="tab-pane fade" id="stored" role="tabpanel" aria-labelledby="stored-tab" style="padding-top: 15px;">
                                <table class="table table-striped table-bordered zero-configuration text-nowrap" style="width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%;">No</th>
                                            <th style="width: 5%;">Unit</th>
                                            <th style="width: 25%;">No. Document :</th>
                                            <th style="width: 15%;">Tanggal Terima Paket</th>
                                            <th style="width: 15%;">Nama Pengirim</th>
                                            <th style="width: 15%;">Ekspedisi Pengirim</th>
                                            <th style="width: 15%;">Umur Paket</th>
                                            <th style="width: 15%;">Status</th>
                                            <th style="width: 15%;">Nama Penerima Berdasarkan Resi</th>
                                            <th style="width: 15%;">Building</th>
                                            <th style="width: 15%;">Paket Size</th>
                                            <th style="width: 15%;">Officer</th>
                                            <th style="width: 25%;">Actions</th>
                                            <th style="width: 25%;">Sender</th>
                                            <th style="width: 25%;">Receiver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stored as $item)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$item->unit}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>{{date('d F Y H:i', strtotime($item->received_date))}}</td>
                                            <td>{{$item->sender_name}}</td>
                                            <td>{{$item->ekspedisi}}</td>
                                            <td class="text-center">
                                                @php
                                                if(date('Y-m-d') < date('Y-m-d', strtotime($item->received_date))){
                                                    echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                                }
                                                // else if(date('Y-m-d') > date('Y-m-d', strtotime($item->received_date))){
                                                //     echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                                // }
                                                else{
                                                    $now = time();
                                                    $your_date = strtotime($item->received_date);
                                                    $datediff = $now - $your_date;
                                                    $interval = round($datediff / (60 * 60 * 24));
                                                    $color = '';
                                                    if($interval <= 5){
                                                        $color = 'red';
                                                    }else{
                                                        $color = 'blue';
                                                    }
                                                    echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari</span>';
                                                }
                                                @endphp
                                            </td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->receiver_name}}</td>
                                            <td>{{$item->building}}</td>
                                            <td>{{$item->paket_size}}</td>
                                            <td>{{$item->officer}}</td>
                                            <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                <a href="{{url('tenant/estore/detail/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Detail">
                                                    <i class="bi bi-fingerprint">Detail</i>
                                                </a>
                                                <a href="{{url('tenant/estore/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="bi bi-clipboard2-check">Edit</i>
                                                </a>
                                                <a href="{{url('tenant/estore/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Vanish">
                                                    <i class="bi bi-person-dash">Vanish</i>
                                                </a>
                                                {{-- <a href="{{url('tenant/estore/process/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Store Process">
                                                    <i class="bi bi-basket2-fill"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Process Done Taked">
                                                    <i class="bi bi-key"></i>
                                                </a> --}}
                                                <a href="{{url('tenant/estore/mailbox/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Process Mailbox">
                                                    <i class="bi bi-clipboard2-check">Send to Mailbox</i>
                                                </a>
                                                <a href="{{url('tenant/estore/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                    <i class="bi bi-printer">Print</i>
                                                </a>
                                                <a href="https://wa.me/{{$item->hp}}?text=Hi {{$item->receiver_name}} - {{$item->unit}}, Paket anda dengan No.{{$item->number}} dapat diambil di E-Store Gold Coast Sea View Apartment. Harap menunjukan pesan ini untuk mempermudah pengambilan paket. Terimakasih
                                                _{{ Auth::user()->name }} - {{ Auth::user()->jabatan }}_" target="_blank" class="btn btn-sm btn-outline-primary" title="Hubungi">
                                                    <i class="bi bi-messenger">Whatsapp</i>
                                                </a>
                                                <a href="{{url('tenant/estore/edit2/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Update">
                                                    <i class="bi bi-clipboard2-check"> Updates Taked</i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                @if ($item->sender_image1 != null && $item->sender_image1 != '')
                                                <a href="{{$item->sender_image1}}" target="_blank">View</a>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($item->receiver_image1 != null && $item->receiver_image1 != '')
                                                <a href="{{$item->receiver_image1}}" target="_blank">View</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- Completed Controller --}}
                            <div class="tab-pane fade" id="taked" role="tabpanel" aria-labelledby="take-tab" style="padding-top: 15px;">
                                <table class="table table-striped table-bordered zero-configuration text-nowrap" style="width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%;">No</th>
                                            <th style="width: 5%;">Unit</th>
                                            <th style="width: 25%;">No. Document :</th>
                                            <th style="width: 15%;">Tanggal Terima Paket</th>
                                            <th style="width: 15%;">Tanggal Penyerahan Paket</th>
                                            <th style="width: 15%;">Nama Pengirim</th>
                                            <th style="width: 15%;">Ekspedisi Pengirim</th>
                                            <th style="width: 15%;">Status</th>
                                            <th style="width: 15%;">Nama Penerima</th>
                                            <th style="width: 15%;">Building</th>
                                            <th style="width: 25%;">Actions</th>
                                            <th style="width: 25%;">Sender</th>
                                            <th style="width: 25%;">Receiver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($taked as $item)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$item->unit}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>{{date('d F Y H:i', strtotime($item->received_date))}}</td>
                                            <td>{{date('d F Y H:i', strtotime($item->take_date))}}</td>
                                            <td>{{$item->sender_name}}</td>
                                            <td>{{$item->ekspedisi}}</td>
                                            {{-- <td class="text-center">
                                                @php
                                                if(date('Y-m-d') < date('Y-m-d', strtotime($item->received_date))){
                                                    echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                                }
                                                // else if(date('Y-m-d') > date('Y-m-d', strtotime($item->received_date))){
                                                //     echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                                // }
                                                else{
                                                    $now = time();
                                                    $your_date = strtotime($item->received_date);
                                                    $datediff = $now - $your_date;
                                                    $interval = round($datediff / (60 * 60 * 24));
                                                    $color = '';
                                                    if($interval <= 5){
                                                        $color = 'red';
                                                    }else{
                                                        $color = 'blue';
                                                    }
                                                    echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari</span>';
                                                }
                                                @endphp
                                            </td> --}}
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->receiver_name}}</td>
                                            <td>{{$item->building}}</td>
                                            <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                <a href="{{url('tenant/estore/detail/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Detail">
                                                    <i class="bi bi-fingerprint">Detail</i>
                                                </a>
                                                {{-- <a href="{{url('tenant/estore/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="bi bi-clipboard2-check"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Cancel">
                                                    <i class="bi bi-person-dash"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/process/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Store Process">
                                                    <i class="bi bi-basket2-fill"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Process Done Taked">
                                                    <i class="bi bi-key"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Complete">
                                                    <i class="la la-check-square-o"></i>
                                                </a> --}}
                                                <a href="{{url('tenant/estore/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                    <i class="bi bi-printer">Print</i>
                                                </a>
                                                <a href="https://wa.me/{{$item->hp}}?text=Hi {{$item->receiver_name}} - {{$item->unit}}, Paket anda dengan No.{{$item->number}} dapat diambil di E-Store Gold Coast Sea View Apartment. Harap menunjukan pesan ini untuk mempermudah pengambilan paket. Terimakasih
                                                _{{ Auth::user()->name }} - {{ Auth::user()->jabatan }}_" target="_blank" class="btn btn-sm btn-outline-primary" title="Hubungi">
                                                    <i class="bi bi-messenger">Whatsapp</i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                @if ($item->sender_image1 != null && $item->sender_image1 != '')
                                                <a href="{{$item->sender_image1}}" target="_blank">View</a>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($item->receiver_image1 != null && $item->receiver_image1 != '')
                                                <a href="{{$item->receiver_image1}}" target="_blank">View</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- Cancel controller --}}
                            <div class="tab-pane fade" id="vanish" role="tabpanel" aria-labelledby="vanish-tab" style="padding-top: 15px;">
                                <table class="table table-striped table-bordered zero-configuration text-nowrap" style="width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%;">No</th>
                                            <th style="width: 5%;">Unit</th>
                                            <th style="width: 15%;">Tanggal Terima Paket</th>
                                            <th style="width: 15%;">Nama Pengirim</th>
                                            <th style="width: 15%;">Ekspedisi Pengirim</th>
                                            <th style="width: 15%;">Umur Paket</th>
                                            <th style="width: 15%;">Status</th>
                                            <th style="width: 25%;">No. Document :</th>
                                            <th style="width: 15%;">Nama Penerima Berdasarkan Resi</th>
                                            <th style="width: 25%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vanish as $item)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$item->unit}}</td>
                                            <td>{{date('d F Y H:i', strtotime($item->received_date))}}</td>
                                            <td>{{$item->sender_name}}</td>
                                            <td>{{$item->ekspedisi}}</td>
                                            <td class="text-center">
                                                @php
                                                if(date('Y-m-d') < date('Y-m-d', strtotime($item->received_date))){
                                                    echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                                }
                                                // else if(date('Y-m-d') > date('Y-m-d', strtotime($item->received_date))){
                                                //     echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                                // }
                                                else{
                                                    $now = time();
                                                    $your_date = strtotime($item->received_date);
                                                    $datediff = $now - $your_date;
                                                    $interval = round($datediff / (60 * 60 * 24));
                                                    $color = '';
                                                    if($interval <= 5){
                                                        $color = 'red';
                                                    }else{
                                                        $color = 'blue';
                                                    }
                                                    echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari</span>';
                                                }
                                                @endphp
                                            </td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>{{$item->receiver_name}}</td>
                                            <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                <a href="{{url('tenant/estore/detail/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Detail">
                                                    <i class="bi bi-fingerprint">Detail</i>
                                                </a>
                                                <a href="{{url('tenant/estore/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="bi bi-clipboard2-check">Edit</i>
                                                </a>
                                                <a href="{{url('tenant/estore/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Cancel">
                                                    <i class="bi bi-person-dash">Vanish</i>
                                                </a>
                                                <a href="{{url('tenant/estore/process/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Store Process">
                                                    <i class="bi bi-basket2-fill">Back To Storing</i>
                                                </a>
                                                <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Process Done Taked">
                                                    <i class="bi bi-key">Prosess Done Taked</i>
                                                </a>
                                                {{-- <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-primary" title="Complete">
                                                    <i class="la la-check-square-o"></i>
                                                </a> --}}
                                                <a href="{{url('tenant/estore/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                    <i class="bi bi-printer">Print</i>
                                                </a>
                                                <a href="https://wa.me/{{$item->hp}}?text=Hi {{$item->receiver_name}} - {{$item->unit}}, Paket anda dengan No.{{$item->number}} dapat diambil di E-Store Gold Coast Sea View Apartment. Harap menunjukan pesan ini untuk mempermudah pengambilan paket. Terimakasih
                                                _{{ Auth::user()->name }} - {{ Auth::user()->jabatan }}_" target="_blank" class="btn btn-sm btn-outline-primary" title="Hubungi">
                                                    <i class="bi bi-messenger">Whatsapp</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- mailbox --}}
                            <div class="tab-pane fade" id="mailbox" role="tabpanel" aria-labelledby="mailbox-tab" style="padding-top: 15px;">
                                <table class="table table-striped table-bordered zero-configuration text-nowrap" style="width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%;">No</th>
                                            <th style="width: 5%;">Unit</th>
                                            <th style="width: 25%;">No. Document :</th>
                                            <th style="width: 15%;">Tanggal Terima Paket</th>
                                            <th style="width: 15%;">Nama Pengirim</th>
                                            <th style="width: 15%;">Ekspedisi Pengirim</th>
                                            <th style="width: 15%;">Umur Paket</th>
                                            <th style="width: 15%;">Status</th>
                                            <th style="width: 15%;">Nama Penerima Berdasarkan Resi</th>
                                            <th style="width: 15%;">Building</th>
                                            <th style="width: 15%;">Paket Size</th>
                                            <th style="width: 15%;">Officer</th>
                                            <th style="width: 25%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mailbox as $item)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$item->unit}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>{{date('d F Y H:i', strtotime($item->received_date))}}</td>
                                            <td>{{$item->sender_name}}</td>
                                            <td>{{$item->ekspedisi}}</td>
                                            <td class="text-center">
                                                @php
                                                if(date('Y-m-d') < date('Y-m-d', strtotime($item->received_date))){
                                                    echo '<span style="font-weight: bold;color: red;">DRAFT</span>';
                                                }
                                                // else if(date('Y-m-d') > date('Y-m-d', strtotime($item->received_date))){
                                                //     echo '<span style="font-weight: bold;color: green;">COMPLETED</span>';
                                                // }
                                                else{
                                                    $now = time();
                                                    $your_date = strtotime($item->received_date);
                                                    $datediff = $now - $your_date;
                                                    $interval = round($datediff / (60 * 60 * 24));
                                                    $color = '';
                                                    if($interval <= 5){
                                                        $color = 'red';
                                                    }else{
                                                        $color = 'blue';
                                                    }
                                                    echo '<span style="font-weight: bold;color: '.$color.';">'.$interval.' Hari</span>';
                                                }
                                                @endphp
                                            </td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->receiver_name}}</td>
                                            <td>{{$item->building}}</td>
                                            <td>{{$item->paket_size}}</td>
                                            <td>{{$item->officer}}</td>
                                            <td class="p-0 text-center" style="padding-top: 4px !important;padding-bottom: 4px !important;">
                                                <a href="{{url('tenant/estore/detail/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Detail">
                                                    <i class="bi bi-fingerprint">Detail</i>
                                                </a>
                                                <a href="{{url('tenant/estore/edit/'.$item->id)}}" class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="bi bi-clipboard2-check">Edit</i>
                                                </a>
                                                <a href="{{url('tenant/estore/cancel/'.$item->id)}}" class="btn btn-sm btn-outline-danger" title="Vanish">
                                                    <i class="bi bi-person-dash">Vanish</i>
                                                </a>
                                                {{-- <a href="{{url('tenant/estore/process/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Store Process">
                                                    <i class="bi bi-basket2-fill"></i>
                                                </a> --}}
                                                {{-- <a href="{{url('tenant/estore/done/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Process Done Taked">
                                                    <i class="bi bi-key"></i>
                                                </a> --}}
                                                <a href="{{url('tenant/estore/pdf/'.$item->id)}}" target="_blank" class="btn btn-sm btn-outline-primary" title="Print">
                                                    <i class="bi bi-printer">Print</i>
                                                </a>
                                                <a href="https://wa.me/{{$item->hp}}?text=Hi {{$item->receiver_name}} - {{$item->unit}}, Paket anda dengan No.{{$item->number}} dapat diambil di E-Store Gold Coast Sea View Apartment. Harap menunjukan pesan ini untuk mempermudah pengambilan paket. Terimakasih
                                                _{{ Auth::user()->name }} - {{ Auth::user()->jabatan }}_" target="_blank" class="btn btn-sm btn-outline-primary" title="Hubungi">
                                                    <i class="bi bi-messenger">Whatsapp</i>
                                                </a>
                                                <a href="{{url('tenant/estore/edit2/'.$item->id)}}" class="btn btn-sm btn-outline-success" title="Update">
                                                    <i class="bi bi-clipboard2-check"> Updates Taked</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- mailbox --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>

            .card2 {
                margin-bottom: 24px;
                box-shadow: 0 2px 3px #e4e8f0;
            }
            .card2 {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: rgb(255, 251, 251);
                background-clip: border-box;
                border: 1px solid #494a4a;
                border-radius: 1rem;
            }
            </style>
</section>
@endsection
