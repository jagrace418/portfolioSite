<template>
	<div>
		<image-card img-url="laravel-logo.png" class="mb-10">
			<template slot="title">Laravel</template>
			<template slot="content">
				Laravel is my new web developer addiction.
				It does what I ask it to do and I don't have to jump through hoops to do it.
				This entire website was written in Laravel + Vue.js. It really didn't take that long to get off the
				ground
				and looking great. I still have much to learn about Laravel but am very excited.
			</template>
		</image-card>
		<card>
			<template slot="title">What makes this site special?</template>
			<template slot="body-full">
				As you navigate around this site, notice that the browser is not refreshing. This site is an SPA (Single
				page application). I wanted to try out Laravel/Vue SPA's and found this to be a great use case for it.
			</template>
		</card>
	</div>

</template>

<script>
    import ImageCard from "../base/ImageCard";
    import Card from "../base/Card";

    export default {
        name: "Laravel",
        components: {Card, ImageCard}
    }
</script>

<style scoped>

</style>