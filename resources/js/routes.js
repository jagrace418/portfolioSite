import Laravel from "./components/current/Laravel";
import Unity3D from "./components/current/Unity3D";

import Blender from "./components/past/Blender";
import GameAI from "./components/past/GameAI";
import School from "./components/past/School";

import Home from "./components/Home";
import NotFound from "./components/NotFound";
import Why418 from "./components/Why418";
import About from "./components/About";
import Work from "./components/past/Work";

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
            path: '/laravel',
            component: Laravel
        },
        {
            path: '/unity',
            component: Unity3D
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
            path: '/school',
            component: School
        },
        {
            path: '/work',
            component: Work
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