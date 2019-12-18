<template>
	<div class="sidebar">
		<div class="sidebar-backdrop" @click="closeSidebarPanel" v-if="isPanelOpen"></div>
		<transition name="slide">
			<div v-if="isPanelOpen"
				 class="sidebar-panel flex justify-between">
				<slot/>
				<burger-button/>
			</div>
		</transition>
	</div>
</template>

<script>
	import {store, mutations} from "../../store";
    import BurgerButton from "./BurgerButton";

    export default {
        name: "SideMenu",
        components: {BurgerButton},
        computed:{
            isPanelOpen(){
                return store.isNavOpen
			}
		},
        methods: {
            closeSidebarPanel: mutations.toggleNav
        }
    }
</script>

<style scoped>
	.slide-enter-active,
	.slide-leave-active {
		transition: transform 0.2s ease;
	}

	.slide-enter,
	.slide-leave-to {
		transform: translateX(-100%);
		transition: all 150ms ease-in 0s
	}

	.sidebar-backdrop {
		background-color: rgba(0, 0, 0, .5);
		width: 100vw;
		height: 100vh;
		position: fixed;
		top: 0;
		left: 0;
		cursor: pointer;
	}

	.sidebar-panel {
		overflow-y: auto;
		background-color: #130f40;
		position: fixed;
		left: 0;
		top: 0;
		height: 100vh;
		z-index: 999;
		padding: 3rem 20px 2rem 20px;
		width: 300px;
	}
</style>