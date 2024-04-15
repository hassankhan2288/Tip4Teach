<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.layouts.head')
</head>
<body>

	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')

	@include('frontend.layouts.footer')

</body>
</html>
