@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view">
    <div class="container-fluid">
        <h2 class="view-title">Add Tags</h2>
        <div id="masonry" class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module module-headings">
                    <div class="module-inner">
                        <div class="module-heading">
                            {{-- <a href="/admin/tag/add" class="btn btn-primary">Add Tag</a> --}}
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
                                <form action="/admin/tag/update" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="_method" value="PUT" />
                                        <input type="hidden" name="id" value="{{$tags->id}}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="title"
                                            value="{{ $tags->name }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small> --}}
                                    </div>                                  

                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
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
