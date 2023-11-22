@extends('cms.layout')
@section('title')
    cms providing
@endsection
@section('content')
    <!--***************************
                                                                   Content body                                                                                                                                              ***********************************-->
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">providing</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h4 class="heading mb-0 blog-title">providing Area</h4>
                                    <a href="{{ route('providing.create') }}" class="btn btn-primary btn-sm">Add New
                                        providing</a>
                                </div>
                                <div class="card-body">
                                    @if ($provide == null)
                                        <span>Please add data</span>
                                    @else
                                        <div class="third-post">
                                            <div class="post-1">
                                                <div class="post-data">

                                                    <h4>{{ $provide->title }}</h4>

                                                    <span>
                                                        {{ $provide->content }}
                                                    </span>
                                                    <hr>
                                                    <div class="d-flex">
                                                        <a href="{{ route('providing.edit', $provide->id) }}"
                                                            class="btn btn-success btn-sm">Edit</a>
                                                        <form action="{{ route('providing.destroy', $provide->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm"
                                                                onclick="confirm('are you sur ?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

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
