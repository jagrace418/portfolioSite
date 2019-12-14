<template>
	<div class="card mb-4">
		<h3 class="mb-3">
			<slot name="title"/>
		</h3>
		<slot name="content"/>
	</div>
</template>

<script>
    export default {
        name: "MiniCard"
    }
</script>

<style scoped>

</style>