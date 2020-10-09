<template>
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong>
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
