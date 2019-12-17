<template>
	<div class="flex justify-between">
		<slot name="card1"/>
		<slot name="card2/"/>
	</div>
</template>

<script>
    export default {
        name: "DoubleCard"
    }
</script>

<style scoped>

</style>