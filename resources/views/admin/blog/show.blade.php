@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view health-view">
    <div class="container-fluid">
        <h2 class="view-title">Dashboard Use Case 3 (Health App)</h2>
        <div class="row">
            <div class="module-wrapper col-xl-12 col-12">
                <section class="module module-health-overview module-no-heading">
                    <div class="module-inner">
                        <div class="module-content collapse show">
                            <div class="module-content-inner pb-0">
                                {{-- @foreach ($blogs as $b) --}}
                                   
                                <div class="profile">
                                    <img class="profile-image img-fluid" src="assets/images/profiles/profile-square-1-lg.png" alt="" />
                                    <div class="meta-wrapper">
                                        <h3 class="title">{{ $blog->title }}<span class="pro-label label label-warning" >by {{ $blog->user->name }}</span></h3>
                                        <ul class="meta-list list-unstyled">
                                            <li>{{ $blog->content }}</i></li>
                                            <li><strong>Category : </strong>{{ $blog->categorie->title }} </li>
                                            <li><strong> Tags : </strong>{{ $blog->tags->implode('name', ', ') }}</li>
                                        </ul>
                                    </div>
                                    <div class="health-points">
                                        <a href="/admin/blog" class="btn btn-primary">Go Back</a>
                                        {{-- <div class="number text-success">Back</div>
                                        <div class="note">Back</div> --}}
                                    </div>
                                </div>
                                 
                                {{-- @endforeach --}}
                                {{-- <div class="basic-info">
                                    <div class="item item-0 d-none d-sm-inline-block">
                                        <span class="figure">28</span>
                                        <br><span class="note">Age</span>
                                    </div>
                                    <div class="item item-1">
                                        <span class="figure">52<span class="unit">kg</span></span>
                                        <br><span class="note">Weight</span>
                                    </div>
                                    <div class="item item-2 d-none d-sm-inline-block">
                                        <span class="figure">1.65<span class="unit">m</span></span>
                                        <br><span class="note">Height</span>
                                    </div>
                                    <div class="item item-3">
                                        <span class="figure">22.6</span>
                                        <br><span class="note">BMI</span>
                                    </div>
                                    <div class="item item-4">
                                        <span class="figure">12<span class="unit">%</span></span>
                                        <br><span class="note">Fat</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
           
        </div>
    </div>
</div>
@endsection