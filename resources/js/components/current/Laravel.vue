<template>
	<card>
		<template slot="title">Laravel</template>
		<template slot="body-simple">
			Laravel is my new web developer addiction.
			It does what I ask it to do and I don't have to jump through hoops to do it.
		</template>
		<template slot="body-full">
			This entire website was written in Laravel + Vue.js. It really didn't take that long to get off the ground
			and looking great. I still have much to learn about Laravel but am very excited.
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";

    export default {
        name: "Laravel",
        components: {Card}
    }
</script>

<style scoped>

</style>