<template>
    <div class="container">
        <ul>
            <li v-for="substance in substances" :key="substance.INN">
                {{ substance }}
                <hr />
                <!-- works -->
                {{ substance.data }}

                <!-- {{ substance.INN }} -->
            </li>
        </ul>
        <ul>
            <li>
                <!-- works -->
                {{ substances.data.data }}
            </li>
        </ul>

        <!-- <button class="btn btn-dark" @click="getsubstances()"></button> -->
    </div>
</template>

<script>
//https://vuejs.org/v2/cookbook/using-axios-to-consume-apis.html
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
