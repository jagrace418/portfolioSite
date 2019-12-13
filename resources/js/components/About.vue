<template>
	<card>
		<template slot="title">About Me</template>
		<template slot="mainImage">
			<img src="/images/selfie.jpg" alt="Jake">
		</template>


		<template slot="body-simple">
			My name is Jake and I'm a software engineer.
		</template>
		<template slot="body-full">
			<div>
				<p>
					I am a software engineer/developer/enthusiast that always wants to figure out how things work.
				</p>
			</div>
			<br/>
			<h4>How did you get into software engineering?</h4>
			<p>
				Ever since I was young I would take things apart to see what's inside. When I was young, the local
				newspaper asked what I wanted to be when i grew up. I told them 'I want to be a sci-ventor' (My personal
				combination of scientist and inventor). All these years later, I'd say I did pretty good at meeting that
				goal.
				<br/>
				In high school I took a Java programming class. That was my first real exposure to software development.
				The final project was to create anything you wanted, so my partner and I created a Pac Man clone. This
				was also the start of my fascination with AI. I spent a lot of time reading how the original AI worked
				in the game and did my best to recreate it.
			</p>
			<br/>
			<h4>What do you do for fun?</h4>
			<p>
				Most of my time the past few years has been spent on work or school. When I'm not doing either of those,
				I try to get outside and take in some fresh air and sunlight.
			</p>
			<br/>
			<h4>Favorite Video Games</h4>
			<ul class="list-reset">
				<li>Destiny 2</li>
				<li>Red Dead Redemption 2</li>
				<li>Hitman 2</li>
			</ul>
			<br/>
			<h4>Favorite TV Shows</h4>
			<ul class="list-reset">
				<li>Mr Robot</li>
				<li>Dexter</li>
				<li>Workaholics</li>
				<li>Rick and Morty</li>
			</ul>

		</template>
	</card>
</template>

<script>
    import Card from "./base/Card";

    export default {
        name: "About",
        components: {Card}
    }
</script>

<style scoped>

</style>