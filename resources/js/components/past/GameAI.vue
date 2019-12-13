<template>
	<card>
		<template slot="title">Game AI</template>
		<template slot="body">
			<p>
				I love video games! Something that has always fascinated me is the computer I've played against in countless
				titles, modes, and styles.
				Since then I've wanted to understand how they think for two reasons:
			</p>
			<ul>
				<li>Can I make exploit them to win?</li>
				<li>Can I make them even smarter?</li>
			</ul>
		</template>
	</card>
</template>

<script>
	import Card from "../Card";
    export default {
        name: "GameAI",
        components: {Card}
    }
</script>

<style scoped>

</style>