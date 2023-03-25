@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Surat Izin Kerja</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/sik')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Unit</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$sik->unit}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Nama Kontraktor</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$sik->contractor_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Penanggung Jawab</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$sik->pic_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>No. Telpon/ HP</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$sik->phone}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Jumlah Tukang/Pekerja</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$sik->total_workers}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Ruang Lingkup Pekerjaan</h5>
                                        <div class="controls">
                                            <textarea class="form-control w-100" rows="4" readonly>{{$sik->scope_work}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Jam Kerja</h5>
                                        <div class="controls">
                                            <textarea class="form-control w-100" rows="4" readonly>{{$sik->working_hour}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Status Perijinan</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$sik->license_status}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Periode Mulai Pekerjaan</h5>
                                        <div class="controls">
                                            <textarea class="form-control w-100" rows="4" readonly>{{$sik->period_start}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Periode Selesai Pekerjaan</h5>
                                        <div class="controls">
                                            <textarea class="form-control w-100" rows="4" readonly>{{$sik->period_end}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
