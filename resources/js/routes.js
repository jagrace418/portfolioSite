import CollegeLife from "./components/about/CollegeLife";
import EarlyLife from "./components/about/EarlyLife";
import FutureLife from "./components/about/FutureLife";

import Laravel from "./components/current/Laravel";
import Unity3D from "./components/current/Unity3D";

import Finances from "./components/future/Finances";
import VR from "./components/future/VR";

import Blender from "./components/past/Blender";
import GameAI from "./components/past/GameAI";
import SeniorDesign from "./components/past/SeniorDesign";

import Home from "./components/Home";
import NotFound from "./components/NotFound";
import Why418 from "./components/Why418";
import About from "./components/About";

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/me',
            component: About
        },
        {
            path: '/college',
            component: CollegeLife
        },
        {
            path: '/early',
            component: EarlyLife
        },
        {
            path: '/future',
            component: FutureLife
        },
        {
            path: '/laravel',
            component: Laravel
        }, {
            path: '/unity',
            component: Unity3D
        }, {
            path: '/finances',
            component: Finances
        },
        {
            path: '/vr',
            component: VR
        },
        {
            path: '/blender',
            component: Blender
        },
        {
            path: '/ai',
            component: GameAI
        },
        {
            path: '/senior',
            component: SeniorDesign
        },
        {
            path: '/why',
            component: Why418
        },
        {
            path: '/',
            component: Home
        },
    ]
}