<template>
    <div>
        <Head title="Skontaktuje się ze mną | Marek Gacek">
            <meta name="description" content="Skontaktuj się ze mną i zacznij tworzyć online bez granic. Odkryj, jak moje umiejętności w kodowaniu i marketingu mogą pomóc Twojemu biznesowi." />
        </Head>

        <Layout>
            <main>
                <section
                    class="section  mt-[71px] bg-ownPink-200"
                >
                <div class="w-full mx-auto mt-12">
                    <Vue3Marquee
                :pauseOnHover=true
                :duration=20
                class=" overflow-hidden py-4 bg-bgDark-400 text-ownYellow-400"
            >
           
            <h1 class="text-7xl font-heading ml-3">
                  Potrzebujesz wyceny <span class="text-fontLight">??</span>  Masz jakieś pytanie <span class="text-fontLight">??</span>  Chcesz po prostu pogadać <span class="text-fontLight">??</span>  Potrzebujesz wyceny <span class="text-fontLight">??</span>  Masz jakieś pytanie <span class="text-fontLight">??</span>  Chcesz po prostu pogadać <span class="text-fontLight">??</span>
                        </h1>
            </Vue3Marquee>
                </div>
            
                    <!-- CONTAINER---->
                    <div class="wrapper ">
                      
                        <!-- TEXT---->
                        <div
                            class="flex flex-col justify-center gap-6 lg:w-2/5 lg:mr-3 py-12 lg:ml-6  lg:mt-0"
                        >
                          
                          
                            <img ref="textBottom" src="/assets/images/contact/contact.webp" alt="" class="w-96 mx-auto" >
                            <h2 ref="textLeft"
                                class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                            >
                                Śmiało, napisz do mnie za pomocą formularza lub wyślij maila.
                            </h2>

                            <a ref="textRight" href="mailto:kontakt@marekgacekdev.pl" class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed font-bold text-ownTurquise-400">kontakt@marekgacekdev.pl</a>
                            <h2 
                                class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                            >
                                Jeżeli wolisz to znajdź mnie na mediach społecznościowych
                            </h2>
                            <div>
                                <ul class="flex items-center gap-3 animate-bounce">

