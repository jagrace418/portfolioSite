<template>
	<card>
		<template slot="title">College Life</template>
		<template slot="body">
			I attended <a href="https://www.iastate.edu">Iowa State University</a> from 2015 - 2019.
		</template>
	</card>
</template>

<script>
	import Card from "../Card";
    export default {
        name: "CollegeLife",
        components: {Card}
    }
</script>

<style scoped>

</style>