@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Domicile Request </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/domicile')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        @if($domicile != null)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Pengajuan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($domicile->created_at))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$domicile->unit}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Nama </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$domicile->name}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Warga Negara</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$domicile->nationality}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>NIK</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$domicile->nik}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Mulai Berlaku</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$domicile->date_start}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Selesai Berlaku</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$domicile->date_end}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Alamat</h5>
                                    <div class="controls">
                                        <textarea class="form-control" rows="4" readonly>{{$domicile->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Keperluan</h5>
                                    <div class="controls">
                                        <textarea class="form-control" rows="4" readonly>{{$domicile->necessity}}</textarea>
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
