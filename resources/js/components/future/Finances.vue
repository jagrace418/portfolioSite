<template>
	<card>
		<template slot="title">Financial Manager Application</template>
		<template slot="body">
			Financial planning can be difficult. Tracking your spending feels like such a chore.
			And then tax season comes around and you have to dig up a bunch of paperwork and spend more time than you want to get your tax returns.
			What if there was an application that made all this pain go away?
			I am in the early planning stages of building an open source financial management application.
			It will not link to banks or credit cards, because that can be dangerous.
			So it will need a efficient way to gather your financial data and then aggregate and display it back in a nice easy to understand way.
			Are you making profits? Are you spending more than you make?
			This app is here to help.
		</template>
	</card>
</template>

<script>
	import Card from "../Card";
    export default {
        name: "Finances",
        components: {Card}
    }
</script>

<style scoped>

</style>