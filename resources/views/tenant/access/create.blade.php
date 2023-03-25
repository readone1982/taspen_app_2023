@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Form Access Card - Add Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{route('tenant.access.save')}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Pemohon <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="company_name" name="company_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon">
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
                                {{-- Open Tag Dika Belajar --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Type Access <span class="required">*</span></h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="acc_cat" name="acc_cat">
                                                    <option value="PENAMBAHAN">NEW || Penambahan</option>
                                                    <option value="PENGGANTIAN">REPLACEMENT || Penggantian </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Handling By <span class="required">*</span></h5>
                                            <input type="text" class="form-control" name="handling_by" id="handling_by" value="{{ Auth::user()->name }}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">Daftar Nomor Access Card</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Data</button>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="controls">
                                                            <h5>Card Holder Name</h5>
                                                            <input type="text" name="list_name[]" class="form-control w-100 mb-1" placeholder="Nama Pemegang Kartu" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="controls">
                                                            <h5>No. Kartu</h5>
                                                            <input type="number" name="list_access[]" class="form-control w-100" placeholder="No. Kartu" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                            <h5>Harga Kartu</h5>
                                                            <select class="select2 form-control w-100" id="list_type[]" name="list_type[]">
                                                                <option value="0">0</option>
                                                                <option value="111000">Rp 111.000,-</option>
                                                                <option value="222000">Rp 222.000,-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Open Tag Bawah New / Replacement --}}
                                                {{-- <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                         <input type="text" name="list_type[]" class="form-control w-100" placeholder="Test Kategori">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                        {{-- Close Tag --}}
                                        <div class="col-md-1">&nbsp;</div>
                                        <div id="add_data" style="visibility: hidden;position: absolute;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>Card Holder Name</h5>
                                                                <input type="text" name="list_name[]" class="form-control w-100 mb-1" placeholder="Nama Pemegang Kartu">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>No. Kartu</h5>
                                                                <input type="number" name="list_access[]" class="form-control w-100" placeholder="No. Kartu">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <h5>Harga Kartu</h5>
                                                                <input type="number" name="list_type[]" class="form-control w-100 placeholder" placeholder="Harga Kartu">
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
