<template>
	<div class="card mb-4">
		<h3 align="left">
			<slot name="title"/>
		</h3>
		<div class="flex justify-between items-center">
			<slot name="content"/>
			<slot name="image"/>
		</div>
	</div>
</template>

<script>
    import Card from "./Card";

    export default {
        name: "SplitCard",
        components: {Card}
    }
</script>

<style scoped>

</style>