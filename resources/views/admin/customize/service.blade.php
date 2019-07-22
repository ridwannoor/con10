@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <h2 class="view-title">Service</h2>
        <div class="row">
            <div class="module-wrapper col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="user-info">
                                @foreach ($gens as $gen)
                                <img class="img-profile rounded-circle img-fluid mx-auto"
                                    src="{{ asset('/storage/admin/general/'.$gen->image)}}" alt="" />
                                <ul class="meta list list-unstyled">
                                    <li class="name">{{ $gen->name }}
                                        {{-- <label class="label label-info">UX Designer</label> --}}
                                    </li>
                                    <li class="email"><a href="#">{{ $gen->email }}</a></li>
                                    <li class="activity">{{ $gen->created_at }}</li>
                                </ul>
                                @endforeach
                            </div>

                            <nav class="side-menu">
                                <ul class="nav">
                                    <li><a href="/admin/general"><span class="pe-icon pe-7s-user icon"></span>General</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-config icon"></span> Topbar</a></li>
                                    <li><a href="/admin/slider"><span class="pe-icon pe-7s-credit icon"></span> Slider</a></li>
                                    <li><a href="/admin/feature"><span class="pe-icon pe-7s-chat icon"></span> Feature</a></li>                                    
                                    <li><a href="/admin/service"><span class="pe-icon pe-7s-pendrive icon"></span> Service</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-clock icon"></span> Team</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-config icon"></span> Pricing</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-credit icon"></span> Work</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-chat icon"></span> Testimonial</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-pendrive icon"></span> Blog</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-clock icon"></span> Contact</a></li>
                                </ul>
                            </nav>

                        </div>

                        <div class="content-panel">
                            <h2 class="title">Services<span class="pro-label badge badge-warning">PRO</span></h2>

                            <form class="user-form">
                                @foreach ($services as $service)
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 1</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            {{-- <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image)}}"
                                            alt="" /> --}}
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image)}}" alt="" />
                                        </figure>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="title">{{ $service->title }}</label>
                                            {{-- <label class="form-control" id="title">{{ $services->title }}</label>
                                            --}}
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="deskripsi">{{ $service->deskripsi }}</label>
                                            {{-- <label class="form-control" id="deskripsi">{{ $services->deskripsi }}</label>
                                            --}}
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 2</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            {{-- <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image)}}"
                                            alt="" /> --}}
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image1)}}" alt="" />

                                        </figure>
                                    </div>
                                    <div class="form-group form-row">
                                        {{-- <div class="form-group row"> --}}
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="title">{{ $service->title1 }}</label>
                                            {{-- <label class="form-control" id="title">{{ $service->title1 }}</label>
                                            --}}
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="deskripsi">{{ $service->deskripsi1 }}</label>
                                            {{-- <label class="form-control" id="deskripsi">{{ $service->deskripsi1 }}</label>
                                            --}}
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 3</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">                                                
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image1)}}" alt="" />

                                        </figure>

                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            {{-- <label class="form-control" id="title" >{{ $service->title2 }}</label>
                                            --}}
                                            <label class="form-control" id="title">{{ $service->title2 }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            {{-- <label class="form-control" id="deskripsi">{{ $service->deskripsi2 }}</label>
                                            --}}
                                            <label class="form-control" id="deskripsi">{{ $service->deskripsi2 }}</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 4</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image)}}"
                                            alt="" />
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}

                                        </figure>

                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="title" >{{ $service->title3 }}</label>                                           
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="deskripsi">{{ $service->deskripsi3 }}</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 5</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">                                                
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image1)}}" alt="" />

                                        </figure>

                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            {{-- <label class="form-control" id="title" >{{ $service->title2 }}</label>
                                            --}}
                                            <label class="form-control" id="title">{{ $service->title4 }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            {{-- <label class="form-control" id="deskripsi">{{ $service->deskripsi2 }}</label>
                                            --}}
                                            <label class="form-control" id="deskripsi">{{ $service->deskripsi4 }}</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 6</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/service/'.$service->image)}}"
                                            alt="" />
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}

                                        </figure>

                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="title" >{{ $service->title5 }}</label>                                           
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="deskripsi">{{ $service->deskripsi5 }}</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <hr>
                                <div class="form-group form-row">
                                    <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                        <a href="/admin/service/edit/{{ $service->id }}" class="btn btn-primary">Edit service</a>
                                        {{-- <input class="btn btn-primary" type="submit" name="submit" value="Edit General"> --}}
                                    </div>
                                </div>

                                @endforeach
                            </form>
                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>

</div>
@endsection
