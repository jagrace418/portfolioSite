<template>
	<image-card img-url="twisty.png">
		<template slot="title">Blender Projects</template>
		<template slot="content">
			<p>
				Sometimes it's nice to take a step away from the logical/analytical activities and do something more
				creative.
				I've been learning <a href="https://www.blender.org">Blender</a> for about a year now.
			</p>
		</template>
	</image-card>
</template>

<script>
    import ImageCard from "../base/ImageCard";

    export default {
        name: "Blender",
        components: {ImageCard}
    }
</script>

<style scoped>

</style>