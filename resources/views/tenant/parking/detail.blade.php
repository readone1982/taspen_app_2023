@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Form Layanan </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/layanan')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        @if($layanan != null)
                        <div class="row">
                            <div class="col-md-12">Data Pemohon</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Pengajuan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($layanan->request_date))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->unit}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Pemohon</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->request_name}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nomor Handphone Pemohon</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->request_phone}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                                {{-- Open --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Assigned To</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->assigned_to}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Jenis Request atau Complain</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->request_type_tr}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Type FL</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->type_fl}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                                {{-- Close --}}
                        <div class="row">
                            <div class="col-md-12">Data Penerimaan</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Penerimaan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($layanan->received_date))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Nama Penerima</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$layanan->received_name}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Pengajuan Melalui</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control" value="{{$layanan->received_through}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Request Form Deskripsi</h5>
                                    <div class="controls">
                                        <textarea class="form-control" rows="2" readonly>{{$layanan->form_description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Initial Response</h5>
                                    <div class="controls">
                                        <textarea class="form-control" rows="2" readonly>{{$layanan->response}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Request Form Handling</h5>
                                    <div class="controls">
                                        <textarea class="form-control" rows="2" readonly>{{$layanan->form_handling}}</textarea>
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
                    <h4 class="card-title"><i class="la la-list-ul"></i> Daftar Pekerjaan</h4>
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
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th style="width: 100px;">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($layanan != null)
                                    @foreach ($layanan->list as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{number_format($item->price, 0, ',', '.')}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{number_format($item->jumlah, 0, ',', '.')}}</td>
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
