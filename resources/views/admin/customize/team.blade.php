@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <h2 class="view-title">Team</h2>
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
                            
                            @include('admin.component.side-menu')
                            
                        </div>
                        
                        <div class="content-panel">
                            <h2 class="title">Team<span class="pro-label badge badge-warning">PRO</span></h2>
                            <form class="user-form">
                                   
                                
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Team</h3>
                                   <p><a href="/admin/team/add" class="btn btn-primary">Tambah</a></p> 
                                    <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Publish</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $no = 1 ;
                                                @endphp
                                                <tbody>
                                                    @foreach ($team as $t)    
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $t->name }}</td>
                                                        <td>{{ $t->title }}</td>
                                                        <td>{{ $t->is_publish }}</td>
                                                        <td> <img class="rounded img-fluid" src="{{ asset('/storage/admin/team/'.$t->image)}}" width="150px" alt="" /></td>
                                                        <td>
                                                            <a href="/admin/team/edit/{{$t->id}}" class="btn btn-default">Edit</a>
                                                            <a href="/admin/team/destroy/{{$t->id}}" class="btn btn-danger">Hapus</a>
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