<!DOCTYPE html>
<html>
<head>
	<title>Laravel Project</title>
	<script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
	<div class="header">This is header</div>

	@yield('content')

	<div class="footer">This is footer</div>
</body>
</html>