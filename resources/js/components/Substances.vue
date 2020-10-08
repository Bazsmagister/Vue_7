<template>
    <div class="container">
        <ul>
            <li v-for="substance in substances" :key="substance.id">
                {{ substance.data }}
                {{ substance.INN }}
            </li>
        </ul>
        <ul>
            <li>
                {{ substances.data.data }}
            </li>
        </ul>

        <!-- <button class="btn btn-dark" @click="getsubstances()"></button> -->
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            substances: {}
        };
    },
    mounted() {
        axios
            .get("http://localhost:8000/api/substances")
            .then(response => (this.substances = response));
        //console.log(this.substances.INN);
        console.log(this.substances);
    }
};
</script>
