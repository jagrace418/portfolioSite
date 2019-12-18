<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jake's Portfolio</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body class="font-sans theme-dark">
<div id="app" class="bg-page">
	<div class="container px-8">
		<header class="py-6 flex justify-between">
			<h1 class="text-black">
				<a href="/">jagrace418</a>
			</h1>
			<theme-switcher></theme-switcher>
		</header>
		<main class="flex flex-1">
			<side-nav
					:links="[
					{'id': 0, 'text': 'Home', 'url': '/'},
					{'id': 1, 'text': 'Me', 'url': '/me'},
					{'id': 2, 'text': 'Why 418?', 'url': '/why'},
					{'id': 3, 'text': 'Laravel', 'url': '/laravel'},
					{'id': 4, 'text': 'Unity', 'url': '/unity'},
					{'id': 5, 'text': 'School', 'url': '/school'},
					{'id': 6, 'text': 'Senior Design', 'url': '/senior'},
					{'id': 7, 'text': 'Games and AI', 'url': '/ai'},
					{'id': 8, 'text': 'Blender', 'url': '/blender'},
					]"></side-nav>
			<div class="primary w-3/4">
				<router-view></router-view>
			</div>
		</main>
	</div>
</div>
<script src="/js/app.js"></script>
</body>

</html>