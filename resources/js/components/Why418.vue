<template>
	<card>
		<template slot="title">Why do you use 418?</template>
		<template slot="body-simple">It's fun</template>
		<template slot="body-full">
			<p>
				Sometimes I'll see things that make me smile, but one thing that made me laugh when I saw it was HTTP
				status code 418 "I'm a tea pot".
				It's an April Fool's joke from 1998 and some websites enjoy implementing it for a laugh.
			</p>
			<br/>
			<ul class="list-reset">
				<li>
					Check out the MDN reference <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418">here</a>.
				</li>
				<li>
					And here's an easter egg from <a href="https://www.google.com/teapot">Google</a>
				</li>
			</ul>
		</template>
	</card>
</template>

<script>
    import Card from "./base/Card";

    export default {
        name: "Why418",
        components: {Card}
    }
</script>

<style scoped>

</style>