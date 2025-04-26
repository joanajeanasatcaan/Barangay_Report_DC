<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Link } from '@inertiajs/vue3'
import { Inertia } from '@inertiajs/inertia'


defineProps({ incidents: Array })

const logout = () => {
  Inertia.post('/logout')
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Incident Reports</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
          <Link href="/incidents/create" class="text-blue-500 underline">Report New</Link>

          <ul class="mt-4 space-y-2">
            <li v-for="incident in incidents" :key="incident.id">
              {{ incident.title }} - {{ incident.status }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
