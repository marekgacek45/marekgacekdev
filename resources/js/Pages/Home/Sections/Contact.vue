<template>
    <section id="kontakt" class=" bg-bgLight-400 ">
        
        <div class="w-full mx-auto ">
            <Vue3Marquee
                :pauseOnHover="true"
                :duration="20"
                class="overflow-hidden py-4 bg-ownPurple-400 text-ownYellow-400"
            >
                <span class="text-2xl font-heading ml-3">
                    Potrzebujesz wyceny
                    <span class="text-fontLight">??</span> Masz jakieś pytanie
                    <span class="text-fontLight">??</span> Chcesz po prostu
                    pogadać <span class="text-fontLight">??</span> Potrzebujesz
                    wyceny <span class="text-fontLight">??</span> Masz jakieś
                    pytanie <span class="text-fontLight">??</span> Chcesz po
                    prostu pogadać <span class="text-fontLight">??</span>
                </span>
            </Vue3Marquee>
        </div>

        <!-- CONTAINER---->
        <Wrapper class="lg:flex-row mt-12 max-w-screen-2xl">
            <!-- TEXT---->
            <div
                class="flex flex-col justify-center gap-6 lg:w-2/5 lg:mr-3 py-12 lg:ml-6 lg:mt-0"
            >
                <img
                    ref="fromBottom"
                    src="/assets/images/marekgacekdev-21.webp"
                    alt="planeta robotów"
                    class="xs:w-96 mx-auto"
                    loading="lazy"
                    width="385"
                    height="385"
                />
                <h2
                    ref="fromLeft"
                    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                >
                    Śmiało, napisz do mnie za pomocą formularza lub wyślij
                    maila.
                </h2>

                <a
                    ref="fromRight"
                    href="mailto:kontakt@marekgacekdev.pl"
                    class="text-xl xs:text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed font-bold text-ownTurquise-400"
                    >kontakt@marekgacekdev.pl</a
                >
                <h3 ref="fromLeft"
                    class="text-2xl md:text-3xl xl:text-4xl font-text leading-relaxed"
                >
                    Jeżeli wolisz to znajdź mnie na mediach społecznościowych
                </h3>
                <div>
                    <ul class="flex items-center gap-3 animate-bounce">
                        <li>
                            <a
                                href="https://www.facebook.com/marekgacekdev"
                                target="_blank"
                                ><img
                                    src="/assets/icons/facebook.png"
                                    alt="ikona facebook"
                                    class="w-10 md:w-12 social"
                            /></a>
                        </li>
                        <li>
                            <a
                                href="https://pl.linkedin.com/in/marek-gacek"
                                target="_blank"
                                ><img
                                    src="/assets/icons/linkedin.png"
                                    alt="ikona linkedin"
                                    class="w-10 md:w-12 social"
                            /></a>
                        </li>
                        <li>
                            <a
                                href="https://github.com/marekgacek45"
                                target="_blank"
                                ><img
                                    src="/assets/icons/github.png"
                                    alt="ikonka githuba"
                                    class="w-10 md:w-12 social"
                            /></a>
                        </li>
                        <li>
                            <a
                                href="https://www.youtube.com/@marekgacekdev"
                                target="_blank"
                                ><img
                                    src="/assets/icons/youtube.png"
                                    alt="ikonkayoutube"
                                    class="w-14 md:w-16 social"
                            /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- FORM---->
            <div
                class="flex justify-center items-center lg:h-auto mt-6 mb-12 lg:w-3/5 lg:py-16 lg:px-4 xl:p-10 2xl:p-16"
            >
                <OldSchoolCard title="Kontakt" class="w-full">
                    <div class="bg-bgLight-200 py-6">
                        <transition name="list" mode="out-in" appear>
                            <form v-if="!sendForm" @submit.prevent="submit">
                                <Field>
                                    <Input
                                        type="text"
                                        id="name"
                                        name="name"
                                        v-model="form.name"
                                        required
                                    />
                                    <Label for="name" id="name"
                                        >Imie i Nazwisko</Label
                                    >
                                    <Error v-if="form.errors.name">{{
                                        form.errors.name
                                    }}</Error>
                                </Field>
                                <Field>
                                    <Input
                                        type="email"
                                        id="email"
                                        name="email"
                                        v-model="form.email"
                                        required
                                    />
                                    <Error v-if="form.errors.email">{{
                                        form.errors.email
                                    }}</Error>
                                    <Label for="email" id="email">E-mail</Label>
                                </Field>
                                <Field>
                                    <Input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        v-model="form.phone"
                                    />
                                    <Label for="tel" id="tel">Telefon</Label>
                                    <Error v-if="form.errors.phone">{{
                                        form.errors.phone
                                    }}</Error>
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
                                        >Wiadomosc</Label
                                    >
                                    <Error v-if="form.errors.message">{{
                                        form.errors.message
                                    }}</Error>
                                </Field>
                              
                                <Field
                                    ><PrimaryButton
                                        type="submit"
                                        :disabled="form.processing"
                                        >Wyślij</PrimaryButton
                                    ></Field
                                >
                            </form>

                            <div
                                v-else
                                class="min-h-[545px] flex flex-col justify-center items-center gap-6 text-center px-4"
                            >
                                <h2 class="text-7xl font-heading">
                                    Dzięki za wiadomość
                                </h2>
                                <span class="text-3xl"
                                    >Odpowiem na nią najszybciej jak to
                                    możliwe!</span
                                >
                            </div>
                        </transition>
                    </div>
                </OldSchoolCard>
            </div>
        </Wrapper>
        <!--END CONTAINER---->
    </section>
</template>

<script setup>
// import { useReCaptcha } from "vue-recaptcha-v3";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

import Field from "@/Components/Form/Field.vue";
import Label from "@/Components/Form/Label.vue";
import Input from "@/Components/Form/Input.vue";
import TextArea from "@/Components/Form/TextArea.vue";
import Error from "@/Components/Form/Error.vue";
import PrimaryButton from "@/Components/Base/PrimaryButton.vue";

import { Vue3Marquee } from "vue3-marquee";

import { useGlobalMotion } from "@/motionSetup.js";

const { fromLeft,fromRight,fromBottom } = useGlobalMotion();



let sendForm = ref(false);

let form = useForm({
    name: null,
    email: null,
    phone: null,
    message: null,
 
});



const submit = () => {
    form.post("/kontakt", {
        preserveScroll: true,
        onSuccess: () => {
            sendForm.value = !sendForm.value;
           
        },
    });
};

const props = defineProps({
    form: Object,
    errors: Object,
    recaptcha_site_key: String,
});

defineEmits(["update:modelValue"]);
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
