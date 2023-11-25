@extends('front.layout')
@section('title')
    Project HOme
@endsection
@section('content')
    <!-- banner section start -->

    <!-- banner section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Our <span style="color: #0c426e">Services</span></h1>
            <p class="services_text">t is a long established fact that a reader will be distracted by the readable content
                of a page when looking </p>
            <div class="services_section_2 layout_padding">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-4 padding_right_0">
                            <div class="services_box">
                                <h4 class="express_text">{{ $service->title }}</h4>
                                <p class="lorem_text">{{ $service->content }} </p>
                                <div class="seemore_bt "><a href="#">See More</a></div>
                                <div><img src="{{ url('storage/cms/service') }}/{{ $service->image }}" class="image_1">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- providing section start -->
    <div class="providing_section layout_padding">
        <div class="container">
            <h1 class="services_taital">We’re Providing Best <span style="color: #0c426e">Quality Service</span></h1>
        </div>
    </div>
    <div class="providing_section_2 layout_padding">
        <div class="container">
            <h2 class="clean_text">{{ $provide->title }}</h2>
            <p class="ipsum_text">{{ $provide->content }}</p>
            <div class="quote_bt_1"><a href="#">Get A Quote</a></div>
        </div>
    </div>
    <!-- providing section end -->
    <!-- choose section start -->
    <div class="choose_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Why <span style="color: #0c426e">Choose Us?</span></h1>
            <div class="choose_section_2 layout_padding">
                <div class="row">
                    <div class="col-md-4">
                        <div class="choose_box">
                            <div class="number_1">
                                <h4 class="number_text">01</h4>
                                <h4 class="trusted_text">Trusted Services</h4>
                            </div>
                            <p class="dummy_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose_box">
                            <div class="number_1">
                                <h4 class="number_text">02</h4>
                                <h4 class="trusted_text">Talented Workers</h4>
                            </div>
                            <p class="dummy_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose_box">
                            <div class="number_1">
                                <h4 class="number_text">03</h4>
                                <h4 class="trusted_text">Organic Products</h4>
                            </div>
                            <p class="dummy_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            @foreach ($testimonials as $testimonial)
                <h1 class="testimonial_taital">Testimonial</h1>
                <div class="testimonial_section_2">
                    <div id="my_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial_box">
                                    <div class="tectimonial_mail">
                                        <div class="client_image_section">
                                            <img src="{{ url('storage/cms/testimonial') }}/{{ details->image }}"
                                                class="client_img">
                                        </div>
                                        <div class="client_text_section">
                                            <p class="testimonial_text">{{ $testimonial->containt }}</p>
                                            <h4 class="joech_text">{{ $detail->name }}</h4>
                                            <p class="customer_text">{{ $->job }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial_box">
                                    <div class="tectimonial_mail">
                                        <div class="client_image_section">
                                            <img src="{{ url('storage/cms/testimonial') }}/{{ details->image }}"
                                                class="client_img">
                                        </div>
                                        <div class="client_text_section">
                                            <p class="testimonial_text">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout. The
                                                point of using Lorem Ipsum is that</p>
                                            <h4 class="joech_text">Joech</h4>
                                            <p class="customer_text">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial_box">
                                    <div class="tectimonial_mail">
                                        <div class="client_image_section">
                                            <img src="{{ url('front') }}/images/client-img.png" class="client_img">
                                        </div>
                                        <div class="client_text_section">
                                            <p class="testimonial_text">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout. The
                                                point of using Lorem Ipsum is that</p>
                                            <h4 class="joech_text">Joech</h4>
                                            <p class="customer_text">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- testimonial section end -->
@endsection
