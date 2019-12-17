<template>
	<div class="card mb-4">
		<div class="flex justify-between items-center mb-3">
			<h3>
				<slot name="title"/>
			</h3>
			<div class="mr-4">
				<slot name="title-image"/>
			</div>
		</div>
		<slot name="content"/>
	</div>
</template>

<script>
    export default {
        name: "MiniCard"
    }
</script>

<style scoped>
	img{
		max-width: 400px;
		height: auto;
	}
	.img-small{
		max-width: 100px;
	}
</style>