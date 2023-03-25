@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Detail Paket </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/estore')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        @if($estore != null)
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Nama Pengirim Paket<span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->sender_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Nama Penerima Paket</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->receiver_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Tanggal Penerimaan Paket <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->received_date}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Building / Tower</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->building}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Eksepedisi</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->ekspedisi}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>E-Store Officer</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->officer}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Kategori Paket</h5>
                                        <div class="controls">
                                            <textarea class="form-control" rows="4" readonly>{{$estore->paket_size}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Assigned To Divisi</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{$estore->work_assigned_to}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Catatan Penerima Pekerjaan</h5>
                                        <div class="controls">
                                            <textarea class="form-control" rows="4" value="{{$estore->remarks}}" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <hr>
                            <h3 class="text-center">Foto Data Penerimaan Paket</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Foto Ekspedisi Bersama Paket</h5>
                                        <div class="controls">
                                            @if ($estore->sender_image1 != null)
                                                <img src="{{asset($estore->sender_image1)}}" style="width: 100%;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Foto Paket</h5>
                                        <div class="controls">
                                            @if ($estore->sender_image2 != null)
                                                <img src="{{asset($estore->sender_image2)}}" style="width: 100%;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <h3 class="text-center">Data Penerima Paket</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Foto Penerima Paket</h5>
                                        <div class="controls">
                                            @if ($estore->receiver_image1 != null)
                                                <img src="{{asset($estore->receiver_image1)}}" style="width: 100%;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="text-center">Foto Paket</h5>
                                        <div class="controls">
                                            @if ($estore->receiver_image2 != null)
                                                <img src="{{asset($estore->receiver_image2)}}" style="width: 100%;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Status</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{strtoupper($estore->status)}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Take Date</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" value="{{strtoupper($estore->take_date)}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-md-12 text-center">Mohon maaf data tidak ditemukan</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
