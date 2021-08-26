<template>
    <div class="">
        <Title titleLight="Poolen" titleBold="Uitdagen" subtitle="groejtes" ></Title>
            <img id="login-logo" src="~/assets/logo.svg" />
            <button class="secondary" type="button">login</button>
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
