<template>
   <div class="iframe">
       <iframe
           src="https://player.twitch.tv/teamimubv&parent=team.imu.nl"
           height="500"
           width="500"
           allowfullscreen="true">
       </iframe>
   </div>
</template>

<script>
    import User from '../models/user';

    export default {
        computed: {
            users() {
                return User.all();
            },
        },

        mounted() {
            User.api().get('https://google.com/api/users');
        },
    };
</script>

<style lang="scss">
.test {
    color: blue;
}
</style>
