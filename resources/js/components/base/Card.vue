<template>
	<div class="card">
		<div class="flex justify-between">
			<h1 class="font-normal text-3xl leading-none">
				<slot name="title">
					Under Construction
				</slot>
			</h1>
			<slot name="mainImage"/>
		</div>
		<div class="mt-4">
			<p>
				<slot name="body-simple" class="text-center">
					More details soon to come...
				</slot>
			</p>
			<div class="mt-4">
				<slot name="body-full" class="text-center"/>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        name: "Card",
        computed: {
            hasImageSlot() {
                return this.$slots.mainImage;
            }
        }
    }
</script>

<style scoped>

</style>