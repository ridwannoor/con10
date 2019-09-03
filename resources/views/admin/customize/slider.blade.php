@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">Slider</h3>
                        </div>
                        <div class="module-content collapse show" id="content-4">
                            <div class="module-content-inner pb-0">
                                <form class="user-form">                                   
                                
                                    <fieldset class="fieldset mb-3">
                                        {{-- <h3 class="fieldset-title">Slider</h3> --}}
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
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
