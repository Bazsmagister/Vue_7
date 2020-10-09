<template>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">{{ title }}</div>
            <div class="links">
                <a href="/">welcome</a>
                <a href="/page">/page site</a>
                <a href="/home">Home, if authenticated</a>

                <!--
                <a href="/substances/2">Substances/2 json</a> -->
                <a href="/substanceswithotherdatas"
                    >substanceswithotherdatasLinksMeta</a
                >
                <a href="/api/substances">/api/substancesgivesbackjson</a>
                <a href="/substances"
                    >/substances_Using_Vue_to_v-for_substances
                </a>

                <a href="/herecanbeanything">HereCanBeAnything</a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["title"]
};
</script>

<style scoped>
html,
body {
    background-color: #fff;
    color: #636b6f;
    font-family: "Raleway", sans-serif;
    font-weight: 100;
    height: 100vh;
    margin-top: 30px;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 30px;
}

.links > a {
    color: #636b6f;
    padding: 25px 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-top: 30px;

    margin-bottom: 10px;
}
</style>
