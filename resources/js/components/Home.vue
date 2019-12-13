<template>
	<card>
		<template slot="title">Home</template>
		<template slot="body">Welcome to my website</template>
	</card>
</template>

<script>
	import Card from "./Card";
    export default {
        name: "Home",
        components: {Card}
    }
</script>

<style scoped>

</style>