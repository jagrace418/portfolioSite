<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jake's Portfolio</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body class="font-sans">
<div id="app">
	<div class="container px-8">
		<header class="py-6 mb-8">
			<h1>
				<img alt="jagrace" src="/images/jagraceLogo.svg">
			</h1>
		</header>
		<main class="flex flex-1">
			<aside class="w-64 pt-8">
				<section class="mb-8">
					<h5 class="uppercase font-bold mb-4 text-base">Main</h5>
					<ul class="list-reset">
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/" exact>Home</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/me" exact>Me</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/why" exact>Why 418?</router-link>
						</li>
					</ul>
				</section>
				<section class="mb-8">
					<h5 class="uppercase font-bold mb-4 text-base">Current Work</h5>
					<ul class="list-reset">
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/laravel">Laravel</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/unity">Unity3D</router-link>
						</li>
					</ul>
				</section>
				<section class="mb-8">
					<h5 class="uppercase font-bold mb-4 text-base">Past Work</h5>
					<ul class="list-reset">
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/senior">Senior Design Project</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/ai">Game AI</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/blender">Blender Renders</router-link>
						</li>
					</ul>
				</section>
			</aside>
			<div class="primary">
				<router-view></router-view>
			</div>
		</main>

		<hr>
	</div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
