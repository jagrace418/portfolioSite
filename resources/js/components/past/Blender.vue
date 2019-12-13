<template>
	<card>
		<template slot="title">Blender Projects</template>
		<template slot="mainImage">
			<a href="http://www.blender.org">
				<img width="200" height="200" src="/images/blender_logo_socket.png" alt="Blender">
			</a>
		</template>
		<template slot="body-simple">
			Sometimes it's nice to take a step away from the logical/analytical activities and do something more
			creative.
			I've been learning <a href="https://www.blender.org">Blender</a> for about a year now.
		</template>
		<template slot="body-full">
			Soon to come, my favorite renders so far.
			<img src="/images/twisty.png" alt="Render0">
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";

    export default {
        name: "Blender",
        components: {Card}
    }
</script>

<style scoped>

</style>