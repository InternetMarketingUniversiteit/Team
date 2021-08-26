<template>
    <div class="bg-white shadow-lg rounded p-4 flex" style="width: 400px;">
        <div class="mr-4 flex items-center">
            <img v-if="game === 'table_football'" src="./assets/football.png" />
            <img v-if="game === 'pool'" src="./assets/pool.png" />
        </div>

        <div class="flex justify-between w-full">
            <div class="flex flex-col">
                <div>
                    <strong>aron</strong> vs <strong>aron</strong>
                </div>
                <span>1v1 - Pool</span>
            </div>

            <div>
                <div class="relative">
                    <span class="font-light">Live</span>
                    <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-red-500 opacity-75"></span>
                </div>

<!--                <div class="flex flex-col font-light">-->
<!--                    <span>27 aug '21</span>-->
<!--                    <span>16:00</span>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Card',
    props: ['game'],
}
</script>
<style lang="scss">

</style>
