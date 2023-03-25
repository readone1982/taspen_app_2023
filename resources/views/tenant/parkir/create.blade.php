@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Form Parkir - Add Data</h4>
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
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0 pl-3">
                                <li>{{$errors->first()}}</li>
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" novalidate method="POST" action="{{route('tenant.parkir.save')}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Tanggal Pengajuan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="date" id="request_date" name="request_date" class="form-control w-100" placeholder="Tanggal Pengajuan" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Unit <span class="required">*</span></h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="unit_id" name="unit_id">
                                                    <option value="">Pilih Unit</option>
                                                    @foreach ($unit as $item)
                                                        <option value="{{$item->id}}">{{$item->full_number.($item->owner != null ? ' - '.$item->owner->name : '')}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Tenant Relation Officer Name<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="tr_officer" name="tr_officer" class="form-control w-100" placeholder="Officer" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Pemohon <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="request_name" name="request_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nomor Handphone Pemohon</h5>
                                            <div class="controls">
                                                <input type="text" id="request_phone" name="request_phone" class="form-control" placeholder="Nomor Handphone Pemohon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Jenis Permohonan || Request Type<span class="required">*</span></h5>
                                            <div class="controls">
                                                <select id="request_type" name="request_type" class="form-control" required data-validation-required-message="Mandatory">
                                                    <option value="">Pilih Data | Choose Data</option>
                                                    <option value="Daftar Baru | New Registration">Daftar Baru | New Registration</option>
                                                    <option value="Perpanjangan | Renewal">Perpanjangan | Renewal</option>
                                                    <option value="Ganti No. Plat | Change License Plat">Ganti No. Plat | Change License Plat</option>
                                                    <option value="Kartu Hilang | Card Lost">Kartu Hilang | Card Lost</option>
                                                    <option value="Parkir Gratis | Compliment / Fee">Parkir Gratis | Compliment / Fee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Status Pemohon | Requester Status<span class="required">*</span></h5>
                                            <div class="controls">
                                                <select id="request_status" name="request_status" class="form-control" required data-validation-required-message="Mandatory">
                                                    <option value="">Pilih Data | Choose Data</option>
                                                    <option value="Pemilik | Owner ">Pemilik | Owner</option>
                                                    <option value="Penyewa | Tenant">Penyewa | Tenant</option>
                                                    <option value="Karyawan Tenant | Tenant Employee">Karyawan Tenant | Tenant Employee</option>
                                                    <option value="Karyawan Pengelola | Management Employee">Karyawan Pengelola | Management Employee</option>
                                                    <option value="Karyawan Outsourching | Outsourcing Employee">Karyawan Outsourching | Outsourcing Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">Daftar Nomor Parkir</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Data - Daftar Baru</button>
                                        <h4>Daftar Langganan Parkir Baru / Perpanjangan</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>Jenis Kendaraan</h5>
                                                            <select name="list_jenis[]" class="form-control w-100" placeholder="Jenis Kendaraan">
                                                                <option value="">Pilih Data | Choose Data</option>
                                                                <option value="Motor">Motor</option>
                                                                <option value="Mobil">Mobil</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>Merk Kendaraan</h5>
                                                            <input type="text" name="list_merk[]" class="form-control w-100" placeholder="Merk kendaraan" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>Tipe Kendaraan</h5>
                                                            <input type="text" name="list_tipe[]" class="form-control w-100" placeholder="Type Kendaraan" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>Tahun Produksi</h5>
                                                            <input type="text" name="list_produksi[]" class="form-control w-100" placeholder="Tahun Produksi" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>Warna</h5>
                                                            <input type="text" name="list_warna[]" class="form-control w-100" placeholder="Warna" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>No. Plat Kendaraan</h5>
                                                            <input type="text" name="list_plat[]" class="form-control w-100" placeholder="No. Plat Kendaraan" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Keterangan Membership</h5>
                                                            <select id="list_memdesc[]" name="list_memdesc[]" class="form-control w-100">
                                                                <option value="">Pilih Data | Choose Data</option>
                                                                <option value="Member Mobil Khusus">Member Mobil Khusus</option>
                                                                <option value="Member Mobil">Member Mobil</option>
                                                                <option value="Member Motor">Member Motor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Biaya Membership</h5>
                                                            <select id="list_memfee[]" name="list_memfee[]" class="form-control w-100">
                                                                <option value="">Pilih Data | Choose Data</option>
                                                                <option value="750000">Rp 750.000</option>
                                                                <option value="300000">Rp 300.000</option>
                                                                <option value="150000">Rp 150.000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Biaya</h5>
                                                            <select id="list_fee[]" name="list_fee[]" class="form-control w-100">
                                                                <option value="">Pilih Data | Choose Data</option>
                                                                <option value="35000">Rp 35.000</option>
                                                                <option value="100000">Rp 100.000</option>
                                                                <option value="150000">Rp 150.000</option>
                                                                <option value="200000">Rp 200.000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="add_data" style="visibility: hidden;position: absolute;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row mb-1">
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>Jenis Kendaraan</h5>
                                                                <select id="list_jenis[]" name="list_jenis[]" class="form-control w-100" placeholder="Vehicle Type">
                                                                    <option value="">Pilih Data | Choose Data</option>
                                                                    <option value="Motor">Motor</option>
                                                                    <option value="Mobil">Mobil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>Merk Kendaraan</h5>
                                                                <input type="text" id="list_merk[]" name="list_merk[]" class="form-control w-100" placeholder="Merk kendaraan" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>Tipe Kendaraan</h5>
                                                                <input type="text" id="list_tipe[]" name="list_tipe[]" class="form-control w-100" placeholder="Type Kendaraan" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1">
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>Tahun Produksi</h5>
                                                                <input type="text" id="list_produksi[]" name="list_produksi[]" class="form-control w-100" placeholder="Tahun Produksi" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>Warna</h5>
                                                                <input type="text" id="list_warna[]" name="list_warna[]" class="form-control w-100" placeholder="Warna Kendaraan" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>No. Plat Kendaraan</h5>
                                                                <input type="text" id="list_plat[]" name="list_plat[]" class="form-control w-100" placeholder="No. Plat Kendaraan" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1">
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                <h5>Keterangan Membership</h5>
                                                                <select id="list_memdesc[]" name="list_memdesc[]" class="form-control w-100">
                                                                    <option value="">Pilih Data | Choose Data</option>
                                                                    <option value="Member Mobil Khusus">Member Mobil Khusus</option>
                                                                    <option value="Member Mobil">Member Mobil</option>
                                                                    <option value="Member Motor">Member Motor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                <h5>Biaya Membership</h5>
                                                                <select id="list_memfee[]" name="list_memfee[]" class="form-control w-100">
                                                                    <option value="">Pilih Data | Choose Data</option>
                                                                    <option value="750000">Rp 750.000</option>
                                                                    <option value="300000">Rp 300.000</option>
                                                                    <option value="150000">Rp 150.000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                {{-- <input type="number" name="fee[]" class="form-control w-100" placeholder="Biaya"> --}}
                                                                <h5>Biaya</h5>
                                                                <select id="list_fee[]" name="list_fee[]" class="form-control w-100">
                                                                    <option value="">Pilih Data | Choose Data</option>
                                                                    <option value="100000">Rp 100.000</option>
                                                                    <option value="150000">Rp 150.000</option>
                                                                    <option value="200000">Rp 200.000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 p-0 m-0">
                                                            <button type="button" class="btn btn-sm btn-danger" onclick="delData(this)">
                                                                <i class="ft-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="data_populate"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions right">
                                <button type="button" class="btn btn-warning mr-1" onclick="window.history.back()">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function addData(){
    var add_data = $('#add_data').html()
    $('#data_populate').append(add_data)
}
function delData(elem){
    $(elem).parent().parent().parent().parent().remove();
}
// Open
</script>
@endsection
