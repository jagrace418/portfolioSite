<template>
	<div class="card">
		<div class="flex justify-between">
			<h1 class="font-normal text-3xl leading-none flex text-center">
				<slot name="title"/>
			</h1>
		</div>
		<div class="mt-4 text-center">
			<p>
				<slot name="body-simple"/>
			</p>
			<div class="mt-4">
				<slot name="body-full"/>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        name: "Card",

    }
</script>

<style scoped>

</style>