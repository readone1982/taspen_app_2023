@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Form Layanan - Edit Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{url('tenant/layanan/update/'.$layanan->id)}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">Data Pemohon</div>
                                </div>
                                <hr>
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
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Pengajuan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="request_date" name="request_date" class="form-control w-100" placeholder="Tanggal Pengajuan" value="{{date('Y-m-d', strtotime($layanan->request_date)).'T'.date('H:i', strtotime($layanan->request_date))}}" min="{{date('Y-m-d').'T00:00'}}" required>
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
                                                        <option value="{{$item->id}}" {{($layanan->unit == $item->full_number ? 'selected' : '')}}>{{$item->full_number.($item->owner != null ? ' - '.$item->owner->name : '')}}</option>
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
                                                <input type="text" id="request_name" name="request_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon" value="{{$layanan->request_name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nomor Handphone Pemohon</h5>
                                            <div class="controls">
                                                <input type="text" id="request_phone" name="request_phone" class="form-control" data-validation-required-message="This field is required" placeholder="Nomor Handphone Pemohon" value="{{$layanan->request_phone}}">
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
                                                <select name="assigned_to" id="assigned_to" class="form-control" required data-validation-required-message="This field is required">
                                                    <option value="{{$layanan->assigned_to}}">{{$layanan->assigned_to}}</option>
                                                    <option value="">Pilih Data</option>
                                                    <option value="ENGINEERING">ENGINEERING</option>
                                                    <option value="SECURITY">SECURITY</option>
                                                    <option value="GENERAL SERVICE">GENERAL SERVICE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Jenis Request atau Complain</h5>
                                            <div class="controls">
                                                <select name="request_type_tr" id="request_type_tr" class="form-control" required data-validation-required-message="This field is required">
                                                    <option value="{{$layanan->request_type_tr}}">{{$layanan->request_type_tr}}</option>
                                                    <option value="">Pilih Jenis Request / Complain</option>
                                                    <option value="PARKING">PARKING</option>
                                                    <option value="SECURITY">SECURITY</option>
                                                    <option value="CLEANLINESS">CLEANLINESS</option>
                                                    <option value="LEAKING">LEAKING</option>
                                                    <option value="INTERNET / TV CHANNEL">INTERNET / TV CHANNEL</option>
                                                    <option value="TELEPHONE / VIDEO PHONE">TELEPHONE / VIDEO PHONE</option>
                                                    <option value="WATER SUPPLY">WATER SUPPLY</option>
                                                    <option value="MECHANICAL / ELECTRICAL">MECHANICAL / ELECTRICAL</option>
                                                    <option value="ELECTRIC SUPPLY">ELECTRIC SUPPLY</option>
                                                    <option value="PLUMBING">PLUMBING</option>
                                                    <option value="FACILITIES / COMMON AREA">FACILITIES / COMMON AREA</option>
                                                    <option value="FINANCE / BILLING">FINANCE / BILLING</option>
                                                    <option value="GENERAL SERVICE">GENERAL SERVICE</option>
                                                    <option value="CIVIL">CIVIL</option>
                                                    <option value="MECHANICAL">MECHANICAL</option>
                                                    <option value="ELECTRONIC">ELECTRONIC</option>
                                                    <option value="OTHERS">OTHERS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Type FL</h5>
                                            <div class="controls">
                                                <select name="type_fl" id="type_fl" class="form-control" value="{{$layanan->type_fl}}" required data-validation-required-message="This field is required">
                                                    <option value="{{$layanan->type_fl}}">{{$layanan->type_fl}}</option>
                                                    <option value="">Pilih Jenis Tipe Request</option>
                                                    <option value="JOB REQUEST">JOB REQUEST</option>
                                                    <option value="COMPLAIN">COMPLAIN</option>
                                                </select>
                                            </div>
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
                                            <h5>Tanggal Penerimaan<span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="received_date" name="received_date" class="form-control w-100" placeholder="Tanggal Penerimaan" value="{{date('Y-m-d', strtotime($layanan->received_date)).'T'.date('H:i', strtotime($layanan->received_date))}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Penerima <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="received_name" name="received_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Penerima" value="{{ Auth::user()->name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Pengajuan Melalui</h5>
                                            <div class="controls">
                                                <input type="text" id="received_through" name="received_through" class="form-control" placeholder="Contoh : Whatsapp" value="{{$layanan->received_through}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3>A. Complain / Request Description</h3>
                                            <div class="controls">
                                                <textarea id="form_description" name="form_description" class="form-control" rows="2">{{$layanan->form_description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3>B. RESPON HANDLING DESCRIPTION</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Check Up Result Description</h5>
                                            <div class="controls">
                                                <textarea id="form_handling" name="form_handling" class="form-control" rows="2" placeholder="" readonly>{{$layanan->form_handling}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3>C. Completion Of Complain / Request Handling</h3>
                                            <div class="controls">
                                                <textarea id="response" name="response" class="form-control" rows="2" readonly>{{$layanan->response}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Finished By</h5>
                                            <div class="controls">
                                                <input type="text" class="form-control" placeholder="Diselesaikan Oleh" id="done_by"name="done_by">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Done Date</h5>
                                            <input type="datetime-local" id="done_date" name="done_date" class="form-control w-100" placeholder="Done Date" value="{{date('Y-m-d').'T'.date('H:i')}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Note</h5>
                                            <textarea id="note" name="note" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h3>Pekerjaan</h3>
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

                                {{-- CLose --}}
                                <div class="row">
                                    <div class="col-md-12">Daftar Pekerjaan</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-info mb-2" onclick="addData()">Tambah Data</button>
                                        @if(count($layanan->list) > 0)
                                            @foreach ($layanan->list as $item_list)
                                            @if($loop->iteration > 1)
                                            <hr>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>Job</h5>
                                                                <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Pekerjaan" value="{{$item_list->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <h5>Description</h5>
                                                                <input type="text" name="list_description[]" class="form-control w-100 mb-2" placeholder="Deskripsi" value="{{$item_list->description}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>Price</h5>
                                                                <input type="text" name="list_price[]"  class="form-control w-100" placeholder="Harga" value="{{$item_list->price}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <h5>Quantity</h5>
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
                                                            <h5>Job</h5>
                                                            <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Pekerjaan">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                            <h5>Description</h5>
                                                            <input type="text" name="list_description[]" class="form-control w-100 mb-2" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">&nbsp;</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="controls">
                                                            <h5>Price</h5>
                                                            <input type="number" name="list_price[]" id="dengan-rupiah" class="form-control w-100" placeholder="Harga">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="controls">
                                                            <h5>Quantity</h5>
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
                                                                <h5>Job</h5>
                                                                <input type="text" name="list_name[]" class="form-control w-100" placeholder="Nama Pekerjaan">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <h5>Description</h5>
                                                                <input type="text" name="list_description[]" class="form-control w-100 mb-2" placeholder="Deskripsi">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">&nbsp;</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>Price</h5>
                                                                <input type="number" name="list_price[]" class="form-control w-100" placeholder="Harga">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="controls">
                                                                <h5>Quantity</h5>
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
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1" onclick="window.history.back()">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
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
// open script
 /* Tanpa Rupiah */
 var tanpa_rupiah = document.getElementById('tanpa-rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });

    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
@endsection
