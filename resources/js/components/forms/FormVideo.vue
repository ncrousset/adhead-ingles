<template>
    <form action="">
        <div class="flex mt-3 justify-between">
            <input type="text" name="" placeholder="Title" class="border p-2 w-2/3 mr-2">
            <input type="text" name="" placeholder="Youtube id" class="border p-2 w-1/3 ml-2">
        </div>
        <h2 class="text-lg text-gray-800 font-semibold my-3">Lyric</h2>
        <div>
            <textarea class="border w-full" name="" id="" rows="10" placeholder=" Lyric"></textarea>
        </div>

        <div class="flex flex-row justify-between items-center justify-items-center">
            <h2 class="text-lg text-gray-800 font-semibold my-3">Expressions</h2>

            <a href="" class="font-semibold text-primary-dark hover:underline">Add Expression</a>

            <button class="inline-flex items-center font-semibold justify-center px-2 h-6 mr-2 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">

            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>

        </button>
        </div>

        <expression v-model:title="expressions[0].expression"></expression>

        <div class="flex justify-end ">
            <button class="m-0 inline-flex items-center font-semibold px-4 mt-5 justify-center  h-10 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                Save
            </button>
        </div>

    </form>
</template>

<script>

import Expression from './elements/Expression';

export default {
    components: {
        Expression
    },

    data() {
        return {
            expressions: [{
                expression: '',
                pharagraph: 0,
                order: 0
            }]
        }
    }
}
</script>

<style scoped>

</style>
