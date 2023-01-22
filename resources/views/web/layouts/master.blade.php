<!DOCTYPE html>
@php 
 $site_setting=Helper::setting()[0];
@endphp
<html class="no-js" lang="zxx">
<head>
	@include('web.layouts.head')	
</head>
<body>
	@include('web.layouts.notification')
	<!-- Header -->
	@include('web.layouts.header')
	<!--/ End Header -->

	@yield('main-content')
	
	<!-- Footer -->
	@include('web.layouts.footer')
	<!-- / Footer -->
</body>
</html>