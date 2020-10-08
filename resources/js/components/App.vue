<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <ul class="navbar-nav">
                    <router-link :to="{ name: 'page' }" class="nav-link"
                        >Spa-Page</router-link
                    >
                    <router-link :to="{ name: 'substances' }" class="nav-link"
                        >Substances</router-link
                    >
                </ul>
            </div>
        </nav>
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
export default {};
</script>
