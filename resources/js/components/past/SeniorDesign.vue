<template>
	<card>
		<template slot="title">Senior Design</template>
		<template slot="mainImage">
			<img src="/images/simpleTree.jpg" alt="Tree Demo">
		</template>
		<template slot="body-full">
			<div class="flex justify-between">
				<split-card class="mr-4">
					<template slot="image">
						<img alt="Tree Demo" src="/images/treeDemo.gif"/>
					</template>
				</split-card>
				<mini-card>
					<template slot="title">Goal</template>
					<template slot="content">
						<p>
							Our goal was to design and create a system that allows the user to string lights on any
							object they choose. They then should be able to use the system to calibrate where the lights
							are on the object and dynamically change them.
							<br/>
							This project involved a lot of Python and work with Raspberry Pis.
						</p>
					</template>
				</mini-card>
			</div>
			<div class="flex justify-between">
				<mini-card class="mr-4">
					<template slot="title">What was your contribution?</template>
					<template slot="title-image">
						<img class="img-small" src="/images/opencv.svg" alt="opencv"/>
					</template>
					<template slot="content">
						<p>
							My main contribution to the project was the first phase of the light calibration. I was tasked
							to set up the inter-process communication and figure out how to detect LEDs and extract their
							coordinates in the image.
							<br/>
							I used OpenCV for the image processing. After the steep initial learning curve, this ended up
							being a really elegant solution.
						</p>
					</template>
				</mini-card>
				<mini-card>
					<template slot="title">What did you learn?</template>
					<template slot="title-image">
						<img class="img-small" src="/images/python-logo.svg" alt="opencv"/>
					</template>
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
			</div>
		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";
    import MiniCard from "../base/MiniCard";
    import SplitCard from "../base/ImageCard";

    export default {
        name: "SeniorDesign",
        components: {SplitCard, MiniCard, Card}
    }
</script>

<style scoped>

</style>