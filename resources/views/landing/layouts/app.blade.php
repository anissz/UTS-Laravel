<!DOCTYPE html>
<html lang="en">
<head>
    @extends('landing.layouts.head')
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
                 <!-- preloader -->
        <div class="preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- main header -->
         @extends('landing.layouts.header')
        <!-- main-header end -->


        <!-- banner-section -->
         @yield('content')
        <!-- client-section end -->


        <!-- main-footer -->
         @extends('landing.layouts.footer')
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>

    @extends('landing.layouts.scripts')

</body><!-- End of .page_wrapper -->
</html>
