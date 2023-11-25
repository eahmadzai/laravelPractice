@extends('cms.layout')
@section('title')
    CMS Create testimonial
@endsection
@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Form Elements</a></li>
            </ol>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">testimonial Creation Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('testimonial.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        @include('cms.testimonial.form')
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
