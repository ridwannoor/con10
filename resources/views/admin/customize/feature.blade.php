@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <h2 class="view-title">Feature</h2>
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

                            @include('admin.component.side-menu')
                           
                        </div>

                        <div class="content-panel">
                            <h2 class="title">Feature<span class="pro-label badge badge-warning">PRO</span></h2>

                            <form class="user-form">
                                @foreach ($features as $feature)
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-4">
                                            {{-- <img class="rounded img-fluid" src="{{ asset('/storage/admin/feature/'.$feature->image)}}"
                                            alt="" /> --}}
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/slider/'.$feature->image)}}" width="150px" height="150px" alt="" />
                                        </figure>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-6">
                                            <label class="form-control" id="title">{{ $feature->title }}</label>
                                            {{-- <label class="form-control" id="title">{{ $features->title }}</label>
                                            --}}
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-6">
                                            <label class="form-control" id="deskripsi">{{ $feature->deskripsi }}</label>
                                            {{-- <label class="form-control" id="deskripsi">{{ $features->deskripsi }}</label>
                                            --}}
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 1</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            {{-- <img class="rounded img-fluid" src="{{ asset('/storage/admin/feature/'.$feature->image)}}"
                                            alt="" /> --}}
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/slider/'.$feature->image1)}}" alt="" />

                                        </figure>
                                    </div>
                                    <div class="form-group form-row">
                                        {{-- <div class="form-group row"> --}}
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="title">{{ $feature->title1 }}</label>
                                            {{-- <label class="form-control" id="title">{{ $feature->title1 }}</label>
                                            --}}
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="deskripsi">{{ $feature->deskripsi1 }}</label>
                                            {{-- <label class="form-control" id="deskripsi">{{ $feature->deskripsi1 }}</label>
                                            --}}
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 2</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">                                                
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/slider/'.$feature->image1)}}" alt="" />

                                        </figure>

                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            {{-- <label class="form-control" id="title" >{{ $feature->title2 }}</label>
                                            --}}
                                            <label class="form-control" id="title">{{ $feature->title2 }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            {{-- <label class="form-control" id="deskripsi">{{ $feature->deskripsi2 }}</label>
                                            --}}
                                            <label class="form-control" id="deskripsi">{{ $feature->deskripsi2 }}</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldset mb-3">
                                    <h3 class="fieldset-title">Section 3</h3>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/feature/'.$feature->image)}}"
                                            alt="" />
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}

                                        </figure>

                                    </div>
                                    <div class="form-group form-row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="title" >{{ $feature->title3 }}</label>                                           
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <label class="form-control" id="deskripsi">{{ $feature->deskripsi3 }}</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <hr>
                                <div class="form-group form-row">
                                    <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                        <a href="/admin/feature/edit/{{ $feature->id }}" class="btn btn-primary">Edit Feature</a>
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
