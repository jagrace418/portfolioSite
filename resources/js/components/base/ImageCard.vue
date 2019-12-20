<template>
	<div class="card">
		<h3 class="text-left mb-2">
			<slot name="title"/>
		</h3>
		<div class="flex items-center  flex-col">
			<slot class="flex-1" name="content"/>
			<div class="flex-2 max-w-2xs md:max-w-xs">
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