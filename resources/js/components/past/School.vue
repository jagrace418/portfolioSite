<template>
	<div>
		<card class="mb-10">
			<template slot="title">School Projects</template>
			<template slot="body-simple">
				Here is a summary of all the different software projects I've worked on at ISU. Sadly most of these
				projects
				have been lost due to hard drive failure or lack of foresight that I may have wanted to revisit them
				eventually.
			</template>
			<template slot="body-full">
				<image-card img-url="rpg.jpg" class="mb-4">
					<template slot="title">RPG Dungeon Crawler</template>
					<template slot="content">
						<p>
							The dungeon crawler was a very intense semester learning C and C++. I started with very
							rudimentary knowledge of C and by the end of the semester was expected to produce a fully
							playable RPG dungeon crawler using the ncurses library.
							<br/><br/>
							This was a massive undertaking. I built a priority queue system to decide whose turn it was.
							I
							also created a map generator using a modified dijkstra's algorithm. Overall, this was my
							first
							solo large scale project and I really enjoyed the challenge.
							<br/><br/>
							My biggest mistake during this project was letting the professor convince me that using
							emacs
							for a text editor would be a good idea.
						</p>
					</template>
				</image-card>
				<image-card img-url="weight.jpg" class="mb-4">
					<template slot="title">ExerCYse</template>
					<template slot="content">
						<p>
							ExerCYse was an Android application developed in a team of 4. Our goal was to make an ISU
							specific gym companion app.
							<br/><br/>
							The final product allowed the user to create workout routines that consisted of a populated
							list
							of exercises. It even had a timer feature to encourage the user to keep a good pace
							throughout
							their workout routine. We also researched the on campus gyms and were able to have the floor
							plans included in the app. This also meant we could show the user how many machines of each
							type
							were available in the gym and where they were located.
							<br/><br/>
							The biggest challenge on this project was the sheer scope and lack of prior knowledge in app
							development. The first month was spent flushing out all the features we wanted to include
							and
							making sandbox apps to determine if we could implement the features.
							<br/><br/>
							Because of our heavy research in the beginning, the project ended up going surprisingly
							smooth
							throughout development.
						</p>
					</template>
				</image-card>
				<image-card img-url="angular.png" class="mb-4">
					<template slot="title">Web Apps</template>
					<template slot="content">
						<p>
							I took a class that was designed as an 'exposure class'. In this class I developed web
							applications using Angular.js, LAMP Stack, and React.js.
							<br/><br/>
							Each presented an initial learning curve of setting them up and understanding how they
							interact
							with the browser but overall it was fun trying multiple web technologies in a short span on
							time.
						</p>
					</template>
				</image-card>
				<image-card img-url="wrestler.png">
					<template slot="title">Sumo.io</template>
					<template slot="content">
						<p>
							The idea behind Sumo.io was a two person sumo wrestler online game. I worked in a team of 2
							to
							create the application. This was my first experience writing an online game.
							<br/><br/>
							Some challenges I encountered on this project was efficient teamwork. It took some
							discussion to
							convince my partner that using VCS was a good idea and would make development much easier.
							Once
							we started using Git we were both able to work on the project at once instead of sending
							each
							other zip files.
						</p>
					</template>
				</image-card>
			</template>
		</card>
		<card>
			<template slot="title">Senior Design</template>
			<template slot="body-simple">To wrap up my degree, the college requires I participate in senior design. This
				is a year long set of classes that are meant to be representative of using everything I have learned to
				come up with a solution to a tough problem.
			</template>
			<template slot="body-full">
				<div class="md:flex md:flex-wrap">
					<image-card img-url="simpleTree.jpg" class="md:w-1/2">
						<template slot="title">Goal</template>
						<template slot="content">
							<p>
								Our goal was to design and create a system that allows the user to string lights on any
								object they choose. They then should be able to use the system to calibrate where the
								lights
								are on the object and dynamically change them.
								<br/>
								This project involved a lot of Python and work with Raspberry Pis.
							</p>
						</template>
					</image-card>
					<image-card img-url="opencv.svg" class="md:w-1/2">
						<template slot="title">What was your contribution?</template>
						<template slot="content">
							<p>
								My main contribution to the project was the first phase of the light calibration. I was
								tasked
								to set up the inter-process communication and figure out how to detect LEDs and extract
								their
								coordinates in the image.
								<br/>
								I used OpenCV for the image processing. After the steep initial learning curve, this
								ended
								up
								being a really elegant solution.
							</p>
						</template>
					</image-card>
					<image-card img-url="python-logo.svg" class="md:w-1/2">
						<template slot="title">What did you learn?</template>
						<template slot="content">
							<p>
								The biggest take away from the project was the importance of Python virtual
								environments.
								We did not originally use them and ran into many issues with conflicting Python version
								installations.
								<br/>
								This project was also a great learning experience on the importance of documentation and
								team
								communication.
							</p>
						</template>
					</image-card>
					<image-card img-url="treeDemo.gif" class="md:w-1/2">
						<template slot="title">What was the result?</template>
						<template slot="content">
							In the beginning of the project we projected that we could have full image mapping done by
							the
							end
							of the year. But due to some setbacks passed down to us from the previous group we were
							unable
							to
							reach that goal. But we were still able to get to a very satisfactory point.
						</template>
					</image-card>
				</div>
			</template>
		</card>
	</div>
</template>

<script>
    import Card from "../base/Card";
    import ImageCard from "../base/ImageCard";

    export default {
        name: "School",
        components: {ImageCard, Card}
    }
</script>

<style scoped>

</style>