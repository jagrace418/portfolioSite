<template>
	<card>
		<template slot="title">Laravel</template>
		<template slot="body">
			Laravel is my new web developer addiction.
			It does what I ask it to do and I don't have to jump through hoops to do it.
		</template>
	</card>
</template>

<script>
	import Card from "../Card";
    export default {
        name: "Laravel",
        components: {Card}
    }
</script>

<style scoped>

</style>