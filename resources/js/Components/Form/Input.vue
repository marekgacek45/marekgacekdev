<template>
    <input class="block px-2.5 pb-2.5 pt-4 w-full text-lg text-fontDark bg-transparent  border-1 border-fontDark appearance-none  focus:outline-none focus:ring-0 focus:border-ownPurple-400 peer box-shadow font-text duration-300" placeholder=" "  :value="modelValue" @input="updateValue"/>
</template>


<script setup>
const props = defineProps({
    modelValue: String
})

const emit = defineEmits(['update:modelValue'])

const updateValue = (event) => {
    emit('update:modelValue', event.target.value)
}
</script>