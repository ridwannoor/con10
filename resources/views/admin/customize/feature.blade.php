@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">Features</h3>
                            {{-- <ul class="actions list-inline">
                                <li><a class="btn btn-xs btn-default" >Edit </a></li>
                                <li><a class="close-module" href="#"><span aria-hidden="true" class="icon icon_close"></span></a></li>
                            </ul> --}}
                        </div>
                        <div class="module-content collapse show" id="content-5">
                            <div class="module-content-inner pb-0">
                                {{-- <h4 class="has-divider">Elegant Icons</h4> --}}
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-theme-3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" href="#section"
                                                aria-controls="section" role="tab" data-toggle="tab"><span
                                                    class="fs1 icon" aria-hidden="true"
                                                    data-icon="&#x5a;"></span><br><span
                                                    class="d-none d-sm-inline-block hidden-sm">Section</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#section-1"
                                                aria-controls="section-1" role="tab" data-toggle="tab"><span
                                                    class="fs1 icon" aria-hidden="true"
                                                    data-icon="&#x5a;"></span><br><span
                                                    class="d-none d-sm-inline-block hidden-sm">Section 1</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#section-2"
                                                aria-controls="section-2" role="tab" data-toggle="tab"><span
                                                    class="fs1 icon" aria-hidden="true"
                                                    data-icon="&#x5a;"></span><br><span
                                                    class="d-none d-sm-inline-block hidden-sm">Section 2</span></a></li>
                                        <li class="nav-item last"><a class="nav-link" href="#section-3"
                                                aria-controls="section-3" role="tab" data-toggle="tab"><span
                                                    class="fs1 icon" aria-hidden="true"
                                                    data-icon="&#x5a;"></span><br><span
                                                    class="d-none d-sm-inline-block hidden-sm">Section 3</span></a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                        --}}
                                            {{-- <input type="hidden" name="id" value="{{$feature->id}}" />   --}}
                                            {{-- <input type="hidden" name="_method" value="PUT" />  --}}

                                        <div role="tabpanel" class="tab-pane active" id="section">
                                            <fieldset class="fieldset mb-3">
                                                <div class="form-group form-row avatar">
                                                    <figure class="figure col-lg-2 col-md-3 col-4">
                                                        @foreach ($features as $feature)
                                                        <img class="rounded img-fluid"
                                                            src="{{ asset('/storage/admin/feature/'.$feature->image)}}"
                                                            width="150px" height="150px" alt="" />
                                                        @endforeach
                                                    </figure>
                                                </div>

                                                <div class="form-group form-row">
                                                    <label for="title" class="col-sm-2 col-form-label">Title :</label>
                                                    <div class="col-sm-6">
                                                        <label for="title" class="col-form-label" id="title" name="title">{{ $feature->title }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label for="deskripsi"
                                                        class="col-sm-2 col-form-label">Deskripsi :</label>
                                                    <div class="col-sm-6">
                                                       <label for="deskripsi"
                                                        class="col-form-label">{{ $feature->deskripsi }}</label>                                                        
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="section-1">
                                                <fieldset class="fieldset mb-3">
                                                        <div class="form-group form-row avatar">
                                                            <figure class="figure col-lg-2 col-md-3 col-4">
                                                                @foreach ($features as $feature)
                                                                <img class="rounded img-fluid"
                                                                    src="{{ asset('/storage/admin/feature/'.$feature->image1)}}"
                                                                    width="150px" height="150px" alt="" />
                                                                @endforeach
                                                            </figure>
                                                        </div>
        
                                                        <div class="form-group form-row">
                                                            <label for="title" class="col-sm-2 col-form-label">Title :</label>
                                                            <div class="col-sm-6">
                                                                <label for="title" class="col-form-label" id="title1" name="title1">{{ $feature->title1 }}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row">
                                                            <label for="deskripsi"
                                                                class="col-sm-2 col-form-label">Deskripsi :</label>
                                                            <div class="col-sm-6">
                                                               <label for="deskripsi"
                                                                class="col-form-label"  name="deskripsi1">{{ $feature->deskripsi1 }}</label>                                                        
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="section-2">
                                                <fieldset class="fieldset mb-3">
                                                        <div class="form-group form-row avatar">
                                                            <figure class="figure col-lg-2 col-md-3 col-4">
                                                                @foreach ($features as $feature)
                                                                <img class="rounded img-fluid"
                                                                    src="{{ asset('/storage/admin/feature/'.$feature->image2)}}"
                                                                    width="150px" height="150px" alt="" />
                                                                @endforeach
                                                            </figure>
                                                        </div>
        
                                                        <div class="form-group form-row">
                                                            <label for="title" class="col-sm-2 col-form-label">Title :</label>
                                                            <div class="col-sm-6">
                                                                <label for="title" class="col-form-label" id="title2" name="title2">{{ $feature->title2 }}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row">
                                                            <label for="deskripsi"
                                                                class="col-sm-2 col-form-label">Deskripsi :</label>
                                                            <div class="col-sm-6">
                                                               <label for="deskripsi2"
                                                                class="col-form-label" name="deskripsi2">{{ $feature->deskripsi2 }}</label>                                                        
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="section-3">
                                                <fieldset class="fieldset mb-3">
                                                        <div class="form-group form-row avatar">
                                                            <figure class="figure col-lg-2 col-md-3 col-4">
                                                                @foreach ($features as $feature)
                                                                <img class="rounded img-fluid"
                                                                    src="{{ asset('/storage/admin/feature/'.$feature->image3)}}"
                                                                    width="150px" height="150px" alt="" />
                                                                @endforeach
                                                            </figure>
                                                        </div>
        
                                                        <div class="form-group form-row">
                                                            <label for="title" class="col-sm-2 col-form-label">Title :</label>
                                                            <div class="col-sm-6">
                                                                <label for="title" class="col-form-label" id="title3" name="title3">{{ $feature->title3 }}</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row">
                                                            <label for="deskripsi"
                                                                class="col-sm-2 col-form-label">Deskripsi :</label>
                                                            <div class="col-sm-6">
                                                               <label for="deskripsi3"
                                                                class="col-form-label" name="deskripsi3">{{ $feature->deskripsi3 }}</label>                                                        
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                        </div>
                                       
                                        
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="/admin/feature/edit/{{ $feature->id }}" class="btn btn-primary">Update</a>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
