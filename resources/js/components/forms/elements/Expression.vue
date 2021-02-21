<template>
    <div class="flex mt-3">
        <div class="flex justify-between w-full">
            <input v-model="expression" type="text" name="" placeholder="Expression" class="border p-2 w-3/5 mr-2">
            <input type="number" name="" placeholder="Pharagraph num." class="border p-2 w-1/5 ml-2">
            <input type="number" name="" placeholder="Order num." class="border p-2 w-1/5 ml-2">
        </div>
        <div class="w-10 ml-2">
            <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-white transition-colors duration-150 bg-third rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    model: {

    },

    props: {
        expression: {
            type: String
        }
    },

    data() {
        return {
            test: ''
        }
    }
}
</script>

<style scoped>

</style>
