<template>
	<card>
		<template slot="title">Home</template>
		<template slot="mainImage">

		</template>
		<template slot="body-simple">Welcome to my website!</template>
		<template slot="body-full">
			<p>
				Take a look around with the tabs on the left.
			</p>
		</template>
	</card>
</template>

<script>
    import Card from "./base/Card";

    export default {
        name: "Home",
        components: {Card}
    }
</script>

<style scoped>

</style>