<template>
	<image-card img-url="/images/laravel-logo.png" class="mb-10">
		<template slot="title">Laravel</template>
		<template slot="content">
			Laravel is my new web developer addiction.
			It does what I ask it to do and I don't have to jump through hoops to do it.
			This entire website was written in Laravel + Vue.js. It really didn't take that long to get off the ground
			and looking great. I still have much to learn about Laravel but am very excited.
		</template>
	</image-card>
</template>

<script>
	import ImageCard from "../base/ImageCard";

    export default {
        name: "Laravel",
		components:{ImageCard}
    }
</script>

<style scoped>

</style>