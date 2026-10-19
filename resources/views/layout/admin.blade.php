<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Electro - Admin Dashboard</title>
        {{-- Komponen Style --}}
        @include('component.admin.style')
    </head>
	<body>
		{{-- Komponen Header --}}
        @include('component.admin.header')
        {{-- Komponen Sidebar --}}
        @include('component.admin.sidebar')

        {{-- Komponen Konten --}}
        <main id="admin-content">
            @yield('content')
        </main>

		{{-- Komponen Footer --}}
        @include('component.admin.footer')
        {{-- Komponen Script --}}
        @include('component.admin.js')
        {{-- Script tambahan per halaman --}}
        @stack('scripts')
	</body>
</html>
