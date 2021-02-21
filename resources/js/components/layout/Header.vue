<template>
  <header class="w-full text-white bg-primary">
    <div
      class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8"
    >
      <div class="p-2 pl-0 flex flex-row items-center justify-between">
        <a href="#" class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Music Learnig</a>
        <button
          @click.prevent="doOpen"
          class="md:hidden rounded-lg focus:outline-none focus:shadow-outline">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path
              v-if="!open"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
            ></path>
            <path
              v-else
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
      </div>

      <nav
        :class="{ flex: open, hidden: !open }"
        class="flex-grow pb-4 flex-grow md:pb-0 md:flex md:justify-end md:flex-row"
      >
        <ul class="flex flex-col w-full md:w-auto md:flex-row">
            <template v-for="(node, index) in menu"  :key="index">
                <li v-if="layout == node.layout"
                    class="w-full px-4 py-2 pt-3 mt-2 text-sm font-semibold text-white capitalize md:mt-0 w-full hover:bg-primary-dark"
                    :class="{'md:border-b-4 md:border-white bg-primary-dark': menuFocus(node.title),}">
                    <a class=" focus:bg-primary-dark focus:outline-none focus:shadow-outline" :href="node.url">
                        {{  node.title }}
                    </a>
                </li>
            </template>
          <li v-if="layout == 'app'"
            class="px-4 py-2 pt-3 mt-2 text-sm font-semibold capitalize text-white md:mt-0 hover:bg-primary-dark focus:bg-primary-dark focus:outline-none focus:shadow-outline">
            <form method="POST" action="/logout">
              <input type="hidden" name="_token" :value="csrf" />
              <a id="logout" href="#"
                onclick="event.preventDefault();
                    this.closest('form').submit();"
                >Logout</a
              >
            </form>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>

import { ref } from 'vue'

export default {
    props: {
      uri: String,
      layout: {
          type: String,
          default: 'guest'
      }
    },
    setup(props) {

        const open = ref(true)

        const csrf = ref(document.head.querySelector('meta[name="csrf-token"]').content)

        const menu = ref([
            { title: "login", url: "/login", layout: "guest" },
            { title: "register", url: "/register", layout: "guest" },
            { title: "dashboard", url: "/dashboard", layout: "app" },
        ])

        const doOpen = () =>  this.open = !this.open
0
        const menuFocus = (node) => {
            return node == props.uri.substring(1) ? true : false
        }

        const logout = () => this.closest("form").submit()

        return {
            doOpen, menuFocus, logout, open, csrf, menu
        }
    },
}
</script>
