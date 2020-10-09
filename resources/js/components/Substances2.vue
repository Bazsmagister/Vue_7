<template>
    <div class="container">
        <ul>
            <li v-for="substance in substances" :key="substance.id">
                {{ substance.INN }} :
                {{ substance.mechanism }}
            </li>
        </ul>
    </div>
</template>

<script>
//https://vuejs.org/v2/cookbook/using-axios-to-consume-apis.html
import axios from "axios";
export default {
    data() {
        return {
            substances: ""
        };
    },
    mounted() {
        var url = "http://localhost:8000/api/substances";
        // axios
        //     .get("http://localhost:8000/api/substances")
        //     // .then(response => (this.substances = response));
        //     .then(function(response) {
        //         console.log(response.data.data);
        //     })
        //     .then(response => (this.substances = response.data.data));

        // axios
        //     .get(url)
        //     .then(function(response) {
        //         console.log(response.data);
        //         return (substances = response.data);
        //         // alert(substances);
        //     })
        //     .catch(function(error) {
        //         console.log(error);
        //     });

        return (
            axios
                .get(url)
                // .then(response => response.data)
                .then(response => (this.substances = response.data))
        );
    }
};
</script>
