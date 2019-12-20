<template>
	<div id="burger"
		 :class="{ 'active' : isBurgerActive }"
		 @click.prevent="toggle">
		<slot>
			<button type="button"
					class="burger-button cursor-pointer relative block z-z rounded-none w-8 h-8"
					title="Menu">
				<span class="burger-bar bg-sidebar absolute w-auto burger-bar--1"/>
				<span class="burger-bar bg-sidebar absolute w-auto burger-bar--2"/>
				<span class="burger-bar bg-sidebar absolute w-auto burger-bar--3"/>
			</button>
		</slot>
	</div>
</template>

<script>
	import {store, mutations} from "../../../store";

    export default {
        name: "BurgerButton",
		computed:{
            isBurgerActive(){
                return store.isNavOpen
			}
		},
        methods: {
            toggle() {
                mutations.toggleNav()
            }
        }
    }
</script>

<style scoped>

	.burger-button {
		border: 0;
		transition: transform .6s cubic-bezier(.165, .84, .44, 1);
	}

	.burger-bar {
		top: 50%;
		right: 6px;
		left: 6px;
		height: 2px;
		margin-top: -1px;
		transition: transform .6s cubic-bezier(.165, .84, .44, 1), opacity .3s cubic-bezier(.165, .84, .44, 1), background-color .6s cubic-bezier(.165, .84, .44, 1);
	}

	.burger-bar--1 {
		-webkit-transform: translateY(-6px);
		transform: translateY(-6px);
	}

	.burger-bar--2 {
		transform-origin: 100% 50%;
		transform: scaleX(.8);
	}

	.burger-button:hover .burger-bar--2 {
		transform: scaleX(1);
	}

	.no-touchevents .burger-bar--2:hover {
		transform: scaleX(1);
	}

	.burger-bar--3 {
		transform: translateY(6px);
	}

	#burger.active .burger-button {
		transform: rotate(-180deg);
	}

	#burger.active .burger-bar {
		background-color: black;
	}

	#burger.active .burger-bar--1 {
		transform: rotate(45deg)
	}

	#burger.active .burger-bar--2 {
		opacity: 0;
	}

	#burger.active .burger-bar--3 {
		transform: rotate(-45deg)
	}
</style>