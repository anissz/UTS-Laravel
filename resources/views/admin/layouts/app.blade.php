<!DOCTYPE html>
<html lang="en">

    <head>
        @extends('admin.layouts.head')
    </head>

    <body>

        <!-- Begin page -->
         @extends('admin.layouts.header')
        <div id="layout-wrapper">
            <div class="header-border"></div>

            <!-- ========== Left Sidebar Start ========== -->
            @extends('admin.layouts.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
         @extends('admin.layouts.scripts') 

    </body>

</html>