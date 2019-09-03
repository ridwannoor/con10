@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">services</h3>
                        </div>
                        <div class="module-content collapse show" id="content-5">
                            <div class="module-content-inner pb-0">
                                {{-- <h4 class="has-divider">Elegant Icons</h4> --}}
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-theme-3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" href="#section" aria-controls="section" role="tab" data-toggle="tab"><span class="fs1 icon" aria-hidden="true" data-icon="&#x5a;"></span><br><span class="d-none d-sm-inline-block hidden-sm">Section</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#section-1" aria-controls="section-1" role="tab" data-toggle="tab"><span class="fs1 icon" aria-hidden="true" data-icon="&#xe108;"></span><br><span class="d-none d-sm-inline-block hidden-sm">Section 1</span></a></li>
                                        <li class="nav-item last"><a class="nav-link" href="#section-2" aria-controls="section-2" role="tab" data-toggle="tab"><span class="fs1 icon" aria-hidden="true" data-icon="&#xe010;"></span><br><span class="d-none d-sm-inline-block hidden-sm">Section 2</span></a></li>
                                        {{-- <li class="nav-item " ><a class="nav-link" href="#section-3" aria-controls="section-3" role="tab" data-toggle="tab"><span class="fs1 icon" aria-hidden="true" data-icon="&#xe035;"></span><br><span class="d-none d-sm-inline-block hidden-sm">Section 3</span></a></li> --}}
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        @foreach ($services as $service)
                                        <div role="tabpanel" class="tab-pane active" id="section">
                                            <fieldset class="fieldset mb-3">
                                                <div class="form-group form-row avatar">
                                                    <figure class="figure col-lg-2 col-md-3 col-4">
                                                        <img class="rounded img-fluid"
                                                        src="{{ asset('/storage/admin/slider/'.$service->image)}}"
                                                        width="150px" height="150px" alt="" />
                                                    </figure>
                                                </div>
                                                
                                                <div class="form-group form-row">
                                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $service->deskripsi }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">File Upload</label>
                                                        <input type="file" name="image" class="file-uploader float-left">
                                                    </div>
                                            </fieldset>
                                            <div class="form-group form-row">
                                                <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                                    <a href="" class="btn btn-primary">Update</a>
                                                    <a href="" class="btn btn-warning">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div role="tabpanel" class="tab-pane" id="section-1">
                                            <fieldset class="fieldset mb-3">
                                                <div class="form-group form-row avatar">
                                                    <figure class="figure col-lg-2 col-md-3 col-4">
                                                        <img class="rounded img-fluid"
                                                        src="{{ asset('/storage/admin/slider/'.$service->image1)}}"
                                                        width="150px" height="150px" alt="" />
                                                    </figure>
                                                </div>
                                                
                                                <div class="form-group form-row">
                                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="title1" name="title1" value="{{ $service->title1 }}">
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" name="deskripsi1" id="deskripsi1" cols="30" rows="10">{{ $service->deskripsi1 }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">File Upload</label>
                                                        <input type="file" name="image1" class="file-uploader float-left">
                                                    </div>
                                            </fieldset>
                                            <div class="form-group form-row">
                                                <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                                    <a href="" class="btn btn-primary">Update</a>
                                                    <a href="" class="btn btn-warning">Back</a>
                                                </div>
                                            </div>    
                                        </div>
                                        
                                        <div role="tabpanel" class="tab-pane" id="section-2">
                                                <fieldset class="fieldset mb-3">
                                                        <div class="form-group form-row avatar">
                                                            <figure class="figure col-lg-2 col-md-3 col-4">
                                                                <img class="rounded img-fluid"
                                                                src="{{ asset('/storage/admin/slider/'.$service->image2)}}"
                                                                width="150px" height="150px" alt="" />
                                                            </figure>
                                                        </div>
                                                        
                                                        <div class="form-group form-row">
                                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="title2" name="title2" value="{{ $service->title2 }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row">
                                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                                            <div class="col-sm-6">
                                                                <textarea class="form-control" name="deskripsi2" id="deskripsi2" cols="30" rows="10">{{ $service->deskripsi2 }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row">
                                                                <label for="title" class="col-sm-2 col-form-label">File Upload</label>
                                                                <input type="file" name="image2" class="file-uploader float-left">
                                                            </div>
                                                    </fieldset>
                                                    <div class="form-group form-row">
                                                        <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                                            <a href="" class="btn btn-primary">Update</a>
                                                            <a href="" class="btn btn-warning">Back</a>
                                                        </div>
                                                    </div>
                                        </div>
                                        
                                        
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
