<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full min-h-full">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jake's Portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157166305-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-157166305-1');
	</script>

</head>
<body class="font-sans theme-dark text-default h-full min-h-full">
<div id="app" class="bg-page h-auto min-h-full">
	<div class="container px-8">
		<header class="py-6 flex justify-between">
			<h1>
				<a class="text-default" href="/">jagrace418</a>
			</h1>
			<theme-switcher></theme-switcher>
		</header>
		<main class="flex flex-1">
			<side-nav
					:links="[
					{'text': 'Home', 'url': '/'},
					{'text': 'Me', 'url': '/me'},
					{'text': 'School', 'url': '/school'},
					{'text': 'Work', 'url':'/work'},
					{'text': 'Laravel', 'url': '/laravel'},
					{'text': 'Unity', 'url': '/unity'},
					{'text': 'Games and AI', 'url': '/ai'},
					{'text': 'Blender', 'url': '/blender'},
					{'text': 'Why 418?', 'url': '/why'},
					]"></side-nav>
			<div class="primary w-3/4">
				<router-view></router-view>
			</div>
		</main>
	</div>
</div>
<script src="js/app.js"></script>
</body>

</html>