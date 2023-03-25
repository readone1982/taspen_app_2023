@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Item Movement </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/movement')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        @if($movement != null)
                        <div class="row">
                            <div class="col-md-12">Data Pemohon</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Pengajuan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($movement->request_date))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->unit}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Nama Pemohon </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->request_name}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Keluar / Masuk Barang </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->imv_cat}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Open --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Handling By<span class="required">*</span></h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->by_user}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Close --}}
                        <div class="row">
                            <div class="col-md-12">Data Pelaksanaan</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Pelaksanaan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($movement->implement_date))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Pembawa Barang </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->porter_name}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Alamat</h5>
                                    <div class="controls">
                                        <textarea id="address" name="address" class="form-control" rows="4" readonly>{{$movement->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Telephone</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->telephone}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Jenis Kendaraan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->vehicle_type}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Handphone</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->handphone}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Plat Nomor</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$movement->license_plat}}" readonly>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Daftar Barang</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">No</th>
                                    <th>Nama</th>
                                    <th style="width: 100px;">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($movement != null)
                                    @foreach ($movement->list as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->jumlah}}</td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center">Data tidak ditemukan</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
