<template>
	<card class="mb-10">
		<template slot="title">Work Experience</template>
		<template slot="body-simple">
			I have only had a few jobs in my life. This is because once I get a job, I stick around. I started working
			at Hy-Vee as soon as I was eligible to work and didn't stop until I left for college. After that I worked
			for the school for a majority of my time in college.
		</template>
		<template slot="body-full">
			<image-card img-url="zend.png" class="mb-4">
				<template slot="title">ISU Webdev</template>
				<template slot="content">
					<p>
						I worked for the Iowa State web development department as a PHP developer for 2 years. It was a
						great time and an even better learning experience. Everything I learned in school was finally
						put to the test.
						<br/>
						There are a few things I did while working at ISU webdev that I am most proud of. The first is
						when I was tasked to improve the quality of an existing site. And the second was a tool I
						created to help future developers in the department.
						<br/>
						Toward the start of my time here, I was hungry for work. I had finished all the training
						including completing a few small projects and was ready to jump into something bigger. That's
						when I was told there was a site under development that was having issues loading on the stage
						environment and my job was to fix it. After some investigation I found that the pages were
						loading slow due to an outrageous amount of SQL queries being run. After deeper investigation I
						realized it was a two part problem. The page that was loading slow had a large result table on
						it, this table had thousands of results and each result was an aggregation of different
						connected entities. My investigation had uncovered that somewhere between 5-10 queries were
						being sent, per table row. It ended up being over 30,000 SQL queries sent.
						<br/>
						To fix it, I started by using join statements and grabbing all the relevant data ahead of time
						in the initial table query. This on it's own was a huge improvement and resulted in the page not
						timing out anymore, but I could do better. After some further searching and reading some
						documentation on Doctrine, I found that the ORM was 'lazy loading' the table. This is sometimes
						a useful feature but in this case it was causing it to not collect all the data I told it I
						wanted and instead waited until it was needed to be requested. The real problem with this is
						that it was sending these requests per table row instead of per page. So after turning off the
						lazy loading the page loaded in under 5 seconds and was under 10 queries.
						<br/>
						The other big thing I did while at webdev was a utility class that helped me and will continue
						to help future developers at the department. A majority of our work at webdev involved creating,
						editing and displaying 'something'. Traditionally all entity views are done by hand. There is no
						built in Zend view helper that handles displaying objects in a friendly way.
						<br/>
						One day while creating the same general table-structured view for a project that I had made
						similar ones many times before, it dawned on me that I could be using a utility class to render
						this view for me. I cleared the mini-project with my mentor and got to work. The idea was to be
						able to tell the render what and how I want to render an object, and then when the time comes I
						should be able to render the object in a line or two instead of 100. A week later I had done it,
						a fully customizable object renderer that allowed the developer to set up how all the attributes
						should be rendered when they create the attribute, and then simply call a view function and my
						view helper handled the rest.
						<br/>
						This was a blast to make, I really enjoy building things that can reduce development time and
						make my job easier.
					</p>
				</template>
			</image-card>
			<image-card class="mb-4" img-url="mobo.jpg">
				<template slot="title">
					ISU Endpoint On-site
				</template>
				<template slot="content">
					Before I had made it very far into my educational program, I still wanted a job and also wanted the
					job to be close to computers. I started working for (basically) the ISU general IT team. My job was
					to handle tickets sent by clients. This usually involved troubleshooting Windows drivers or
					connection to printers. The other bulk work of this job was reformatting machines and resetting them
					up with the software ensemble provided to all the office workers of Iowa State.
				</template>
			</image-card>
			<image-card img-url="pills.jpg" class="mb-4">
				<template slot="title">Hy-Vee</template>
				<template slot="content">
					<p>
						I worked for Hy-Vee for many years. It was great practice working closely with customers in the
						different departments. By the end of my time there I had worked my way to the pharmacy and
						became a certified pharmacy technician.
					</p>
				</template>
			</image-card>

		</template>
	</card>
</template>

<script>
    import Card from "../base/Card";
    import ImageCard from "../base/ImageCard";

    export default {
        name: "Work",
        components: {ImageCard, Card}
    }
</script>

<style scoped>

</style>