<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Electro - HTML Ecommerce Template</title>
        {{-- Komponen Style --}}
        @include('component.landing.style')
    </head>
	<body>
		{{-- Komponen Header --}}
        @include('component.landing.header')
        {{-- Komponen Navigasi --}}
        @include('component.landing.navigation')

        {{-- Komponen Konten --}}
        @yield('content')

		{{-- Komponen Footer --}}
        @include('component.landing.footer')
        {{-- Komponen Script --}}
        @include('component.landing.js')
	</body>
</html>
