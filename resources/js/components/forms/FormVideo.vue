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

            <a href="#" class="font-semibold text-primary-dark hover:underline" @click="addExpresion">Add Expression</a>
        </div>

        <expression v-for="(expression, index) in expressions" v-model:expression="expression.expression"  :key="index"></expression>

        <div class="flex justify-end pb-10">
            <button class="m-0 inline-flex items-center font-semibold px-4 mt-5 justify-center  h-10 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                Save
            </button>
        </div>

    </form>
</template>

<script>
import Expression from './elements/Expression';
import { ref, reactive } from 'vue'

export default {
    components: {
        Expression
    },

    setup() {
        const expressions = reactive([{ expression: '', pharagraph: 0, order: 0}])

        const addExpresion = () => expressions.push({ expression: '', pharagraph: 0, order: 0})

        return {
            expressions,
            addExpresion
        }
    }
}
</script>

<style scoped>

</style>