<li> <a href="https://www.facebook.com/marekgacekdev" target="_blank"
        ><img src="/assets/icons/facebook--purple.svg" alt="" class="w-10 md:w-12 social "
      /></a></li>
      <li><a href="https://pl.linkedin.com/in/marek-gacek" target="_blank"
        ><img src="/assets/icons/linkedin--white.svg" alt="" class="w-10 md:w-12 social"
      /></a></li>
      <li>  <a href="https://github.com/marekgacek45" target="_blank"
        ><img src="/assets/icons/github.svg" alt="" class="w-10 md:w-12 social"
      /></a></li>
      <li> <a href="https://www.youtube.com/@marekgacekdev" target="_blank"
        ><img src="/assets/icons/youtube--yellow.svg" alt="" class="w-14 md:w-16 social "
      /></a></li>
                
    </ul>
                            </div>
                        </div>
                          <!-- FORM---->
                          <div
                            class="flex justify-center items-center  lg:h-auto mt-6 mb-12 lg:w-3/5 lg:py-16 lg:px-4 xl:p-10 2xl:p-16"
                        >
                            <OldSchoolCard title="Kontakt" class="w-full">
                                <div class="bg-bgLight-200 py-6">
                                    <transition name="list" mode="out-in" appear>
                                    <form v-if="!sendForm"
                                        @submit.prevent="submit"
                                      
                                    >
                                        <Field>
                                            <Input
                                                type="text"
                                                id="name"
                                                name="name"
                                                v-model="form.name"
                                                required
                                            />
                                            <Label for="name" id="name"
                                                >Imię i Nazwisko</Label
                                            >
                                            <Error v-if="form.errors.name">{{ form.errors.name}}</Error>
                                        </Field>
                                        <Field>
                                            <Input
                                                type="email"
                                                id="email"
                                                name="email"
                                                v-model="form.email"
                                                required
                                            />
                                            <Error v-if="form.errors.email">{{ form.errors.email}}</Error>
                                            <Label for="email" id="email"
                                                >E-mail</Label
                                            >
                                        </Field>
                                        <Field>
                                            <Input
                                                type="tel"
                                                id="phone"
                                                name="phone"
                                                v-model="form.phone"
                                                
                                            />
                                            <Label for="tel" id="tel"
                                                >Telefon</Label
                                            >
                                            <Error v-if="form.errors.phone">{{ form.errors.phone}}</Error>
                                        </Field>
                                        <Field>
                                            <TextArea
                                                id="message"
                                                name="message"
                                                v-model="form.message"
                                                required
                                            ></TextArea>
                                            <Label
                                                for="message"
                                                id="message"
                                                class="peer-placeholder-shown:top-7"
                                                >Wiadomość</Label
                                            >
                                            <Error v-if="form.errors.message">{{ form.errors.message}}</Error>
                                        </Field>
                                        <!-- <div class="text-red-600" v-if="errors.captcha_token">
                {{ errors.captcha_token }}
            </div> -->
            <!-- <Error v-if="errors.captcha_token">{{ errors.captcha_token}}</Error> -->
                                        <Field
                                            ><PrimaryButton type="submit" :disabled="form.processing"
                                                >Wyślij</PrimaryButton
                                            ></Field
                                        >
                                    </form>

                                    <div v-else class="min-h-[545px] flex flex-col justify-center items-center gap-6 text-center px-4">

                                        <h2 class="text-7xl font-heading">Dzięki za wiadomość</h2>
                                        <span class="text-3xl">Odpowiem na nią najszybciej jak to możliwe!</span>
                                    </div>
                                </transition>
                                </div>
                            </OldSchoolCard>
                        </div>
                    </div>
                    <!--END CONTAINER---->
                </section>
            </main>
        </Layout>
    </div>
</template>


<script setup>
// import { useReCaptcha } from "vue-recaptcha-v3";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

import Layout from "@/Layouts/Layout.vue";
import Field from "@/Components/Form/Field.vue";
import Label from "@/Components/Form/Label.vue";
import Input from "@/Components/Form/Input.vue";
import TextArea from "@/Components/Form/TextArea.vue";
import Error from "@/Components/Form/Error.vue"
import OldSchoolCard from "@/Components/OldSchoolCard.vue";
import PrimaryButton from "@/Components/Base/PrimaryButton.vue";

import { Vue3Marquee } from "vue3-marquee";

import { useGlobalMotion } from "@/motionSetup.js";

const { textRight, textLeft,textBottom } = useGlobalMotion();

// const { executeRecaptcha, recaptchaLoaded } = useReCaptcha();


let sendForm = ref(false)

let form = useForm({
    name: null,
    email: null,
    phone: null,
    message: null,
    // captcha_token: null,
});

// const recaptcha = async () => {
//     // (optional) Wait until recaptcha has been loaded.
//     await recaptchaLoaded();

//     // Execute reCAPTCHA with action "login".
//     form.captcha_token = await executeRecaptcha("login");
//     submit();
//     // Do stuff with the received token.
// };

const submit = () => {
    form.post("/kontakt", {
        preserveScroll: true,
        onSuccess: () => {
            sendForm.value = !sendForm.value;
            console.log('udało się');
        },
    });
};

const props = defineProps({
    form: Object,
    errors: Object,
    recaptcha_site_key: String,
});



defineEmits(['update:modelValue']);

</script>

<style scoped>

.list-enter-active,
.list-leave-active {
    transition: all 1s ease-in-out;
}
.list-enter-from,
.list-leave-to {
    opacity: 0;
    transform: rotate(0deg) scale(0);
}
.list-enter-to,
.list-leave-from {
    opacity: 1;
    transform: rotate(360deg) scale(1);
}

</style>