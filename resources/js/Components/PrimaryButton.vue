<script setup>
defineProps({
	type: {
		type: String,
		default: 'submit',
	},
});
</script>

<template>
    <button :type="type" class="rounded-md bg-color-main px-4 py-2 text-center text-sm text-white hover:bg-color-second">
        <slot />
    </button>
</template>
