<template>
	<div>
		<h1 class="font-normal text-3xl text-grey-darkest leading-none py-2">
			<slot name="title">
				Under Construction
			</slot>
		</h1>
		<p class="mt-4">
			<slot name="body">
				More details soon to come...
			</slot>
		</p>
	</div>
</template>

<script>
    export default {
        name: "Card"
    }
</script>

<style scoped>

</style>