@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view">
    <div class="container-fluid">
        <h2 class="view-title">Posts</h2>
        <div id="masonry" class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module module-headings">
                    <div class="module-inner">
                        <div class="module-heading">
                            <a href="/admin/blog/add" class="btn btn-xs btn-primary">Add Post</a>
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
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Tag</th>
                                                <th>Published</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1 ;
                                        @endphp
                                        <tbody>
                                            @foreach ($blogs as $b)                                                
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $b->title }}</td>
                                                <td>{{ $b->content }}</td>
                                                <td>{{ $b->user->name }}</td>
                                                <td>{{ $b->categorie->title }}</td>
                                                <td><span class="btn btn-xs btn-default">{{ $b->tags->implode('name', ', ') }}</span></td>
                                                <td>{{ $b->published }}</td>
                                                <td>
                                                    <form class="btn-group">
                                                            @if (Auth::user()->is_admin)
                                                            {{-- @php
                                                                if($b->published == 'Yes') {
                                                                    $label = 'Draft';
                                                                } else {
                                                                    $label = 'Publish';
                                                                }
                                                            @endphp     --}}
                                                             @php
                                                             if($b->published == 'Yes') {                                                              
                                                                 $label =  'Draft' ;
                                                             } else {
                                                                 $label = 'Publish';
                                                             }
                                                            @endphp    
                                                            {{-- <form action="/admin/blog/publish" method="POST">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                                <input type="hidden" name="id" value="{{$b->id}}" />
                                                                {{ method_field('put') }}
                                                                <button class="btn btn-xs btn-warning">{{ $label }}</button>
                                                                {{-- <a href="/admin/blog/publish" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a> --}}
                                                            {{-- </form>     --}} 
                                                            {{-- <input name="_method" type="hidden" value="PUT">     
                                                            <input type="hidden" name="id" value="{{$b->id}}" /> 
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                  --}}
                                                            <a href="/admin/blog/publish/{{ $b->id }}" class="btn btn-xs btn-warning">{{ $label }}</a>
                                                            @endif
                                                                <a href="/admin/blog/show/{{ $b->id }}" class="btn btn-xs btn-success"><span aria-hidden="true" class="icon_search-2"></span></a>
                                                                <a href="/admin/blog/edit/{{ $b->id }}" class="btn btn-xs btn-primary"><span aria-hidden="true" class="icon_pencil"></span></a>
                                                                <a href="/admin/blog/destroy/{{ $b->id }}" class="btn btn-xs btn-danger"><span aria-hidden="true" class="icon_trash"></span></a>
                                                    </form>                                               
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
