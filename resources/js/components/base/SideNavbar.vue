<template>
	<div id="app">
		<nav class="flex justify-between">
			<burger-button/>
		</nav>

		<side-menu>
			<ul style="list-style-type: none">
				<li v-for="link in links" @click="toggleNav">
					<router-link  :to="link.url" class="text-2xl block pb-3 whitespace-no-wrap" exact>
						{{link.text}}
					</router-link>
				</li>
			</ul>
		</side-menu>
	</div>
</template>

<script>
    import SideMenu from "./SideMenu";
    import BurgerButton from "./BurgerButton";
    import {mutations} from "../../store";

    export default {
        name: "SideNavbar",
        components: {BurgerButton, SideMenu},
        props: {
            links: {
                type: Array,
                required: false,
                default: () => ([])
            }
        },
        methods: {
            toggleNav: mutations.toggleNav,
        }
    }
</script>

<style scoped>

</style>