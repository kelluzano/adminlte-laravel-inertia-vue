require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import MainLayout from '@/Layouts/MainLayout';

createInertiaApp({
    //   resolve: name => {
    //     const pages = require('./Pages/**/*.vue')
    //     return pages[`./Pages/${name}.vue`]
    //   },
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el)
    },
    progress: {
        color: '#4B5563',
    },
});

