<template>
	<div>
		<h4 class="mb-2">Select a theme</h4>
		<button v-for="(color, theme) in themes"
				class="rounded-full w-4 h-4 mr-2 bg-default border focus:outline-none"
				:class="{'border-accent' : selectedTheme === theme}"
				:style="{
		    		backgroundColor: color ,
		    		pointerEvents : selectedTheme === theme ? 'none':''
				}"
				@click="selectedTheme = theme"/>
	</div>
</template>

<script>
    export default {

        data() {
            return {
                themes: {
                    'theme-light': '#b8eaff',
                    'theme-dark': '#212121',
					'theme-isu': '#C8102E',
                },
                selectedTheme: 'theme-dark'
            };
        },

        created() {
            this.selectedTheme = localStorage.getItem('theme') || 'theme-dark';
        },

        watch: {
            selectedTheme() {
                document.body.className = document.body.className.replace(/theme-\w+/, this.selectedTheme);
                localStorage.setItem('theme', this.selectedTheme);
            }
        },
        name: "ThemeSwitcher"
    }
</script>

<style scoped>

</style>