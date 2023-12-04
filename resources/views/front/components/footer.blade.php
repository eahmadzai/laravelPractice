   <!-- footer section start -->
   <div class="footer_section layout_padding">
       <div class="container">
           <div class="row">
               <div class="col-lg-4 col-sm-6">
                   <h2 class="useful_text">Contact Us</h2>
                   <div class="location_text"><img src="{{ url('front') }}/images/map-icon1.png"><a href="#"><span
                               class="padding_left_15">Location:kabul</span></a></div>
                   <div class="location_text"><img src="{{ url('front') }}/images/call-icon1.png"><a
                           href="#"><span class="padding_left_15">(+93) 764700907</span></a></div>
                   <div class="location_text"><img src="{{ url('front') }}/images/mail-icon1.png"><a
                           href="#"><span class="padding_left_15 ">ahsan@gmail.com</span></a>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                   <h2 class="useful_text">Useful link </h2>
                   <div class="footer_menu">
                       <ul>
                           <li class="active"><a href="{{ route('homeIndex') }}">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="{{ route('serviceIndex') }}">Service</a></li>
                           <li><a href="blog.html">Blog</a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-lg-4">
                   <h1 class="useful_text">Newsletter</h1>
                   <input type="text" class="Enter_text" placeholder="Enter Your Email" name="Enter Your Email">
                   <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
           </div>
           <div class="social_icon">
               <div id="social">
                   <a class="facebookBtn smGlobalBtn" href="#"></a>
                   <a class="twitterBtn smGlobalBtn" href="#"></a>
                   <a class="instagramBtn smGlobalBtn" href="#"></a>
                   <a class="linkedinBtn smGlobalBtn" href="#"></a>
               </div>
           </div>
       </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
       <div class="container">
           <p class="copyright_text">Copyright 2023 All Rights Reserved. Design by<a href="https://html.design">
                   Ehsanullah Ahmadzai ❤</a></p>
       </div>
   </div>




   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{ url('front') }}/js/jquery.min.js"></script>
   <script src="{{ url('front') }}/js/popper.min.js"></script>
   <script src="{{ url('front') }}/js/bootstrap.bundle.min.js"></script>
   <script src="{{ url('front') }}/js/jquery-3.0.0.min.js"></script>
   <script src="{{ url('front') }}/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="{{ url('front') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="{{ url('front') }}/js/custom.js"></script>
   <!-- javascript -->
   <script src="{{ url('front') }}/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
       $(document).ready(function() {
           $(".fancybox").fancybox({
               openEffect: "none",
               closeEffect: "none"
           });

           $(".zoom").hover(function() {

               $(this).addClass('transition');
           }, function() {

               $(this).removeClass('transition');
           });
       });
   </script>
   <script>
       function openNav() {
           document.getElementById("myNav").style.width = "100%";
       }

       function closeNav() {
           document.getElementById("myNav").style.width = "0%";
       }
   </script>
   </body>

   </html>
