<template>
	<card>
		<template slot="title">About Me</template>
		<template slot="body">I'm a software engineer with an addiction to knowledge.</template>
	</card>
</template>

<script>
	import Card from "./Card";
    export default {
        name: "About",
        components: {Card}
    }
</script>

<style scoped>

</style>