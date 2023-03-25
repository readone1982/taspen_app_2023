@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">E-Store Add Data || Penerimaan Paket</h4>
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
                        <form class="form-horizontal" novalidate method="post" action="{{route('tenant.estore.save')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Nama Pengirim Paket <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="sender_name" name="sender_name" class="form-control" required data-validation-required-message="This field is required" placeholder="Nama Pengirim">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Unit Penerima Paket</h5>
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Nama Penerima Paket Berdasarkan Resi</h5>
                                            <div class="controls">
                                                <input type="text" id="receiver_name" name="receiver_name" class="form-control" placeholder="Nama Penerima Paket" required data-validation-required-message="Nama Penerima">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- HP --}}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <h5>Nomor Handphone Penerima Paket</h5>
                                            <input type="text" id="hp" name="hp" class="form-control" placeholder="Nomor Hp" value="62">
                                        </div>
                                    </div>
                                </div>
                                {{-- HP --}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>E-Store Officer</h5>
                                            <input type="text" id="officer" name="officer" class="form-control" placeholder="E-Storeofficer" value="{{ Auth::user()->name }} - {{ Auth::user()->jabatan }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tanggal Penerimaan Paket <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="datetime-local" id="received_date" name="received_date" class="form-control" value="{{date('Y-m-d').'T'.date('H:i')}}" min="{{date('Y-m-d').'T00:00'}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Building / Tower Penerima Paket</h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="building" name="building">
                                                    <option value="">Pilih Tower</option>
                                                    <option value="Atlantic">ATLANTIC</option>
                                                    <option value="Bahama">BAHAMA</option>
                                                    <option value="Carribean">CARRIBEAN</option>
                                                    <option value="Honolulu">HONOLULU</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Ekspedisi</h5>
                                            <div class="controls">
                                                <input type="text" id="ekspedisi" name="ekspedisi" class="form-control" placeholder="Ekspedisi" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Kategori Paket</h5>
                                            <div class="controls">
                                                <select class="select2 form-control w-100" id="paket_size" name="paket_size" required data-validation-required-message="Required">
                                                    <option value="">PILIH KATEGORI</option>
                                                    {{-- <option value="Amplop">AMPLOP</option> --}}
                                                    <option value="Paket">Paket</option>
                                                    <option value="Dokumen Besar">Dokumen Besar</option>
                                                    <option value="Dokumen Kecil">Dokumen Kecil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Picture</h5>
                                            <div class="controls">
                                                <input type="file" accept="image/*" capture="camera" id="sender_image1" name="sender_image1" class="form-control" required data-validation-required-message="Required" />
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Testing --}}

                                    {{-- <button id="start-camera">Start Cameraa</button>
                                    <video id="video" width="320" height="240" autoplay></video>
                                    <button id="click-photo">Click Photo</button>
                                    <canvas id="canvas" width="320" height="240"></canvas> --}}

                                    {{-- Testing --}}
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Foto Paket</h5>
                                            <div class="controls">
                                                <input type="file" accept="image/*" capture="camera" id="sender_image2" name="sender_image2" class="form-control" />
                                            </div>
                                        </div>
                                    </div> --}}
                                    <hr>
                                    {{-- <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Foto Pengambil Paket</h5>
                                            <div class="controls">
                                                <input type="file" id="receiver_image1" name="receiver_image1" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Foto Paket yang diambil</h5>
                                            <div class="controls">
                                                <input type="file" id="receiver_image2" name="receiver_image2" class="form-control" />
                                            </div>
                                        </div>
                                    </div> --}}
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
    <script>
        let camera_button = document.querySelector("#start-camera");
        let video = document.querySelector("#video");
        let click_button = document.querySelector("#click-photo");
        let canvas = document.querySelector("#canvas");

        camera_button.addEventListener('click', async function() {
            let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
            video.srcObject = stream;
        });

        click_button.addEventListener('click', function() {
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
            let image_data_url = canvas.toDataURL('/pengumuman/');

            // data url of the image
            console.log(image_data_url);
        });
    </script>
</section>
@endsection
