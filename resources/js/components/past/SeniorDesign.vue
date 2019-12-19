<template>
	<div class="card">
		<h3>Senior Design</h3>
		<div class="md:flex md:flex-wrap">
			<image-card img-url="/images/simpleTree.jpg" class="md:w-1/2">
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
			</image-card>
			<image-card img-url="/images/opencv.svg" class="md:w-1/2">
				<template slot="title">What was your contribution?</template>
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
			</image-card>
			<image-card img-url="/images/python-logo.svg" class="md:w-1/2">
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
			</image-card>
			<image-card img-url="/images/treeDemo.gif" class="md:w-1/2">
				<template slot="title">What was the result?</template>
				<template slot="content">
					In the beginning of the project we projected that we could have full image mapping done by the end
					of the year. But due to some setbacks passed down to us from the previous group we were unable to
					reach that goal. But we were still able to get to a very satisfactory point.
				</template>
			</image-card>
		</div>
	</div>
</template>

<script>
    import Card from "../base/Card";
    import ImageCard from "../base/ImageCard";

    export default {
        name: "SeniorDesign",
        components: {ImageCard, Card}
    }
</script>

<style scoped>

</style>