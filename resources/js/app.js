import "./bootstrap";
import "../scss/app.scss";

import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import { VueReCaptcha, useReCaptcha } from "vue-recaptcha-v3";
import { MotionPlugin } from "@vueuse/motion";

import moment from "moment/dist/moment";
import pl from "moment/dist/locale/pl";
moment.updateLocale("pl", pl);

import PrimaryButton from "./Components/Base/PrimaryButton.vue";
import Button from './Components/Base/Button.vue'
import Heading from "./Components/Base/Heading.vue";
import Section from "./Components/Base/GridSection.vue";
import OldSchoolCard from "./Components/OldSchoolCard.vue";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        const captcheKey = props.initialPage.props.recaptcha_site_key;
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueReCaptcha, {
                siteKey: captcheKey,
                loaderOptions: { useRecaptchaNet: true },
            })
            .use(MotionPlugin)
            .use(moment)
            .component("Link", Link)
            .component("Head", Head)

            .component("PrimaryButton", PrimaryButton)


            .component('Button',Button)
            .component('Heading',Heading)
            .component('OldSchoolCard',OldSchoolCard)
            
            .mount(el);
    },
});
