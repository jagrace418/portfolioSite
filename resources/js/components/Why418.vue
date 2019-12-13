<template>
	<card>
		<template slot="title">Why do you use 418?</template>
		<template slot="body">
			I have been a web developer for a few years now.
			Sometimes I'll see things that make me smile, but one thing that made me laugh when I saw it was the official
			MDN HTTP status code 418 "I'm a tea pot".
			It's an April Fool's joke from 1998 and some websites enjoy implementing it for a laugh.
			Check out the MDN reference <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418">here</a>
		</template>
	</card>
</template>

<script>
	import Card from "./Card";
    export default {
        name: "Why418",
        components: {Card}
    }
</script>

<style scoped>

</style>