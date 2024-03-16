import './bootstrap';
import '../scss/app.scss';

import { createApp, h } from 'vue';
import { createInertiaApp,Link,Head } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { VueReCaptcha,useReCaptcha } from 'vue-recaptcha-v3'
import { MotionPlugin } from '@vueuse/motion'

import PrimaryButton from './Components/Base/PrimaryButton.vue';


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const captcheKey = props.initialPage.props.recaptcha_site_key;
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueReCaptcha, { siteKey: captcheKey,loaderOptions: {useRecaptchaNet: true}})
            .use(MotionPlugin)
            .component("Link",Link,)
            .component("Head",Head)
            .component('PrimaryButton',PrimaryButton)
            .mount(el);
    },
    
});
