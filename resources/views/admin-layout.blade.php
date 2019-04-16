<!DOCTYPE html>
<html lang="en">

<head>
@include('admin-partials.head')
@yield('stylesheets')
</head>

<body>

    <div class="">
        @include('admin-partials._messages')
    </div>
       
	<!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        @include('admin-partials.search')
    </div>
    <!-- Search Wrapper Area End -->



	<!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

    	
        <div class="mobile-nav">
			@include('admin-partials.mobile-nav')
        </div>	<!-- End of Mobile Nav (max width 767px)-->



        <!-- Header Area Start -->
        <header class="header-area clearfix">
			@include('admin-partials.nav-header')
        </header><!-- End of Header Area End -->

          
       
        
        @yield('content')
    
    </div><!-- ##### End of Main Content Wrapper Start ##### -->



    <!-- ##### Newsletter Area Start ##### -->
    {{-- <section class="newsletter-area section-padding-100-0">
		@include('admin-partials.newsletter')
    </section> --}}
    <!-- ##### Newsletter Area End ##### -->	



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
		@include('admin-partials.footer')
    </footer>
    <!-- ##### Footer Area End ##### -->	


<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
		@include('admin-partials.javascripts')

	@yield('scripts')



</body>
</html>