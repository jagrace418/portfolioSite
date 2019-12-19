<template>
	<div class="sidebar">
		<div class="sidebar-backdrop inset-top-left cursor-pointer fixed w-screen h-screen" @click="closeSidebarPanel" v-if="isPanelOpen"></div>
		<transition name="slide">
			<div v-if="isPanelOpen"
				 class="bg-card inset-top-left py-8 px-5 h-screen overflow-y-auto fixed w-64 z-z flex justify-between">
				<slot/>
				<burger-button/>
			</div>
		</transition>
	</div>
</template>

<script>
	import {store, mutations} from "../../../store";
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
		background: rgba(255,255,255,0.6);
	}
</style>