@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Form Parkir </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/parkir')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        @if($parkir != null)
                        <div class="row">
                            <div class="col-md-12">Data Pemohon</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Pengajuan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($parkir->request_date))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$parkir->unit}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Pemohon</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$parkir->request_name}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nomor Handphone Pemohon</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$parkir->request_phone}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Number</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$parkir->number}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Request Type</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$parkir->request_type}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Request Status</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$parkir->request_status}}" readonly>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Daftar Parkir Number</h4>
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
                                    <th style="width: 10%;">No</th>
                                    <th style="width: 10%;">Jenis Kendaraan</th>
                                    <th style="width: 10%;">Merk Kendaraan</th>
                                    <th style="width: 10%;">Tipe Kendaraan</th>
                                    <th style="width: 10%;">Tahun Produksi</th>
                                    <th style="width: 10%;">Warna</th>
                                    <th style="width: 10%;">Plat Kendaraan</th>
                                    <th style="width: 10%;">Masa Berlaku</th>
                                    <th style="width: 10%;">Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($parkir != null)
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach ($parkir->list as $item)
                                    @php
                                    $total = $total + intval($item->fee);
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->jenis_kendaraan}}</td>
                                        <td>{{$item->merk_kendaraan}}</td>
                                        <td>{{$item->tipe_kendaraan}}</td>
                                        <td>{{$item->tahun_produksi}}</td>
                                        <td>{{$item->warna_kendaraan}}</td>
                                        <td>{{$item->plat_kendaraan}}</td>
                                        <td>{{$item->parkir_no}}</td>
                                        <td>{{$item->plat_old}}</td>
                                        <td>{{$item->plat_new}}</td>
                                        <td style="text-align: right;">{{number_format($item->fee, 0, ',', '.')}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="8" style="text-align: right;font-weight: bold;">TOTAL</td>
                                        <td style="text-align: right;font-weight: bold;">{{number_format($total, 0, ',', '.')}}</td>
                                    </tr>
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
        {{-- Opening Dika --}}
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><i class="la la-list-ul"></i> Daftar Pergantian Plat Kendaraan</h4>
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
                                            <th style="width: 10%;">No</th>
                                            <th>Jenis Kendaraan</th>
                                            <th style ="width: 25%">Merk Kendaraan</th>
                                            <th>Tipe Kendaraan</th>
                                            <th>Tahun Produksi</th>
                                            <th>Warna</th>
                                            <th>Plat Kendaraan</th>
                                            <th>Register Date</th>
                                            <th>Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($parkir != null)
                                            @php
                                            $total = 0;
                                            @endphp
                                            @foreach ($parkir->list as $item)
                                            @php
                                            $total = $total + intval($item->fee);
                                            @endphp
                                            <tr>
                                                <td class="text-center">{{$loop->iteration}}</td>
                                                <td>{{$item->jenis_kendaraan}}</td>
                                                <td>{{$item->merk_kendaraan}}</td>
                                                <td>{{$item->tipe_kendaraan}}</td>
                                                <td>{{$item->tahun_produksi}}</td>
                                                <td>{{$item->warna_kendaraan}}</td>
                                                <td>{{$item->plat_kendaraan}} Bulan</td>
                                                <td>{{$item->plat_old}}</td>
                                                <td>{{$item->plat_new}}</td>
                                                <td style="text-align: right;">{{number_format($item->fee, 0, ',', '.')}}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="8" style="text-align: right;font-weight: bold;">TOTAL</td>
                                                <td style="text-align: right;font-weight: bold;">{{number_format($total, 0, ',', '.')}}</td>
                                            </tr>
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
    </div>
</section>
@endsection
