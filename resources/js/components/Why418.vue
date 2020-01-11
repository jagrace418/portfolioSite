<template>
	<image-card img-url="tea.jpg">
		<template slot="title">Why do you use 418?</template>
		<template slot="content">
			<div class="flex flex-col">
				<p>
					HTTP 418 is an April Fool's joke from 1998.
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