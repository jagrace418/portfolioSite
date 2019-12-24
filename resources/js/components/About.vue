<template>
	<div class="card mb-10">
		<div class="flex flex-col items-center mb-4">
			<h3>About Me</h3>
			<p>My name is Jake and I'm a software engineer</p>
			<a href="https://www.linkedin.com/in/jacobisu19/">
				<img class="rounded-full" src="/images/selfie.jpg" alt="Jake">
			</a>
		</div>

		<div class="md:flex md:flex-wrap">
			<image-card class="md:w-1/2" img-url="/images/isu.gif">
				<template slot="title">What education do you have?</template>
				<template slot="content">
					B.A. Software Engineering <br/> I.S.U. <br/> Ames, IA <br/> Graduated Dec. 2019 <br/>
					General Business Minor
				</template>
			</image-card>
			<card class="md:w-1/2 p-2">
				<template slot="title">
					How did you get into software engineering?
				</template>
				<template slot="body-full">
					<p>
						Ever since I was young I would take things apart to see what's inside. One year, the local
						newspaper asked what I wanted to be when i grew up. I told them 'I want to be a sci-ventor' (My
						personal combination of scientist and inventor).
						<br/>
						In high school I took a Java programming class. That was my first real exposure to software
						development. The final project was to create anything you wanted, so my partner and I created a
						Pac Man clone. This was also the start of my fascination with AI. I spent a lot of time reading
						how the original AI worked in the game and did my best to recreate it.
					</p>
				</template>
			</card>
			<card class="md:w-1/2 p-2">
				<template slot="title">What languages do you know?</template>
				<template slot="body-full">
					<div class="flex flex-wrap">
						<div class="lg:w-1/2 mb-4">
							<h4>Extremely Comfortable</h4>
							<ul>
								<li>PHP</li>
								<li>Java</li>
								<li>JavaScript/ HTML/CSS</li>
								<li>C#</li>
							</ul>
						</div>
						<div class="lg:w-1/2 mb-4">
							<h4>Moderately Comfortable</h4>
							<ul>
								<li>C</li>
								<li>C++</li>
								<li>Python</li>
								<li>Bash</li>
							</ul>
						</div>
						<div class="lg:w-1/2">
							<h4>Everything Else</h4>
							<ul>
								<li>Haskell</li>
								<li>ASM</li>
								<li>Verilog</li>
								<li>R</li>
							</ul>
						</div>
					</div>
				</template>
			</card>
			<card class="md:w-1/2 p-2">
				<template slot="title">Is that all you know?</template>
				<template slot="body-simple">No! There are so many other technologies I work with or have been exposed
					to.
				</template>
				<template slot="body-full">
					<div class="flex flex-wrap">
						<div class="lg:w-1/2 mb-4">
							<h4>Regular Use</h4>
							<ul>
								<li>Zend 2</li>
								<li>Composer</li>
								<li>MySQL</li>
								<li>Laravel</li>
								<li>PHPStorm</li>
								<li>Git</li>
							</ul>
						</div>
						<div class="lg:w-1/2">
							<h4>Honorable Mentions</h4>
							<ul>
								<li>Angular.js 1</li>
								<li>React.js</li>
								<li>Node.js</li>
								<li>Docker</li>
								<li>ANTLR</li>
							</ul>
						</div>
					</div>
				</template>
			</card>
			<card class="md:w-1/2 p-2">
				<template slot="title">What do you do for fun?</template>
				<template slot="body-simple">
					Most of my time the past few years has been spent on work or school. When I'm not doing either
					of those,
					I try to get outside and take in some fresh air and sunlight.
				</template>
				<template slot="body-full">
					<ul>
						<li>Cook</li>
						<li>Read</li>
						<li>Write code</li>
						<li>Play video games</li>
						<li>Hike</li>
					</ul>
				</template>
			</card>
			<card class="lg:w-1/2 p-2">
				<template slot="title">Favorite...</template>
				<template slot="body-full">
					<div class="flex flex-wrap">
						<div>
							<h4>Video Games</h4>
							<ul>
								<li>Destiny 2</li>
								<li>Red Dead Redemption 2</li>
								<li>Hitman 2</li>
								<li>Cuphead</li>
							</ul>
						</div>
						<div>
							<h4>TV Shows</h4>
							<ul>
								<li>Mr Robot</li>
								<li>Dexter</li>
								<li>Workaholics</li>
								<li>Rick and Morty</li>
							</ul>
						</div>
					</div>
				</template>
			</card>

		</div>
	</div>
</template>

<script>
    import Card from "./base/Card";
    import ImageCard from "./base/ImageCard";

    export default {
        name: "About",
        components: {ImageCard, Card}
    }
</script>

<style scoped>
	card {
		margin: 5px 5px 10px;
	}
</style>