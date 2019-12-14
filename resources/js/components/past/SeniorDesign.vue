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
			<mini-card>
				<template slot="title">Goal</template>
				<template slot="content">
					<p>
						Our goal was to design and create a system that allows the user to string lights on any object
						they
						choose.
						They then should be able to use the system to calibrate where the lights are on the object and
						dynamically
						change them.
						<br/>
						This project involved a lot of Python and work with Raspberry Pis.
					</p>
				</template>
			</mini-card>
			<mini-card>
				<template slot="title">What was your contribution?</template>
				<template slot="content">
					<p>
						My main contribution to the project was the first phase of the light calibration. I was tasked
						to set up
						the
						inter-process communication and figure out how to detect LEDs and extract their coordinates in
						the
						image.
						<br/>
						I used OpenCV for the image processing. After the steep initial learning curve, this ended up
						being a
						really elegant solution.
					</p>
				</template>
			</mini-card>
			<mini-card>
				<template slot="title">What did you learn?</template>
				<template slot="content">
					<p>
						The biggest take away from the project was the importance of Python virtual environments.
						We did not originally use them and ran into many issues with conflicting Python version
						installations.
						<br/>
						This project was also a great learning experience on the importance of documentation and team
						communication.
					</p>
				</template>
			</mini-card>
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";
    import MiniCard from "../base/MiniCard";

    export default {
        name: "SeniorDesign",
        components: {MiniCard, Card}
    }
</script>

<style scoped>

</style>