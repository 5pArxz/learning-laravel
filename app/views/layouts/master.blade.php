<!doctype html>
<html>
<head>
	<title>Tasks</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<style>
	.error { color: red; font-size: .8em; font-style: italic; }
	li img { margin-right: 1em; }
	.completed { background-color: #8acc6e; }
	#task-update-form { position: absolute; top: 1em; right: 1em; }	
	</style>
</head>
<body>
	<div class="container col-md-12">
		@yield('content')
	</div>
</body>
</html>