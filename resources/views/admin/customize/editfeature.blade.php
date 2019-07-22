@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <h2 class="view-title">My Account</h2>
        <div class="row">
            <div class="module-wrapper col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="user-info">
                                @foreach ($gens as $gen)
                                    
                                <img class="img-profile rounded-circle img-fluid mx-auto" src="{{ asset('/storage/admin/general/'.$gen->image)}}" alt="" />
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
                                    <li><a href="#"><span class="pe-icon pe-7s-chat icon"></span> Feature</a></li>                                    
                                    <li><a href="#"><span class="pe-icon pe-7s-pendrive icon"></span> Service</a></li>
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
                            <h2 class="title">Feature<span class="pro-label badge badge-warning">PRO</span></h2>
                            <form class="user-form">
                                @foreach ($features as $feature)
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section</h3>
                                    <div class="form-group form-row">  
                                        {{-- <div class="form-group row"> --}}
                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="title" value="{{ $feature->title }}">
                                            </div>
                                    </div>
                                    <div class="form-group form-row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="deskripsi" value="{{ $feature->deskripsi }}">
                                            </div>
                                    </div>
                                    <div class="form-group form-row avatar">
                                            <figure class="figure col-lg-2 col-md-3 col-12">
                                                <img class="rounded img-fluid" src="{{ asset('/storage/admin/general/'.$feature->image)}}" alt="" />
                                               
                                            </figure>
                                            <div class="form-inline col-lg-10 col-md-9 col-12">
                                                <input type="file" name="image" class="file-uploader float-left">
                                                {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Image</button> --}}
                                            </div>
                                        </div>                                
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                        <h3 class="fieldset-title">Section 1</h3>
                                        <div class="form-group form-row">  
                                            {{-- <div class="form-group row"> --}}
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title" value="{{ $feature->title1 }}">
                                                </div>
                                        </div>
                                        <div class="form-group form-row">
                                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="deskripsi"  value="{{ $feature->deskripsi1 }}">
                                                </div>
                                        </div>
                                        <div class="form-group form-row avatar">
                                                <figure class="figure col-lg-2 col-md-3 col-12">
                                                    <img class="rounded img-fluid" src="{{ asset('/storage/admin/general/'.$feature->image1)}}" alt="" />
                                                    {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                                
                                                </figure>
                                                <div class="form-inline col-lg-10 col-md-9 col-12">
                                                    <input type="file" name="image" class="file-uploader float-left">
                                                    {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Image</button> --}}
                                                </div>
                                            </div>                                
                                    </fieldset>
                                    <fieldset class="fieldset mb-3">
                                            <h3 class="fieldset-title">Section 2</h3>
                                            <div class="form-group form-row">  
                                                {{-- <div class="form-group row"> --}}
                                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="title" value="{{ $feature->title2 }}">
                                                    </div>
                                            </div>
                                            <div class="form-group form-row">
                                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="deskripsi" value="{{ $feature->deskripsi2 }}">
                                                    </div>
                                            </div>
                                            <div class="form-group form-row avatar">
                                                    <figure class="figure col-lg-2 col-md-3 col-12">
                                                        <img class="rounded img-fluid" src="{{ asset('/storage/admin/general/'.$feature->image2)}}" alt="" />
                                                        {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                                    
                                                    </figure>
                                                    <div class="form-inline col-lg-10 col-md-9 col-12">
                                                        <input type="file" name="image" class="file-uploader float-left">
                                                        {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Image</button> --}}
                                                    </div>
                                                </div>                                
                                        </fieldset>
                                        <fieldset class="fieldset mb-3">
                                                <h3 class="fieldset-title">Section 3</h3>
                                                <div class="form-group form-row">  
                                                    {{-- <div class="form-group row"> --}}
                                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="title" value="{{ $feature->title3 }}">
                                                        </div>
                                                </div>
                                                <div class="form-group form-row">
                                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="deskripsi" value="{{ $feature->deskripsi3 }}">
                                                        </div>
                                                </div>
                                                <div class="form-group form-row avatar">
                                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/general/'.$feature->image3)}}" alt="" />
                                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                                        
                                                        </figure>
                                                        <div class="form-inline col-lg-10 col-md-9 col-12">
                                                            <input type="file" name="image" class="file-uploader float-left">
                                                            {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Image</button> --}}
                                                        </div>
                                                    </div>                                
                                            </fieldset>
                                <hr>  
                                <div class="form-group form-row">
                                    <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                        <a href="#" class="btn btn-primary">Simpan Feature</a>
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