<template>
	<card>
		<template slot="title">Whoops! 404</template>
		<template slot="body-simple">You seem to have wandered into the abyss</template>
	</card>
</template>

<script>
    import Card from "./base/Card";

    export default {
        name: "NotFound",
        components: {Card}
    }
</script>

<style scoped>

</style>