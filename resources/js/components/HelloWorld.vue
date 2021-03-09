<template>
  <img alt="Vue logo" src="../assets/logo.png" />

  <h1>{{ msg }}</h1>

  <p>
    <a href="https://vitejs.dev/guide/features.html" target="_blank"
      >Vite Documentation</a
    >
    |
    <a href="https://v3.vuejs.org/" target="_blank">Vue 3 Documentation</a>
  </p>

  <button class="btn btn-primary" @click="state.count++">
    count is: {{ state.count }}
  </button>
  <div class="container mt-2">
    <div class="row border">
      <div class="col">test</div>
      <div class="col">test</div>
      <div class="col">test</div>
    </div>
    <div class="dropdown">
      <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { defineProps, reactive } from 'vue'

defineProps({
  msg: String,
})

const state = reactive({ count: 0 })
</script>

<style scoped>
a {
  color: #42b983;
}
</style>
