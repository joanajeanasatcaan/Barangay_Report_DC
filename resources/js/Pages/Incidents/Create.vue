<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  title: '',
  description: '',
})

const submit = () => {
  form.post('/incidents')
}
</script>

<template>
  <div>
    <h1>Report an Incident</h1>
    <form @submit.prevent="submit">
      <input v-model="form.title" placeholder="Title" />
      <textarea v-model="form.description" placeholder="Description"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
</template>


