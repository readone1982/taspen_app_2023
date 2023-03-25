@extends('layouts.app')

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-list-ul"></i> Kenaikan Daya </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/fltdaya')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard pt-0">
                        @if($fltdaya != null)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tanggal Pengajuan</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{date('Y-m-d H:i', strtotime($fltdaya->created_at))}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Unit </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$fltdaya->unit}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Owner Name </h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$fltdaya->owner->name}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Daya Lama</h5>
                                    <div class="controls">
                                        @php
                                        $dayalama = '';
                                        $unit = \App\Unit::has('voltage_size')->where('full_number', $fltdaya->unit)->whereNull('deleted_at')->get();
                                        foreach ($unit as $key => $value) {
                                            $dayalama = $value->voltage_size->name;
                                        }
                                        @endphp
                                        <input type="text" class="form-control w-100" value="{{$dayalama}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Daya Baru</h5>
                                    <div class="controls">
                                        <input type="text" class="form-control w-100" value="{{$fltdaya->voltage_size->name}}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @else

                        <div class="row">
                            <div class="col-md-12 text-center">Mohon maaf data tidak ditemukan</div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
