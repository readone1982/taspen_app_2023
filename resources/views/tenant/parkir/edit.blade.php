@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Form Access Card - Edit Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{url('tenant/access/update/'.$access->id)}}">
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
                                                <input type="datetime-local" id="request_date" name="request_date" class="form-control w-100" placeholder="Tanggal Pengajuan" value="{{date('Y-m-d', strtotime($access->request_date)).'T'.date('H:i', strtotime($access->request_date))}}" min="{{date('Y-m-d').'T00:00'}}" required>
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
                                                        <option value="{{$item->id}}" {{($access->unit == $item->full_number ? 'selected' : '')}}>{{$item->full_number.($item->owner != null ? ' - '.$item->owner->name : '')}}</option>
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
                                                <input type="text" id="request_name" name="request_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon" value="{{$access->request_name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nomor Handphone Pemohon</h5>
                                            <div class="controls">
                                                <input type="text" id="request_phone" name="request_phone" class="form-control" data-validation-required-message="This field is required" placeholder="Nomor Handphone Pemohon" value="{{$access->request_phone}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">Data Penerimaan</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Penerimaan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="received_date" name="received_date" class="form-control w-100" placeholder="Tanggal Penerimaan" value="{{date('Y-m-d', strtotime($access->received_date)).'T'.date('H:i', strtotime($access->received_date))}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Penerima <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="received_name" name="received_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Penerima" value="{{$access->received_name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Pengajuan Melalui</h5>
                                            <div class="controls">
                                                <input type="text" id="received_through" name="received_through" class="form-control" placeholder="Contoh : Whatsapp" value="{{$access->received_through}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Request Form Deskripsi</h5>
                                            <div class="controls">
                                                <textarea id="form_description" name="form_description" class="form-control" rows="2">{{$access->form_description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Initial Response</h5>
                                            <div class="controls">
                                                <textarea id="response" name="response" class="form-control" rows="2">{{$access->response}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Request Form Handling</h5>
                                            <div class="controls">
                                                <textarea id="form_handling" name="form_handling" class="form-control" rows="2">{{$access->form_handling}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">Daftar Pekerjaan</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Data</button>
                                        @if(count($access->list) > 0)
                                            @foreach ($access->list as $item_list)
                                            @if($loop->iteration > 1)
                                            <hr>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Pekerjaan" value="{{$item_list->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <input type="text" name="list_description[]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="{{$item_list->description}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <input type="number" name="list_price[]" class="form-control w-100" placeholder="Harga" value="{{$item_list->price}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <input type="number" name="list_qty[]" class="form-control w-100" placeholder="Jumlah" value="{{$item_list->qty}}">
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
                                                </div>
                                            </div>
                                            @endforeach
                                        @else
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="controls">
                                                            <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Pekerjaan">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                            <input type="text" name="list_description[]" class="form-control w-100 mb-2" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="controls">
                                                            <input type="number" name="list_price[]" class="form-control w-100" placeholder="Harga">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                            <input type="number" name="list_qty[]" class="form-control w-100" placeholder="Jumlah">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div id="add_data" style="visibility: hidden;position: absolute;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Pekerjaan">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <input type="text" name="list_description[]" class="form-control w-100 mb-2" placeholder="Deskripsi">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <input type="number" name="list_price[]" class="form-control w-100" placeholder="Harga">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <input type="number" name="list_qty[]" class="form-control w-100" placeholder="Jumlah">
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
</script>
@endsection
