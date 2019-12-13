<template>
	<card>
		<template slot="title">Unity3D</template>
		<template slot="body">
			<p>
				I play video games. Why not code one?
				I've been conducting experiments with Unity3D to see what kind of limits Unity can take me to and to start
				building simple game components that I can later drop in on a game I'm developing and have certain
				functionality
				already working the way I want it.
				A few examples
			</p>
			<ul>
				<li>FPS character</li>
				<ul>
					<li>Camera functionality</li>
					<li>Body (aka arms and hands) Models and animations</li>
					<li>Weapons with bullet physics</li>
					<li>Climbing Mechanics</li>
				</ul>
				<li>Audio Manager</li>
				<li>Scene Builder</li>
			</ul>
		</template>
	</card>
</template>

<script>
	import Card from "../Card";
    export default {
        name: "Unity3D",
        components: {Card}
    }
</script>

<style scoped>

</style>