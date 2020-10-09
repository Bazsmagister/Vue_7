<template>
    <div class="alert alert-success" role="alert">
        <strong> {{ message }}</strong>
        <!-- {{ message }} -->
    </div>
</template>

<script>
export default {
    // props: [message],
    data() {
        return {
            message: "Hello"
        };
    },
    mounted() {
        setTimeout(() => {
            this.message = null;
        }, 5000);
    }
};
</script>

<style>
.alert-flash {
    position: fixed;
    right: 25px;
    bottom: 25px;
}
</style>
