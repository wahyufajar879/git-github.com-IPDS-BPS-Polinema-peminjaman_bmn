<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
     @include('Template.js')
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <div class="flex mt-[4.7rem] md:mt-0">

            <!-- BEGIN: Side Menu -->
            @include('Template.side')
             <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">

                <!-- BEGIN: TOP Menu -->
                @include('Template.top')
                <!-- END: TOP Menu -->


        @include('Template.js')

        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>

        </main>
            </div>
    </body>
</html>
