<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

defineProps({
  incidents: Array
})

const updateStatus = (incidentId, status) => {
  router.put(`/admin/reports/${incidentId}/resolve`, { status })
}
</script>

<template>
  <AuthenticatedLayout>
    <div class="p-4">
      <h1 class="mb-4 text-2xl font-bold">Admin Reports</h1>
      <table class="w-full border">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-2 border">Title</th>
            <th class="p-2 border">Description</th>
            <th class="p-2 border">Reported By</th>
            <th class="p-2 border">Date</th>
            <th class="p-2 border">Status</th>
            <th class="p-2 border">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="incident in incidents" :key="incident.id" class="text-center">
            <td class="p-2 border">{{ incident.title }}</td>
            <td class="p-2 border">{{ incident.description }}</td>
            <td class="p-2 border">{{ incident.user.name }}</td>
            <td class="p-2 border">{{ new Date(incident.created_at).toLocaleString() }}</td>
            <td class="p-2 border">{{ incident.status }}</td>
            <td class="p-2 space-x-2 border">
              <button
                class="px-2 py-1 text-white bg-yellow-400 rounded hover:bg-yellow-500"
                @click="updateStatus(incident.id, 'On Progress')">
                Set On Progress
              </button>
              <button
                class="px-2 py-1 text-white bg-green-500 rounded hover:bg-green-600"
                @click="updateStatus(incident.id, 'Solved')">
                Set Solved
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </AuthenticatedLayout>
</template>
