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
        mounted() {
            console.log('test');
            User.insert({
                data: {
                    name: 'Test',
                }
            });
        },
    };
</script>

<style lang="scss">
.test {
    color: blue;
}
</style>
