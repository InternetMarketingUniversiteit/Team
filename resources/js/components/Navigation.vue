<template>
    <div class="d-flex">
        <v-bottom-navigation>
            <v-btn value="overzicht" href="/dashboard">
                <span>Overzicht</span>
                <i class="fa fa-home"></i>
            </v-btn>
            <v-btn value="games" href="/games">
                <span>Games</span>
                <i class="fa fa-gamepad"></i>
            </v-btn>
            <v-btn value="agenda" href="/calendar">
                <span>Agenda</span>
                <i class="fa fa-calendar"></i>
            </v-btn>
            <v-btn value="profile" href="/profile">
                <span>Profile</span>
                <i class="fa fa-user"></i>
            </v-btn>
        </v-bottom-navigation>
    </div>
</template>
<script>

</script>
<style lang="scss">

</style>
