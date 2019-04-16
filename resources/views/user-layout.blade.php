<!DOCTYPE html>
<html lang="en">

<head>
@include('user-partials.head')
</head>

<body>


	<!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        @include('user-partials.search')
    </div>
    <!-- Search Wrapper Area End -->



	<!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

    	
        <div class="mobile-nav">
			@include('user-partials.mobile-nav')
        </div>	<!-- End of Mobile Nav (max width 767px)-->



        <!-- Header Area Start -->
        <header class="header-area clearfix">
			@include('user-partials.nav-header')
        </header><!-- End of Header Area End -->

          @include('user-partials._messages')

        
        @yield('content')
    
    </div><!-- ##### End of Main Content Wrapper Start ##### -->



    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
		@include('user-partials.newsletter')
    </section>
    <!-- ##### Newsletter Area End ##### -->	



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
		@include('user-partials.footer')
    </footer>
    <!-- ##### Footer Area End ##### -->	


<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
		@include('user-partials.javascripts')

	@yield('scripts')



</body>
</html>