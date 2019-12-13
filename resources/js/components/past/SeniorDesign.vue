<template>
	<card>
		<template slot="title">Senior Design Project</template>
		<template slot="mainImage">
			<img src="/images/treeDemo.gif" alt="Tree Demo">
		</template>
		<template slot="body-simple">
			During my senior year I was part of a team that developed an interesting holiday project.
		</template>
		<template slot="body-full">
			<p>
				Our goal was to design and create a system that allows the user to string lights on any object they
				choose.
				They then should be able to use the system to calibrate where the lights are on the object and
				dynamically
				change them.
				<br/>
				This project involved a lot of Python and work with Raspberry Pis.
			</p>
			<br/>
			<h4>What was your contribution?</h4>
			<br/>
			<p>
				My main contribution to the project was the first phase of the light calibration. I was tasked to set up
				the
				inter-process communication and figure out how to detect LEDs and extract their coordinates in the
				image.
				<br/>
				I used OpenCV for the image processing. After the steep initial learning curve, this ended up being a
				really elegant solution.
			</p>
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";

    export default {
        name: "SeniorDesign",
        components: {Card}
    }
</script>

<style scoped>

</style>