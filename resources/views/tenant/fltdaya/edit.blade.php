@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Item Movement - Edit Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{url('tenant/movement/update/'.$movement->id)}}">
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
                                                <input type="datetime-local" id="request_date" name="request_date" class="form-control w-100" placeholder="Tanggal Pengajuan" value="{{date('Y-m-d', strtotime($movement->request_date)).'T'.date('H:i', strtotime($movement->request_date))}}" min="{{date('Y-m-d').'T00:00'}}" required>
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
                                                        <option value="{{$item->id}}" {{($movement->unit == $item->full_number ? 'selected' : '')}}>{{$item->full_number.($item->owner != null ? ' - '.$item->owner->name : '')}}</option>
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
                                                <input type="text" id="request_name" name="request_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon" value="{{$movement->request_name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">Data Pelaksanaan</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Pelaksanaan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="implement_date" name="implement_date" class="form-control w-100" placeholder="Tanggal Pelaksanaan" value="{{date('Y-m-d', strtotime($movement->implement_date)).'T'.date('H:i', strtotime($movement->implement_date))}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Pembawa Barang <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="poster_name" name="poster_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pembawa Barang" value="{{$movement->porter_name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Alamat</h5>
                                            <div class="controls">
                                                <textarea id="address" name="address" class="form-control" rows="4">{{$movement->address}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Telephone</h5>
                                            <div class="controls">
                                                <input type="number" id="telephone" name="telephone" class="form-control w-100" placeholder="Telephone" value="{{$movement->telephone}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Jenis Kendaraan</h5>
                                            <div class="controls">
                                                <input type="text" id="vehicle_type" name="vehicle_type" class="form-control w-100" placeholder="Jenis Kendaraan" value="{{$movement->vehicle_type}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Handphone</h5>
                                            <div class="controls">
                                                <input type="number" id="handphone" name="handphone" class="form-control w-100" placeholder="Handphone" value="{{$movement->handphone}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Plat Nomor</h5>
                                            <div class="controls">
                                                <input type="text" id="license_plat" name="license_plat" class="form-control w-100" placeholder="Plat Nomor" value="{{$movement->license_plat}}">
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
                                        @if(count($movement->list) > 0)
                                            @foreach ($movement->list as $item_list)
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="controls">
                                                        <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Barang" value="{{$item_list->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="controls">
                                                        <input type="number" name="list_qty[]" class="form-control w-100 mb-2" placeholder="Jumlah Barang" value="{{$item_list->jumlah}}">
                                                    </div>
                                                </div>
                                                @if($loop->iteration == 1)
                                                <div class="col-md-1">&nbsp;</div>
                                                @else
                                                <div class="col-md-1 p-0 m-0">
                                                    <button type="button" class="btn btn-sm btn-danger" onclick="delData(this)">
                                                        <i class="ft-trash"></i>
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                            @endforeach
                                        @else
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="controls">
                                                    <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Barang">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="controls">
                                                    <input type="number" name="list_qty[]" class="form-control w-100 mb-2" placeholder="Jumlah Barang">
                                                </div>
                                            </div>
                                            <div class="col-md-1">&nbsp;</div>
                                        </div>
                                        @endif
                                        <div id="add_data" style="visibility: hidden;position: absolute;">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="controls">
                                                        <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Barang">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="controls">
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
                                                <textarea id="note" name="note" class="form-control" rows="2">{{$movement->note}}</textarea>
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
