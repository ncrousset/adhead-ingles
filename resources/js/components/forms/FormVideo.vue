<template>
    <form action="">
        <div class="flex mt-3 justify-between">
            <input type="text" name="" placeholder="Title" class="border p-2 w-2/3 mr-2">
            <input type="text" name="" placeholder="Youtube id" class="border p-2 w-1/3 ml-2">
        </div>
        <h2 class="text-lg text-gray-800 font-semibold my-3">Lyric</h2>
        <div>
            <textarea v-model="lyric" class="border w-full p-5" name="" id="" rows="10" placeholder=" Lyric"></textarea>
        </div>

        <div class="flex justify-end pb-10">
            <button @click.prevent="generateExpression" class="m-0 inline-flex items-center font-semibold px-4 mt-5 justify-center  h-10 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                Generar
            </button>
        </div>

        <div class="flex flex-row justify-between items-center justify-items-center">
            <h2 class="text-lg text-gray-800 font-semibold my-3">Expressions</h2>

            <a href="#" class="font-semibold text-primary-dark hover:underline" @click="addExpresion">Add Expression</a>
        </div>

        <expression v-for="(expression, index) in expressions"
                    :expression="expression.expression"
                    :pharagraph="expression.pharagraph"
                    :order="expression.order"
                    @destroy="destroy" :key="index" :index="index"></expression>

        <div class="flex justify-end pb-10">
            <button class="m-0 inline-flex items-center font-semibold px-4 mt-5 justify-center  h-10 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                Save
            </button>
        </div>

    </form>
</template>

<script>
import Expression from './elements/Expression';
import splitLyric from "../../functions/SplitLyric";
import { ref, reactive } from 'vue'

export default {
    components: {
        Expression
    },

    computed: {

    },

    setup() {
        const expressions = reactive([{ expression: '', pharagraph: 0, order: 0}])

        const lyric = ref('')

        const addExpresion = () => expressions.unshift({ expression: '', pharagraph: 0, order: 0})
        const destroy = (index) => expressions.splice(index, 1)

        const generateExpression = () => {
            destroy(0)
            splitLyric(lyric.value).lyricExpression.forEach((paragraph, index) => {
                paragraph.forEach((line, indexLine) => expressions.push({ expression: line, pharagraph: index, order: indexLine}))
            })
            // console.log(splitLyric(lyric.value).lyricExpression)
        }

        return {
            expressions,
            lyric,
            addExpresion,
            destroy,
            generateExpression,
        }
    }
}
</script>

<style scoped>

</style>
