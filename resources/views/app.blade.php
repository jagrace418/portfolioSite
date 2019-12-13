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
	<div class="container mx-auto">
		<header class="py-6 mb-8">
			<h1>
				<img alt="jagrace" src="/images/jagraceLogo.svg">
			</h1>
		</header>
		<main class="flex">
			<aside class="w-1/5">
				<section class="mb-8">
					<ul class="list-reset">
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/" exact>Home</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/" exact>Why 418?</router-link>
						</li>
					</ul>
				</section>
				<section class="mb-8">
					<h5 class="uppercase font-bold mb-4">About</h5>
					<ul class="list-reset">
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/early">Early Life</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/college">College Life</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/future">Future Life</router-link>
						</li>
					</ul>
				</section>
				<section class="mb-8">
					<h5 class="uppercase font-bold mb-4">Current Work</h5>
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
					<h5 class="uppercase font-bold mb-4">Past Work</h5>
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
				<section class="mb-8">
					<h5 class="uppercase font-bold mb-4">Future Work</h5>
					<ul class="list-reset">
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/finances">Financial Manager App</router-link>
						</li>
						<li class="text-sm leading-loose">
							<router-link class="text-black" to="/vr">VR Games</router-link>
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
