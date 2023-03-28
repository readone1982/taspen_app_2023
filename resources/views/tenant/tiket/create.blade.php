@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Form Layanan - Add Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{route('tenant.tiket.save')}}">
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
                                            <h5>Bus <span class="required">*</span></h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="unit_id" name="unit_id">
                                                    <option value="">Pilih Bus</option>
                                                    @foreach ($unit as $item)
                                                        <option value="{{$item->id}}">{{$item->full_number.($item->owner != null ? ' - '.$item->owner->name : '')}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Rute Awal</h5>
                                            <div class="controls">
                                                <select name="assigned_to" id="assigned_to" class="select2 form-control w-100" required data-validation-required-message="this field is required">
                                                    <option value="">Pilih Data</option>
                                                    <option value="Jakarta">Jakarta</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Tujuan</h5>
                                            <div class="controls">
                                                <select name="request_type_tr" id="request_type_tr" class="select2 form-control w-100" required data-validation-required-message="This field is required">
                                                    <option value="">Pilih Jenis Request / Complain</option>
                                                    <option value="SEMARANG VIA UTARA">1.SEMARANG VIA UTARA</option>
                                                    <option value="SOLO/YOGYAKARTA VIA UTARA">2.SOLO/YOGYAKARTA VIA UTARA</option>
                                                    <option value="SOLO -SRAGEN">3.SOLO -SRAGEN</option>
                                                    <option value="YOGYAKARTA VIA SELATAN">4.YOGYAKARTA VIA SELATAN</option>
                                                    <option value="YOGYAKARTA VIA TENGAH">5.YOGYAKARTA VIA TENGAH</option>
                                                    <option value="PEKALONGAN">6.PEKALONGAN</option>
                                                    <option value="PADALARANG">7.PADALARANG</option>
                                                    <option value="">--------------</option>
                                                    <option value="SURABAYA VIA UTARA">1.SURABAYA VIA UTARA</option>
                                                    <option value="MEDAN">2.MEDAN</option>
                                                    <option value="">--------------</option>
                                                    <option value="MALANG VIA TENGAH">1.MALANG VIA TENGAH</option>
                                                    <option value="MALANG VIA SELATAN">2.MALANG VIA SELATAN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Rute</h5>
                                            <div class="controls">
                                                <select name="type_fl" id="type_fl" class="select2 form-control w-100" required data-validation-required-message="This field is required">
                                                    <option value="">Pilih Jenis Tipe Request</option>
                                                    <option value="Exit tol Cirebon - Tegal - Pemalang - Pekalongan - Batang - Kendal - Semarang">1.Exit tol Cirebon - Tegal - Pemalang - Pekalongan - Batang - Kendal - Semarang</option>
                                                    <option value="Jakarta Via Tol Cipali Boyolali - Solo - Klaten - Yogyakarta">2.Jakarta Via Tol Cipali Boyolali - Solo - Klaten - Yogyakarta</option>
                                                    <option value="Jakarta Via Tol Cipali - GT Colomadu - Solo - Sragen">3.Jakarta Via Tol Cipali - GT Colomadu - Solo - Sragen</option>
                                                    <option value="Cileunyi - Tasik - Ciamis - Banjar - Cilacap - Kebumen - Purworejo - Yogyakarta">4.Cileunyi - Tasik - Ciamis - Banjar - Cilacap - Kebumen - Purworejo - Yogyakarta</option>
                                                    <option value="Brebes - Bumiayu - Banyumas - Purwokerto - Purworejo -Yogyakarta">5.Brebes - Bumiayu - Banyumas - Purwokerto - Purworejo -Yogyakarta</option>
                                                    <option value="Jakarta - Cirebon - Pekalongan">6.Jakarta - Cirebon - Pekalongan</option>
                                                    <option value="Sukabumi - Cianjur - Padalarang">7.Sukabumi - Cianjur - Padalarang</option>
                                                    <option value="COMPLAIN">COMPLAIN</option>
                                                    <option value="">--------------</option>
                                                    <option value="Semarang - Kudus - Rembang - Tuban - Lamongan - Gresik -Surabaya">1.Semarang - Kudus - Rembang - Tuban - Lamongan - Gresik -Surabaya</option>
                                                    <option value="Bandar lampung - Palembang - Jambi - Batuampar - Pekanbaru - Inderapura - Tebing tinggi - Medan">2.Bandar lampung - Palembang - Jambi - Batuampar - Pekanbaru - Inderapura - Tebing tinggi - Medan</option>
                                                    <option value="">--------------</option>
                                                    <option value="Semarang - Kudus - Rembang - Tuban - Lamongan - Gresik -Surabaya">1.Semarang - Kudus - Rembang - Tuban - Lamongan - Gresik -Surabaya</option>
                                                    <option value="Bandar lampung - Palembang - Jambi - Batuampar - Pekanbaru - Inderapura - Tebing tinggi - Medan">2.Bandar lampung - Palembang - Jambi - Batuampar - Pekanbaru - Inderapura - Tebing tinggi - Medan</option>
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
                            <div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Tanggal Penerimaan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="received_date" name="received_date" class="form-control w-100" placeholder="Tanggal Penerimaan" value="{{date('Y-m-d').'T'.date('H:i')}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Nama Penerima Layanan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="received_name" id="received_name" class="form-control w-100" required data-validation-required-message="This field is required" placeholder="Nama Penerima" value="{{ Auth::user()->name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Pengajuan Melalui<span class="required">*</span></h5>
                                            <div class="controls">
                                                <select name="received_through" id="received_through" class="form-control w-100" required data-validation-required-message="This Field is required">
                                                    <option value="">Pilih Data</option>
                                                    <option value="WHATSAPP">WHATSAPP</option>
                                                    <option value="TELEPHONE">TELEPHONE</option>
                                                    <option value="WALK-IN CUSTOMER">WALK-IN CUSTOMER</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Nama Pemohon Layanan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" id="name" class="form-control w-100" required data-validation-required-message="This field is required" placeholder="Nama Pemohon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h3>Request Description</h3>
                                            <div class="controls">
                                                <textarea id="form_description" name="form_description" class="form-control" rows="2" placeholder="Deskripsi Komplain Permintaan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">List Penumpang</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Data</button>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>Nama Penumpang</h5>
                                                            <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Penumpang" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>No. KTP</h5>
                                                            <input type="text" name="list_ktp[]" class="form-control w-100 mb-2" placeholder="No. KTP" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="controls">
                                                            <h5>No. Telephone</h5>
                                                            <input type="text" name="list_phone[]" class="form-control w-100 mb-2" placeholder="No. Telephone" value="0">
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
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>Nama Penumpang</h5>
                                                                <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Penumpang" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>No. KTP</h5>
                                                                <input type="text" name="list_ktp[]" class="form-control w-100 mb-2" placeholder="No. KTP" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="controls">
                                                                <h5>No. Telephone</h5>
                                                                <input type="text" name="list_phone[]" class="form-control w-100 mb-2" placeholder="No. Telephone" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
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
