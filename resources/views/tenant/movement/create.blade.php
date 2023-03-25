@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Item Movement - Add Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{route('tenant.movement.save')}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">Data Pemohon</div>
                                </div>
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
                                                <select class="select2 form-control w-100" id="unit_id" name="unit_id" required data-validation-required-message="This field is required">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Nama Pemohon <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="request_name" name="request_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Keluar / Masuk Barang <span class="required">*</span></h5>
                                            <div class="controls">
                                                <select name="imv_cat" id="imv_cat" class="form-control" required data-validation-required-message="This field is required">
                                                    <option value="MASUK BARANG">Masuk Barang</option>
                                                    <option value="KELUAR BARANG">Keluar Barang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                {{-- Start User Handle --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Handling By<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="by_user" id="by_user" class="form-control" required data-validation-required-message="This field is required" value="{{ Auth::user()->name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End User Handle --}}
                                <div class="row">
                                    <div class="col-md-12">Data Pelaksanaan</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Pelaksanaan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="implement_date" name="implement_date" class="form-control w-100" placeholder="Tanggal Pelaksanaan" value="{{date('Y-m-d').'T'.date('H:i')}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Pembawa Barang <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="poster_name" name="poster_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pembawa Barang">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Alamat</h5>
                                            <div class="controls">
                                                <textarea id="address" name="address" class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Telephone</h5>
                                            <div class="controls">
                                                <input type="number" id="telephone" name="telephone" class="form-control w-100" placeholder="Telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Jenis Kendaraan</h5>
                                            <div class="controls">
                                                <input type="text" id="vehicle_type" name="vehicle_type" class="form-control w-100" placeholder="Jenis Kendaraan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Handphone</h5>
                                            <div class="controls">
                                                <input type="number" id="handphone" name="handphone" class="form-control w-100" placeholder="Handphone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Plat Nomor</h5>
                                            <div class="controls">
                                                <input type="text" id="license_plat" name="license_plat" class="form-control w-100" placeholder="Plat Nomor">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">Daftar Barang</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Barang</button>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="controls">
                                                    <h5>Nama Barang</h5>
                                                    <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Barang">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="controls">
                                                    <h5>Kuantitas Barang</h5>
                                                    <input type="number" name="list_qty[]" class="form-control w-100 mb-2" placeholder="Jumlah Barang">
                                                </div>
                                            </div>
                                            <div class="col-md-1">&nbsp;</div>
                                        </div>
                                        <div id="add_data" style="visibility: hidden;position: absolute;">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="controls">
                                                        <i class="fa fa-plus-square fa-fw">Nama Barang</i>
                                                        <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Barang">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="controls">
                                                        <i class="fa fa-minus-square fa-fw">Jumlah Barang</i>
                                                        <input type="number" name="list_qty[]" class="form-control w-100 mb-2" placeholder="Jumlah Barang">
                                                    </div>
                                                </div>
                                                <div class="col-md-1 p-0 m-0">
                                                    <button type="button" class="btn btn-sm btn-danger" onclick="delData(this)">
                                                        <i class="ft-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="data_populate"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Catatan</h5>
                                            <div class="controls">
                                                <textarea id="note" name="note" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
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
    $(elem).parent().parent().remove();
}
</script>
@endsection
