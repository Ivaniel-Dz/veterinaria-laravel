<script setup>
defineProps({
	type: {
		type: String,
		default: 'submit',
	},
});
</script>

<template>
    <button :type="type" class="rounded-md bg-color-btn px-4 py-2 text-center text-sm text-white hover:bg-[#57cc99]">
        <slot />
    </button>
</template>
