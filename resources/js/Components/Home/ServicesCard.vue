<template>
    <OldSchoolCard title="usługi">
        <div class="border-x-2 border-black " :class="currentBackground">
            <img :src="currentImage" alt="" class="w-full h-[450px] " />
            <div class="px-6 py-10  min-h-64 md:min-h-56 lg:min-h-64 xl:min-h-56 2xl:min-h-50 border-t-2 border-fontDark">
                <p class="text-lg font-text font-medium ">{{ currentText }}</p>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <button
                type="button" aria-label="usługa"
                v-for="(item, index) in items"
                :key="index"
                class="p-2 border-2 border-r-0 last:border-r-2 border-fontDark font-text font-bold  text-center  button-hover"
                :class="isActive === index ? item.background : 'bg-bgLight-200'"
                @click="change(item.text, item.image, item.background, index)"
            >
                {{ item.label }}
            </button>
        </div>
    </OldSchoolCard>
</template>

<script setup>
import OldSchoolCard from "../OldSchoolCard.vue";
import { ref } from "vue";



const items = [
    {
        label: "WWW",
        text: "Tworzę innowacyjne, responsywne oraz błyskawicznie działające strony internetowe dostosowane do Twoich indywidualnych potrzeb, byś mógł zachwycić swoich odbiorców. Koniec z gotowcami stawianymi od szablonu oraz technologii które pamiętają stare czasy!",
        image: "/assets/images/home/services--one.webp",
        background: "bg-ownPink-400",
    },
    {
        label: "DESIGN",
        text: "Zaprezentuję Ci wyjątkowe projekty, stworzone z myślą o Tobie! Styl moich witryn to efekt indywidualnego podejścia, dostosowanego do specyfiki Twojej branży oraz osobistych preferencji. Wyrwij się spod wpływu szablonów z poprzedniej dekady – każdy mój projekt to nowoczesny design i świeży styl.",
        image: "/assets/images/home/services--two.webp",
        background: "bg-ownYellow-400",
    },
    {
        label: "SOCIAL MEDIA",
        text: "Oferuję kompleksowe zarządzanie mediów społecznościowych! Zajmuję się nie tylko tworzeniem, ale również aktywnym prowadzeniem profili na platformach społecznościowych. Zaufaj mi, abyś mógł skupić się na rozwoju swojego biznesu, a ja zadbanym o Twój wizerunek online!",
        image: "/assets/images/home/services--three.webp",        background: "bg-ownTurquise-400",
    },
    {
        label: "TREŚCI",
        text: "Zapewniam kompleksową obsługę treści dla Twojej strony internetowej! Specjalizuję się nie tylko w pisaniu tekstów, ale również w fotografii. Moje usługi obejmują tworzenie treści, które przyciągają uwagę i angażują czytelnika, a także dodawanie unikalnych wizualnych doświadczeń poprzez fotografie.",
        image: "/assets/images/home/services--four.webp",
        background: "bg-ownOrange-600",
    },
];

const currentText = ref(items[0]['text']);
const currentImage = ref(items[0]['image']);
const currentBackground = ref(items[0]['background']);
const isActive = ref(0);

const change = (text, image, background, index) => {
    currentText.value = text;
    currentImage.value = image;
    currentBackground.value = background;
    isActive.value = index;
};
</script>
