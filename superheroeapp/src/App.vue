<script setup>
import { ref } from 'vue'
import axios from 'axios'

// Definir pokeSearch como un valor reactivo
const pokeSearch = ref('')
const pokeObject = ref(null)

async function getPokemon() {
  try {
    const response = await axios.get('https://pokeapi.co/api/v2/pokemon/' + pokeSearch.value.toLowerCase())
    pokeObject.value = response.data
    console.log(pokeObject.value)
  } catch (error) {
    console.error('No se encontró el Pokémon:', error)
    pokeObject.value = null
  }
}
</script>

<template>
  <h1>Poke API</h1>

  <input type="text" v-model="pokeSearch" placeholder="Escribe un nombre o ID">
  <button @click="getPokemon">Get Pokémon</button>

  <div v-if="pokeObject">
    <h2>{{ pokeObject.name }}</h2>
    <img :src="pokeObject.sprites.front_default" alt="Pokemon sprite">
  </div>
</template>
