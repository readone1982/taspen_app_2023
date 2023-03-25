@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Parking Registrations - Add Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{route('tenant.parking.save')}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8">Data Pemohon</div>
                                </div>
                                {{-- year month --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Year <span class="required">*</span></h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="year" name="year">
                                                    <option value="{{ date('Y')+1 }}">{{ date('Y')+1 }}</option>
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <option value="{{ date('Y')-$i }}" {{ (date('Y')-$i == $year) ? 'selected' : (($i == 0) ? 'selected' : '') }}>{{ date('Y')-$i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Month <span class="required">*</span></h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="month" name="month">
                                                    <option value="1" {{(intval($month) == 1) ? 'selected' : ((intval(date('m')) == 1) ? 'selected' : '') }}>Januari</option>
                                                    <option value="2" {{(intval($month) == 2) ? 'selected' : ((intval(date('m')) == 2) ? 'selected' : '') }}>Februari</option>
                                                    <option value="3" {{(intval($month) == 3) ? 'selected' : ((intval(date('m')) == 3) ? 'selected' : '') }}>Maret</option>
                                                    <option value="4" {{(intval($month) == 4) ? 'selected' : ((intval(date('m')) == 4) ? 'selected' : '') }}>April</option>
                                                    <option value="5" {{(intval($month) == 5) ? 'selected' : ((intval(date('m')) == 5) ? 'selected' : '') }}>Mei</option>
                                                    <option value="6" {{(intval($month) == 6) ? 'selected' : ((intval(date('m')) == 6) ? 'selected' : '') }}>Juni</option>
                                                    <option value="7" {{(intval($month) == 7) ? 'selected' : ((intval(date('m')) == 7) ? 'selected' : '') }}>Juli</option>
                                                    <option value="8" {{(intval($month) == 8) ? 'selected' : ((intval(date('m')) == 8) ? 'selected' : '') }}>Agustus</option>
                                                    <option value="9" {{(intval($month) == 9) ? 'selected' : ((intval(date('m')) == 9) ? 'selected' : '') }}>September</option>
                                                    <option value="10" {{(intval($month) == 10) ? 'selected' : ((intval(date('m')) == 10) ? 'selected' : '') }}>Oktober</option>
                                                    <option value="11" {{(intval($month) == 11) ? 'selected' : ((intval(date('m')) == 11) ? 'selected' : '') }}>November</option>
                                                    <option value="12" {{(intval($month) == 12) ? 'selected' : ((intval(date('m')) == 12) ? 'selected' : '') }}>Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- year month --}}
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Pengajuan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="request_date" name="request_date" class="form-control w-100" placeholder="Tanggal Pengajuan" value="{{date('Y-m-d').'T'.date('H:i')}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Pemohon <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="name" name="name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nomor Handphone Pemohon</h5>
                                            <div class="controls">
                                                <input type="text" id="request_phone" name="request_phone" class="form-control" required data-validation-required-message="This field is required" placeholder="Nomor Handphone Pemohon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Open --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Requester Status</h5>
                                            <div class="controls">
                                                <select name="request_status" id="request_status" class="select2 form-control w-100" required data-validation-required-message="this field is required">
                                                    <option value="">Pilih Data</option>
                                                    <option value="PENYEWA">PENYEWA</option>
                                                    <option value="PEMILIK">PEMILIK</option>
                                                    <option value="KARYAWAN">KARYAWAN</option>
                                                </select>
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
                                    <div class="col-md-12">Daftar Pekerjaan</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Data</button>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Jenis Kendaraan</h5>
                                                            <input type="text" name="list_jenis[]" class="form-control w-100" placeholder="Nama Pekerjaan" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Merk Kendaraan</h5>
                                                            <input type="text" name="list_merk]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Type Kendaraan</h5>
                                                            <input type="text" name="list_type[]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <h5>Warna Kendaraan</h5>
                                                            <input type="text" name="list_warna[]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="controls">
                                                            <h5>Fee</h5>
                                                            <input type="text" name="list_fee[]" class="form-control w-100" placeholder="Harga" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                            <h5>Jenis Membership</h5>
                                                            <input type="text" name="list_membership[]" class="form-control w-100" placeholder="Quantity" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="add_data" style="visibility: hidden;position: absolute;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                <h5>Jenis Kendaraan</h5>
                                                                <input type="text" name="list_jenis[]" class="form-control w-100" placeholder="Nama Pekerjaan" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                <h5>Merk Kendaraan</h5>
                                                                <input type="text" name="list_merk]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                <h5>Type Kendaraan</h5>
                                                                <input type="text" name="list_type[]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="controls">
                                                                <h5>Warna Kendaraan</h5>
                                                                <input type="text" name="list_warna[]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>Fee</h5>
                                                                <input type="text" name="list_fee[]" class="form-control w-100" placeholder="Harga" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <h5>Jenis Membership</h5>
                                                                <input type="text" name="list_membership[]" class="form-control w-100" placeholder="Quantity" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 p-0 m-0">
                                                            <button type="button" class="btn btn-sm btn-danger" onclick="delData(this)">
                                                                <i class="ft-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
// dika
</script>
@endsection
