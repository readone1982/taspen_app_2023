@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Surat Izin Kerja - Add Data</h4>
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
                        <form class="form-horizontal" novalidate method="POST" action="{{route('tenant.sik.save')}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
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
                                            <h5>Nama Kontraktor <span class="required">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="contractor_name" name="contractor_name" class="form-control w-100" placeholder="Nama Kontraktor" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Penanggung Jawab</h5>
                                            <div class="controls">
                                                <input type="text" id="pic_name" name="pic_name" class="form-control w-100" placeholder="Penanggung Jawab" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Telephone/HP</h5>
                                            <div class="controls">
                                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Jumlah Pekerja</h5>
                                            <div class="controls">
                                                <input type="number" id="total_workers" name="total_workers" class="form-control" placeholder="Jumlah Pekerja">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Ruang Lingkup Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="checkbox" name="scope_work[]" value="Bongkar Pasang Keramik"> Bongkar Pasang Keramik<br>
                                                <i class="fa fa-italic" aria-hidden="true">Ceramic tile assemble / Dismantle</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Cat Dinding / Wallpaper"> Cat Dinding / Wallpaper <br>
                                                <i class="fa-italic" aria-hidden="true">Wall paint / Wallpaper</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Perubahan Celling"> Perubahan Celling <br>
                                                <i class="fa-italic" aria-hidden="true">Celling Modification</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Stop Kontak"> Instalasi Stop Kontak <br>
                                                <i class="fa-italic" aria-hidden="true">Electric Socket Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Lampu"> Instalasi Lampu <br>
                                                <i class="fa-italic" aria-hidden="true">Lamp Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Pipa Air Bersih"> Instalasi Pipa Air Bersih <br>
                                                <i class="fa-italic" aria-hidden="true">Clean Water Plumbing Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Pipa Air Bekas"> Instalasi Pipa Air Bekas <br>
                                                <i class="fa-italic" aria-hidden="true">Used Water Plumbing Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Pasang Tralis Jendela"> Pasang Tralis Jendela <br>
                                                <i class="fa-italic" aria-hidden="true">Window Trellis Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Bongkar Pasang Keramik"> Bongkar Pasang Keramik<br>
                                                <i class="fa-italic" aria-hidden="true">Balcony Door Trelis Installation</i><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Ruang Lingkup Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="checkbox" name="scope_work[]" value="Bongkar Pasang Dinding"> Bongkar Pasang Dinding<br>
                                                <i class="fa fa-italic" aria-hidden="true">Wall Mounting / Dismantle</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Peralatan Dapur"> Instalasi Peralatan Dapur<br>
                                                <i class="fa fa-italic" aria-hidden="true">Kitchen Set Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Pengaturan Furniture"> Pengaturan Furniture<br>
                                                <i class="fa fa-italic" aria-hidden="true">Setting Furniture</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Telephone"> Instalasi Telephone<br>
                                                <i class="fa fa-italic" aria-hidden="true">Telephone Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi TV"> Instalasi TV<br>
                                                <i class="fa fa-italic" aria-hidden="true">TV Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Pipa Air Kotor"> Instalasi Pipa Air Kotor<br>
                                                <i class="fa fa-italic" aria-hidden="true">Sewage Plumbing Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Instalasi Pipa Air Panas"> Instalasi Pipa Air Panas<br>
                                                <i class="fa fa-italic" aria-hidden="true">Hot Water Plumbing Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Pasang Sign Board Ruko"> Pasang Sign Board Ruko<br>
                                                <i class="fa fa-italic" aria-hidden="true">Shop House Sign Board Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Pasang Folding Gate Ruko"> Pasang Folding Gate Ruko<br>
                                                <i class="fa fa-italic" aria-hidden="true">Shop House Folding Gate Installation</i><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Ruang Lingkup Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="checkbox" name="scope_work[]" value="Pemasangan AC"> Pemasangan AC<br>
                                                <i class="fa fa-italic" aria-hidden="true">AC Installation</i><br>
                                                <br>
                                                <input type="checkbox" name="scope_work[]" value="Pasang Partisi"> Pasang Partisi<br>
                                                <i class="fa fa-italic" aria-hidden="true">Partition Installation</i><br>
                                                <br>
                                                <hr>
                                                <i class="fa fa-italic" aria-hidden="true">Others</i><br>
                                                <input type="text" id="scope_work[]" name="scope_work[]" class="form-control" placeholder="Lain-Lain">
                                                <hr>
                                                <i class="fa fa-italic" aria-hidden="true">Others</i><br>
                                                <input type="text" id="scope_work[]" name="scope_work[]" class="form-control" placeholder="Lain-Lain">
                                                <hr>
                                                <i class="fa fa-italic" aria-hidden="true">Others</i><br>
                                                <input type="text" id="scope_work[]" name="scope_work[]" class="form-control" placeholder="Lain-Lain">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Jam Kerja</h5>
                                                <div class="controls">
                                                <textarea id="working_hour" name="working_hour" class="form-control w-100" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Status Perijinan</h5>
                                            <div class="controls">
                                                <select name="license_status" id="license_status" class="form-control">
                                                    <option value="new">Baru</option>
                                                    <option value="extend">Perpanjangan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Mulai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="period_start" name="period_start" class="form-control w-100" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Selesai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="period_end" name="period_end" class="form-control w-100" min="{{date('Y-m-d')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Create Dulu --}}
                                <hr>Perpanjangan Ke-1<hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Mulai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="sik1_start" name="sik1_start" class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Selesai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="sik1_end" name="sik1_end" class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Perpanjangan 2 --}}
                                <hr>Perpanjangan Ke-2<hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Mulai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="sik2_start" name="sik2_start" class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Selesai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="sik2_end" name="sik2_end" class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Perpanjangan 3 --}}
                                <hr>Perpanjangan Ke-3<hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Mulai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="sik3_start" name="sik3_start" class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Periode Selesai Pekerjaan</h5>
                                            <div class="controls">
                                                <input type="date" id="sik3_end" name="sik3_end" class="form-control w-100">
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
