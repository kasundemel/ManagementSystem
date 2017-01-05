<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href='{{ URL::asset("css/app.css") }}'>
		@yield('styles')
	</head>
	<body>
	@include('partials.header')

	<br><br>
	@yield('content')

	<script type="text/javascript" src='{{ URL::asset("js/app.js") }}'></script>
	@yield('scripts')
	</body>
</html>