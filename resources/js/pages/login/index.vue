<template>
    <div class="flex flex-column h-view center-h center-v">
            <img id="login-logo" src="~/assets/logo.svg" />
        <p class="custom-color-one">test</p>
            <v-btn
              color="primary"
              elevation="2"
            >login</v-btn>
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
