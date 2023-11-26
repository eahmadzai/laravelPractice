@extends('cms.layout')
@section('title')
    cms testimonial
@endsection
@section('content')
    <!--**********************************
                                                                                                                                                                                                                                                                        Content body start
                                                                                                                                                                                                                                                                    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Dashboard</h5>
                </li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Home </a>
                </li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">testimonial</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h4 class="heading mb-0 blog-title">testimonial Area</h4>
                                    <a href="{{ route('testimonial.create') }}" class="btn btn-primary btn-sm">Add New
                                        testimonial</a>
                                </div>
                                <div class="card-body">
                                    <span>add some content</span>
                                    @foreach ($testimonials as $testimonial)
                                        <div class="third-post">
                                            <img src="{{ url('storage/cms/testimonial') }}/{{ $testimonial->image }}">
                                            <div class="post-1">
                                                <div class="post-data">

                                                    <span>
                                                        {{ $testimonial->title }}
                                                    </span>
                                                    <span>
                                                        {{ $testimonial->content }}
                                                    </span>
                                                    <span>{{ $testimonial->name }}</span>
                                                    <span>
                                                        {{ $testimonial->job }}
                                                    </span>
                                                    <hr>
                                                    <div class="d-flex">
                                                        <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <form action="{{ route('testimonial.destroy', $testimonial->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!--**********************************
                                                                                                                                                                                                                                                                        Content body end
                                                                                                                                                                                                                                                                    ***********************************-->
@endsection
