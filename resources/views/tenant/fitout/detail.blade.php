@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-square-controls">Fitout Renovation</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="{{url('/tenant/fitout')}}" class="btn btn-sm btn-warning btn-min-width box-shadow-3">Kembali</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Unit</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$fitout->unit}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">Main Contractor Data</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Nama Perusahaan</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$fitout->company_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Kategori</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$fitout->company_category}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Telephone</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$fitout->company_phone}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Fax</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$fitout->company_fax}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{$fitout->company_email}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">&nbsp;</div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">Job Description</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <textarea name="job_description" class="form-control w-100" rows="8" readonly>{{$fitout->job_description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">Fitting Out Must be Paid</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Deposit Amount</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{number_format($fitout->deposit, 0, ',', '.')}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Admin Fit Out</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{number_format($fitout->admin, 0, ',', '.')}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Biaya Air</h5>
                                        <div class="controls">
                                            <input type="text" class="form-control w-100" value="{{number_format($fitout->biaya_air, 0, ',', '.')}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
