<template>
	<card class="mb-10">
		<template slot="title">Unity3D</template>
		<template slot="body-simple">
			I play video games. Why not program them?
		</template>
		<template slot="body-full">
			<div class="flex flex-col">
				<p>
					I've been conducting experiments with Unity3D to see what kind of limits Unity can take me to and to
					start building simple game components that I can later drop into a game I'm developing to reduce the
					number of things I need to build from scratch when I make games.
				</p>
				<div>
					<h4>A few examples</h4>
					<p>Coming soon... <br/>
						Come back later and I'll have some more content here</p>
				</div>
			</div>
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";

    export default {
        name: "Unity3D",
        components: {Card}
    }
</script>

<style scoped>

</style>