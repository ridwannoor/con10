@extends('admin.layouts.app')

@section('content-wrapper')
{{-- @foreach ($gens as $gen) --}}
   <div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <h2 class="view-title">My Account</h2>
        <div class="row">
            <div class="module-wrapper col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="user-info">
                                <img class="img-profile rounded-circle img-fluid mx-auto" src="{{ asset('/storage/admin/general/'.$gen->image)}}" alt="" />
                                <ul class="meta list list-unstyled">
                                    <li class="name">{{ $gen->name }}
                                        {{-- <label class="label label-info">UX Designer</label> --}}
                                    </li>
                                    <li class="email"><a href="#">{{ $gen->email }}</a></li>
                                    <li class="activity">{{ $gen->created_at }}</li>
                                </ul>
                            </div>
                            
                            <nav class="side-menu">
                                <ul class="nav">
                                    <li class="active"><a href="/admin/general"><span class="pe-icon pe-7s-user icon"></span>General</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-config icon"></span> Topbar</a></li>
                                    <li><a href="#"><span class="pe-icon pe-7s-credit icon"></span> Slider</a></li>
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
                            <h2 class="title">General<span class="pro-label badge badge-warning">PRO</span></h2>
                            <form class="user-form" method="POST" action="/admin/general/update" enctype="multipart/form-data">
                                {{-- <form class="user-form"> --}}
                               
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                       
                                <input type="hidden" name="id" value="{{$gen->id}}" />  
                                 <input type="hidden" name="_method" value="PUT" />                                     
                                        
                                    
                                    <fieldset class="fieldset mb-3">
                                        <h3 class="fieldset-title">General Info</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/general/'.$gen->logo)}}" alt="" />
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                        
                                        </figure>
                                        <div class="form-inline col-lg-10 col-md-9 col-12">
                                            <input type="file" name="logo" class="file-uploader float-left">
                                            {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Logo</button> --}}
                                        </div>
                                    </div> 
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/general/'.$gen->image)}}" alt="" />
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                        
                                        </figure>
                                        <div class="form-inline col-lg-10 col-md-9 col-12">
                                            <input type="file" name="image" class="file-uploader float-left">
                                            {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Image</button> --}}
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2 col-md-3 col-12 control-label">Name Site</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="text" name="name" class="form-control" value="{{ $gen->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2 col-md-3 col-12 control-label">Address</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="text" name="alamat" class="form-control" value="{{ $gen->alamat }}">
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Sosial Media</h3>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Email</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="email" name="email" class="form-control" value="{{ $gen->email }}">
                                            <p class="help-block">This is the email </p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Twitter</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="text" class="form-control" name="twitter" value="{{ $gen->twitter }}">
                                            <p class="help-block">Your twitter username</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Linkedin</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="url" class="form-control" name="linkedin" value="{{ $gen->linkedin }} ">
                                            <p class="help-block">eg. https://www.linkedin.com/in/yourname</p>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Facebook</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="url" class="form-control" name="facebook" value="{{ $gen->facebook }}">
                                            <p class="help-block">Your facebook username</p>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Instagram</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="url" class="form-control" name="instagram" value="{{ $gen->instagram }}">
                                            <p class="help-block">Your instagram username</p>
                                        </div>
                                    </div>

                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Whatsapp</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="text" class="form-control" name="whatsapp" value="{{ $gen->whatsapp }}">
                                            <p class="help-block">Your whatsapp phone number</p>
                                        </div>
                                    </div>
                                    
                                </fieldset>
                              
                                <hr>
                                <div class="form-group form-row">
                                    <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Update General">
                                    </div>
                                </div>
                               
                            </form>
                        </div>
                        
                    </div>
                    
                </section>
                
            </div>
            
        </div>
        
    </div>
    
</div> 
{{-- @endforeach --}}
@endsection
