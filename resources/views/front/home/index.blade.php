@extends('front.layout')
@section('title')
    Project HOme
@endsection
@section('content')
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($sliders as $index => $slider)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner_taital">
                                        <h1 class="banner_taital">{{ $slider->title }}</h1>
                                        <p class="banner_text">{{ $slider->content }}
                                        </p>
                                    </div>
                                    <div class="btn_main">
                                        <div class="quote_bt active"><a href="#">Get A Quote</a></div>
                                        <div class="contact_bt"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ url('storage/cms/slider') }}/{{ $slider->image }}" class="banner_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- banner section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Our <span style="color: #0c426e">Services</span></h1>
            <p class="services_text">we provide all the best services for you that you need </p>
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
                    @foreach ($chooses as $choose)
                        <div class="col-md-4">
                            <div class="choose_box">
                                <div class="number_1">
                                    <h4 class="number_text">{{ $loop->index + 1 }}</h4>
                                    <h4 class="trusted_text">{{ $choose->title }}</h4>
                                </div>
                                <p class="dummy_text">{{ $choose->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- choose section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <h1 class="testimonial_taital">Testimonial</h1>
            <div class="testimonial_section_2">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($testimonials as $index => $testimonial)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="testimonial_box">
                                    <div class="tectimonial_mail">
                                        <div class="client_image_section">
                                            <img src="{{ url('storage/cms/testimonial') }}/{{ $testimonial->image }}"
                                                class="client_img">
                                        </div>
                                        <div class="client_text_section">
                                            <p class="testimonial_text">{{ $testimonial->containt }}</p>
                                            <h4 class="joech_text">{{ $testimonial->name }}</h4>
                                            <p class="customer_text">{{ $testimonial->job }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->
@endsection
