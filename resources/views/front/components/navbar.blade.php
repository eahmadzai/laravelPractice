<!--header section start -->
<div class="header_section">
    <div class="container-fluid">
        <div class="costum_header">
            <div class="logo"><a href="{{ route('homeIndex') }}"><img src="{{ url('front') }}/images/logo.png"></a>
            </div>
            <div class="contact_menu">
                <ul>
                    <li><img src="{{ url('front') }}/images/call-icon.png" class="padding_right_10"><a
                            href="#">{{ $contact->phone }}</a>
                    </li>
                    <li><img src="{{ url('front') }}/images/mail-icon.png"
                            class="padding_right_10">{{ $contact->email }}<a href="#"></a></li>
                    <li><img src="{{ url('front') }}/images/map-icon.png" class="padding_right_10"><a
                            href="#">Location: Kabul Afghanistan
                        </a></li>
                </ul>
            </div>
            {{-- <div class="menu_text">
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="{{ route('homeIndex') }}">Home</a>
                        <a href="{{ route('serviceIndex') }}">Services</a>
                        <a href="{{ route('providingIndex') }}">Providing</a>
                        <a href="{{ route('choseIndex') }}">Choose</a>
                    </div>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="{{ url('front') }}/images/toggle-icon.png"
                        class="toggle_menu"></span>
            </div> --}}
        </div>
    </div>
</div>
<!-- header section end -->
