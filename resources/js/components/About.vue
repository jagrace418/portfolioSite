<template>
	<card>
		<template slot="title">About Me</template>
		<template slot="mainImage">
			<a href="https://www.linkedin.com/in/jacobisu19/">
				<img src="/images/selfie.jpg" alt="Jake">
			</a>
		</template>
		<template slot="body-simple">
			My name is Jake and I'm a software engineer.
		</template>
		<template slot="body-full">
			<mini-card>
				<template slot="title">How did you get into software engineering?</template>
				<template slot="content">
					<p>
						Ever since I was young I would take things apart to see what's inside. When I was young, the
						local
						newspaper asked what I wanted to be when i grew up. I told them 'I want to be a sci-ventor' (My
						personal
						combination of scientist and inventor). All these years later, I'd say I did pretty good at
						meeting that
						goal.
						<br/>
						In high school I took a Java programming class. That was my first real exposure to software
						development.
						The final project was to create anything you wanted, so my partner and I created a Pac Man
						clone. This
						was also the start of my fascination with AI. I spent a lot of time reading how the original AI
						worked
						in the game and did my best to recreate it.
					</p>
				</template>
			</mini-card>
			<mini-card>
				<template slot="title">What languages do you know?</template>
				<template slot="content">
					<h4>Extremely Comfortable</h4>
					<p>
						These are languages I've been using for at least 3 years and feel confident that I can read and
						write
						just about anything with them.
					</p>
					<ul>
						<li>PHP</li>
						<li>Java</li>
						<li>JavaScript/HTML/CSS</li>
						<li>C#</li>
					</ul>
					<h4>Moderately Comfortable</h4>
					<p>
						These are languages I haven't used for extended periods of time but still feel confident I could
						pick them up and use them with very little difficulty.
					</p>
					<ul>
						<li>C</li>
						<li>C++</li>
						<li>Python</li>
						<li>Bash</li>
					</ul>
					<h4>Everything Else</h4>
					<p>
						The rest of these languages I have at least written a 'Hello World' in. Some for curiosity, some
						for little mini-projects. But I do not feel very comfortable with them and it would take some
						work to get to a point that I can do anything impressive with them.
					</p>
					<ul>
						<li>Haskell</li>
						<li>ASM</li>
						<li>Verilog</li>
						<li>R</li>
					</ul>
				</template>
			</mini-card>
			<mini-card>
				<template slot="title">Is that all you know?</template>
				<template slot="content">
					<p>
						No! I haven't even talked about the other frameworks and technologies I've been exposed to.
					</p>
					<h4>Most Used</h4>
					<p>
						Each of these are something I've done for work or are my go-to technologies when developing
						something for myself.
					</p>
					<ul>
						<li>Zend 2</li>
						<li>Composer</li>
						<li>MySQL</li>
						<li>Laravel</li>
					</ul>
					<h4>Previous Exposure</h4>
					<p>
						This is a catch-all for everything else I've been exposed to. I don't have huge familiarity with
						these but have at least been exposed to them and done something with them before.
					</p>
					<ul>
						<li>Angular.js 1</li>
						<li>React.js</li>
						<li>Node.js</li>
						<li>Docker</li>
						<li>ANTLR</li>
					</ul>
				</template>
			</mini-card>
			<mini-card>
				<template slot="title">What do you do for fun?</template>
				<template slot="content">
					<p>
						Most of my time the past few years has been spent on work or school. When I'm not doing either
						of those,
						I try to get outside and take in some fresh air and sunlight.
					</p>
					<ul>
						<li>Cook</li>
						<li>Read</li>
						<li>Write code</li>
						<li>Play video games</li>
						<li>Hike</li>
					</ul>
				</template>
			</mini-card>
			<mini-card>
				<template slot="title">Favorite...</template>
				<template slot="content">
					<h4>Video Games</h4>
					<ul>
						<li>Destiny 2</li>
						<li>Red Dead Redemption 2</li>
						<li>Hitman 2</li>
						<li>Cuphead</li>
					</ul>
					<br/>
					<h4>TV Shows</h4>
					<ul>
						<li>Mr Robot</li>
						<li>Dexter</li>
						<li>Workaholics</li>
						<li>Rick and Morty</li>
					</ul>
				</template>
			</mini-card>
		</template>
	</card>
</template>

<script>
    import Card from "./base/Card";
    import MiniCard from "./base/MiniCard";

    export default {
        name: "About",
        components: {MiniCard, Card}
    }
</script>

<style scoped>
	h4 {
		padding-top: 10px;
	}
</style>