@include('layouts.header')
@yield('styles')
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-content-full-height app-without-sidebar app-without-header">
		@include('layouts.user_nav')

  	
		<!-- BEGIN #header -->
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		{{-- @include('layouts.sidebar') --}}
		<!-- END #sidebar -->
			
		<!-- BEGIN mobile-sidebar-backdrop -->
		@include('layouts.backdrop')
		<!-- END mobile-sidebar-backdrop -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content p-1 ps-xl-4 pe-xl-4 pt-xl-3 pb-xl-3 mt-5">
    <div class="pos card" id="pos">
				<div class="pos-container card-body">
     @include('layouts.user_sidebar')
			<!-- BEGIN row -->
			
				<!-- BEGIN col-3 -->
				@yield('content')

			<!-- END row -->
		</div>
    </div>
  </div>
		<!-- END #content -->
		
		<!-- BEGIN theme-panel -->
		@include('layouts.theme')
		<!-- END theme-panel -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->


 </div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
@include('layouts.footer')
@yield('scripts')