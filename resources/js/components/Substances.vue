<template>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Mechanism</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <template v-for="substance in substances">
          <tr v-bind:key="substance.id">
            <td>{{ substance.id }}</td>
            <td>{{ substance.INN }}</td>
            <td>{{ substance.mechanism }}</td>

            <td>Action buttons</td>
          </tr>
        </template>
      </tbody>
    </table>
    <button class="btn btn-dark" @click="getsubstances()"></button>
  </div>
</template>

<script>
import axios from "axios";
export default {
    data: function() {
  return {
    substances: {}
  },

  mounted() {
    try {
      const response = axios.get("http://localhost:8000/api/substances");
      this.substances = response.data.data;
      console.log(response.data);
      //this.isLoading = false;
    } catch (e) {
      // handle the authentication error here
    }

   
  }
}
}

</script>
