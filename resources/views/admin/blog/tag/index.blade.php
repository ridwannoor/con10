@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view">
    <div class="container-fluid">
        <h2 class="view-title">Tags</h2>
        <div id="masonry" class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module module-headings">
                    <div class="module-inner">
                        <div class="module-heading">
                            <a href="/admin/tag/add" class="btn btn-primary">Add Tag</a>
                           {{--  <h3 class="module-title">Zero Configuration</h3> --}}
                            <ul class="actions list-inline">
                                <li><a class="collapse-module" data-toggle="collapse" href="#content-1"
                                        aria-expanded="false" aria-controls="content-1"><span aria-hidden="true"
                                            class="icon arrow_carrot-up"></span></a></li>
                                <li><a class="close-module" href="#"><span aria-hidden="true"
                                            class="icon icon_close"></span></a></li>
                            </ul>

                        </div>

                        <div class="module-content collapse show" id="content-1">
                            <div class="module-content-inner pb-0">
                                <div class="table-responsive">
                                    <table id="datatable-1" class="table table-striped display " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1 ;
                                        @endphp
                                        <tbody>
                                            @foreach ($tags as $b)                                                
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $b->name }}</td>
                                                <td>{{ $b->created_at }}</td>
                                                <td>
                                                    <a href="/admin/tag/edit/{{ $b->id }}" class="btn btn-xs btn-primary">Edit</a>
                                                    <a href="/admin/tag/destroy/{{ $b->id }}" class="btn btn-xs btn-danger">Delete</a>
                                                </td>
                                            </tr>                                            
                                            @endforeach
                                        </tbody>
                                       
                                    </table>
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
