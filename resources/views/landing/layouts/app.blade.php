<!DOCTYPE html>
<html lang="en">
<head>
    @extends('landing.layouts.head')
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->

        <!-- preloader end -->

        <!-- main header -->
         @extends('landing.layouts.header')
        <!-- main-header end -->


        <!-- banner-section -->
         @yield('content')
        <!-- client-section end -->



        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>

     <!-- main-footer -->
         @extends('landing.layouts.footer')
        <!-- main-footer end -->

    @extends('landing.layouts.scripts')

</body><!-- End of .page_wrapper -->
</html>
