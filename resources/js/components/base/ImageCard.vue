<template>
	<div class="card">
		<h3 align="left" class="whitespace-no-wrap">
			<slot name="title"/>
		</h3>
		<div class="flex justify-between items-center">
			<slot name="content"/>
			<img :src="imgUrl" alt="Image"/>
		</div>
	</div>
</template>

<script>
    export default {
        name: "SplitCard",
		props: {
            imgUrl: String,
			imgLocation: String,
		},
    }
</script>

<style scoped>

</style>