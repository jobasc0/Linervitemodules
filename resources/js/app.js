import './bootstrap';
import '../css/app.css';
import '../scss/app.scss';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

const appName =
    window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel'

createInertiaApp({
    title: (title) => `${title} - ${appName}`,

    resolve: (name) => {
        let page;
        let pages = name.split('::');

        if (pages.length > 1) {
            const [module, paths] = pages
            const moduleFileName = paths.split('.').join('/');
            page = resolvePageComponent(
                `../../Modules/${module}/Resources/views/Pages/${moduleFileName}.vue`,
                import.meta.glob('../../Modules/*/*/views/Pages/**/*.vue')
            )
        } else {
            page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'))
        }

        return page
    },
    setup({el, app, props, plugin}) {
        const vueApp = createApp({render: () => h(app, props)}).use(plugin)
        vueApp.mount(el)
        return vueApp
    },
})

