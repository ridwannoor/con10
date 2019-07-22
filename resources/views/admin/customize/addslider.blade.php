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
                            <h2 class="title">Slider<span class="pro-label badge badge-warning">PRO</span></h2>
                            <form class="user-form" method="POST" action="/admin/slider/store" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                       
                                {{-- <input type="hidden" name="id" value="{{$gen->id}}" />   --}}
                                <input type="hidden" name="_method" value="POST" /> 

                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Slider</h3>
                                  
                                   <div class="form-group form-row">
                                        <label class="col-lg-2 col-md-3 col-12 control-label">Title</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2 col-md-3 col-12 control-label">Deskripsi</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <input type="text" name="deskripsi" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group form-row avatar">
                                            <figure class="figure col-lg-2 col-md-3 col-12">
                                                <img class="rounded img-fluid" src="" alt="" />
                                            </figure>
                                            <div class="form-inline col-lg-10 col-md-9 col-12">
                                                <input type="file" name="image" class="file-uploader float-left">
                                            </div>
                                        </div>
                                    
                                </fieldset>
                              
                                <hr>
                                <div class="form-group form-row">
                                    <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                        {{-- <a href="/admin/slider/store" class="btn btn-success">Simpan</a> --}}
                                       <a href="/admin/slider" class="btn btn-default">Kembali</a>
                                        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
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
@endsection