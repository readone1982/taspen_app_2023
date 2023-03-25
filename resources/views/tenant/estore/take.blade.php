@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Estore || Penerimaan Paket - Edit Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" enctype="multipart/form-data" action="{{url('tenant.estore.update'.$estore->id)}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Nama Pengirim <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="sender_name" name="sender_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon" value="{{$estore->sender_name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Ekspedisi <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="ekspedisi" name="ekspedisi" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pemohon" value="{{$estore->ekspedisi}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Nama Penerima Paket Berdasarkan Resi</h5>
                                            <div class="controls">
                                                <input type="text" id="receiver_name" name="receiver_name" class="form-control" placeholder="Nama Pasar" value="{{$estore->receiver_name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Unit</h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="unit_id" name="unit_id">
                                                    <option value="">Pilih Unit</option>
                                                    @foreach ($unit as $item)
                                                        <option value="{{$item->id}}" {{($estore->unit == $item->full_number ? 'selected' : '')}}>{{$item->full_number.($item->owner != null ? ' - '.$item->owner->name : '')}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Ukuran Paket</h5>
                                            <div class="controls">
                                                <input type="text" id="paket_size" name="paket_size" class="form-control" value="{{$estore->paket_size}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Penerimaan Paket <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" class="form-control" placeholder="Penerimaan Paket" name="received_date" value="{{$estore->received_date}}" readonly>
                                                {{-- <input type="datetime-local" id="received_date" name="received_date" class="form-control" required data-validation-required-message="This field is required" placeholder="Tanggal Pengajuan" value="{{date('Y-m-d', strtotime($estore->received_date)).'T'.date('H:i', strtotime($estore->received_date))}}"> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Building / Tower Penerima Paket</h5>
                                            <div class="controls">
                                                <input type="text" id="building" name="building" class="form-control" placeholder="Building / Tower" value="{{$estore->building}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Image 1</h5>
                                            <div class="controls">
                                                @if ($estore->sender_image1 != null)
                                                    <img src="{{asset($estore->sender_image1)}}" style="width: 100%;">
                                                @endif
                                                <input type="file" id="sender_image1" name="sender_image1" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Image 2</h5>
                                            <div class="controls">
                                                @if ($estore->sender_image2 != null)
                                                    <img src="{{asset($estore->sender_image2)}}" style="width: 100%;">
                                                @endif
                                                <input type="file" id="sender_image2" name="sender_image2" class="form-control" />
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
@endsection
