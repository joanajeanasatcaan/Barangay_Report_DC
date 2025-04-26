<script setup>
defineProps({
  incidents: Array
})
</script>

<template>
  <div>
    <h1>Admin Reports</h1>
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Reported By</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="incident in incidents" :key="incident.id">
          <td>{{ incident.title }}</td>
          <td>{{ incident.description }}</td>
          <td>{{ incident.user.name }}</td>
          <td>{{ new Date(incident.created_at).toLocaleString() }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


