@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <h2 class="view-title">Slider</h2>
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
                            <h2 class="title">Slider<span class="pro-label badge badge-warning">PRO</span></h2>
                            <form class="user-form">
                                   
                                
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Slider</h3>
                                   <p><a href="/admin/slider/add" class="btn btn-primary">Tambah</a></p> 
                                    <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $no = 1 ;
                                                @endphp
                                                <tbody>
                                                    @foreach ($sliders as $slide)    
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $slide->title }}</td>
                                                        <td>{{ $slide->deskripsi }}</td>
                                                        <td> <img class="rounded img-fluid" src="{{ asset('/storage/admin/slider/'.$slide->image)}}" width="150px" alt="" /></td>
                                                        <td>
                                                            <a href="/admin/slider/edit/{{$slide->id}}" class="btn btn-default">Edit</a>
                                                            <a href="/admin/slider/destroy/{{$slide->id}}" class="btn btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>  
                                                    @endforeach                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                </fieldset>
                              
                                <hr>
                               
                               
                            </form>
                        </div>
                        
                    </div>
                    
                </section>
                
            </div>
            
        </div>
        
    </div>
    
</div>
@endsection