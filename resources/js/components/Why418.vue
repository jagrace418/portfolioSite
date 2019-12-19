<template>
	<image-card img-url="/images/tea.jpg">
		<template slot="title">Why do you use 418?</template>
		<template slot="content">
			<div class="flex flex-col">
				<p>
					Sometimes I'll see things that make me smile, but one thing that made me laugh when I saw it was HTTP
					status code 418 "I'm a tea pot".
					It's an April Fool's joke from 1998 and some websites enjoy implementing it for a laugh.
				</p>

				<ul class="list-reset">
					<li>
						Check out the MDN reference <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418">here</a>.
					</li>
					<li>
						And here's an easter egg from <a href="https://www.google.com/teapot">Google</a>
					</li>
				</ul>
			</div>
		</template>
	</image-card>
</template>

<script>
	import ImageCard from "./base/ImageCard";
    export default {
        name: "Why418",
		components: {ImageCard}
    }
</script>

<style scoped>

</style>