<template>
	<card>
		<template slot="title">Home</template>
		<template slot="mainImage">

		</template>
		<template slot="body-simple">Welcome to my website!</template>
		<template slot="body-full">
			<p>
				Take a look around with the tabs on the left.
				<br/><br/>
				There is a theme selector available in the upper right for those who don't like dark mode as much as I
				do.
				<br/><br/>
				The source code to this site is hosted on my <a href="https://github.com/jagrace418">Github</a> along
				with some other projects of mine.
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