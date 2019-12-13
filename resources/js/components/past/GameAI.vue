<template>
	<card>
		<template slot="title">Game AI</template>
		<template slot="mainImage">
			<img width="200" height="200" src="/images/othello.gif" alt="Othello">
		</template>
		<template slot="body-simple">
			I love video games! Something that has always fascinated me is the computer I've played against in countless
			titles, modes, and styles.
		</template>
		<template slot="body-full">
			<h4>I'm interested in Game AI for two reasons:</h4>
			<ul class="list-reset">
				<li>Can I make exploit them to win?</li>
				<li>Can I make them even smarter?</li>
			</ul>
			<br/>
			<h4>Some AIs I've already implemented</h4>
			<ul class="list-reset">
				<li>Checkers</li>
				<li>Tic Tac Toe</li>
				<li>Chess</li>
				<li>3D game AI using Unity Nav-mesh</li>
			</ul>
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";

    export default {
        name: "GameAI",
        components: {Card}
    }
</script>

<style scoped>

</style>