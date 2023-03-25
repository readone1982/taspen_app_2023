@extends('layouts.app')

@section('content')
<section id="basic-form-layouts">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-square-controls">Pengumuman - Add Data</h4>
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
                <form class="form-horizontal" novalidate method="POST" action="{{route('billing.pengumuman.save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="form-body">
                                <div class="form-group">
                                    <h5>Name <span class="required">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="name" name="name" class="form-control" required data-validation-required-message="This field is required" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <h5>Description</h5>
                                    <div class="controls">
                                        <textarea id="description" name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-body">
                                <div class="form-group">
                                    <h5>Image</h5>
                                    <div class="controls">
                                        <input type="file" id="image" name="image" class="form-control" placeholder="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <h5>Document</h5>
                                    <div class="controls">
                                        <input type="file" id="document" name="document" class="form-control" placeholder="Document">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-body">
                                <div class="form-group">
                                    <h5>Template Email</h5>
                                    <div class="controls">
                                        <textarea id="email" name="email" class="form-control tinymce-editor" style="height: 100%;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions right">
                                <button type="button" class="btn btn-warning mr-1" onclick="window.history.back()">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection