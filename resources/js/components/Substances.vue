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
    data: {
        substances: {}
    },
    mounted() {
        console.log("Substances component mounted.");
        const response = axios.get("http://localhost:8000/api/substances");
        this.substances = response.data.data;
        alert(this.substances);

        // fetch("http://localhost:8000/api/substances").then(response => {
        //     this.substances = response.data;
        //     console.log(response.data);
        // });

        //alert(data);
        //this.substances = response.data;

        //this.substances = response.data.data;
        //this.isLoading = false;
    },
    methods: {
        getsubstances() {
            //axios.get("localhost:8000/api/substances");
            fetch("http://localhost:8000/api/substances")
                .then(response => {
                    this.substances = response.data;
                    console.log(response.data);
                })
                .catch(error => console.error(error));

            //alert(this.substances);
            // this.substances = response.data;
            //this.substances = response.data.data;
        }
    }

    // async created() {
    //     try {
    //         const response = await axios.get("http://localhost:8000/api/substances");
    //         this.substances = response.data.data;
    //         this.isLoading = false;
    //     } catch (e) {
    //         // handle the authentication error here
    //     }
    // }
};
</script>
