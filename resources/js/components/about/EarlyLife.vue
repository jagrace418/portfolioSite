<template>
	<card>
		<template slot="title">Early Life</template>
		<template slot="body">
			<p>
				I was a child once, then I grew up and learned how to learn.
			</p>
			<ul>
				<li>I like to read books</li>
				<li>I like hiking</li>
			</ul>
		</template>
	</card>
</template>

<script>
	import Card from "../Card";
    export default {
        name: "EarlyLife",
        components: {Card}
    }
</script>

<style scoped>

</style>