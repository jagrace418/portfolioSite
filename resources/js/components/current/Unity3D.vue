<template>
	<card>
		<template slot="title">Unity3D</template>
		<template slot="mainImage">
			<a href="https://unity.com">
				Pending permission to use Unity Logo
			</a>
		</template>
		<template slot="body-simple">
			I play video games. Why not code some?
		</template>
		<template slot="body-full">
			<p>
				I've been conducting experiments with Unity3D to see what kind of limits Unity can take me to and to
				start building simple game components that I can later drop in on a game I'm developing and have certain
				functionality already working the way I want it.
			</p>
			<br/>
			<h4>A few examples</h4>
			<ul>
				<li>FPS character</li>
				<li class="list-reset">
					<ul>
						<li>Camera functionality</li>
						<li>Body (arm and hand) models and animations</li>
						<li>Weapons with bullet physics</li>
						<li>Climbing Mechanics</li>
					</ul>
				</li>
				<li>Audio Manager</li>
				<li>Scene Builder</li>
			</ul>
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