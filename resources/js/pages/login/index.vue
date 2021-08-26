<template>
    <div class="flex flex-col h-screen justify-center items-center">
        <img id="login-logo" src="~/assets/logo.svg" />
        <input type="text" placeholder="Test">
    </div>
</template>
<script>

export default {
    mounted() {
        console.log(this.$router);
    },
};
</script>

<style lang="scss">
    #login-logo {
        max-width: 120px;
    }
</style>
