<script setup>
defineProps({
    caption: String,
});
</script>

<template>
    <table
        class="mx-auto w-3/4 text-sm text-left rtl:text-right text-fontLight border border-fontDark box-shadow"
    >
        <caption
            class="p-3 font-heading text-3xl text-left rtl:text-right text-fontLight bg-bgDark-400 uppercase"
        >
            {{
                caption
            }}
        </caption>
        <thead class="text-sm text-fontDark uppercase">
                <tr>
                <slot name="header"></slot>
            </tr>
            </thead>
        <tbody>
            <slot></slot>
        </tbody>
    </table>
</template>
