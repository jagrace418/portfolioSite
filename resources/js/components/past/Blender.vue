<template>
	<card>
		<template slot="title">Blender Projects</template>
		<template slot="body-simple">
			Sometimes it's nice to take a step away from the logical/analytical activities and do something more
			creative.
			I've been learning <a href="https://www.blender.org">Blender</a> for about a year now.
		</template>
		<template slot="body-full">
			Soon to come, my favorite renders so far


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