<template>
	<div class="card">
		<h3 align="left" class="whitespace-no-wrap mb-2">
			<slot name="title"/>
		</h3>
		<div class="flex items-center">
			<slot class="flex-1" name="content"/>
			<div class="flex-2">
				<img class="rounded-full" :src="imgUrl" alt="Image"/>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        name: "ImageCard",
		props: {
            imgUrl: String,
		},
    }
</script>

<style scoped>

</style>