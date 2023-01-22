<!-- Meta Tag -->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="{{$site_setting->meta_description}}">
<meta name="keyword" content="{{$site_setting->meta_keywords}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Title Tag  -->
<!-- <title>@yield('title')</title> -->
<title>{{$site_setting->site_title}}</title>
<link rel="manifest" href="site.webmanifest">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{$site_setting->photo}}">

<!-- CSS here -->
<link rel="stylesheet" href="{{asset('web/css/meanmenu.css')}}">
<link rel="stylesheet" href="{{asset('web/css/style.css')}}">
<link rel="stylesheet" href="{{asset('web/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('web/css/custom.css')}}">