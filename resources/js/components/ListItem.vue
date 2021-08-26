// <list-item class="my-2" v-for="i in 10" :key="i" :number="i"></list-item>

<template>
    <div class="flex" style="width: 400px;">
        <div class="mr-4 flex items-center font-bold">
            {{ number }}.
        </div>

        <div class="mr-4">
            <img class="w-12 h-12 rounded-full "   src="./assets/logo.svg" />
        </div>

        <div class="flex justify-between w-full">
            <div class="flex flex-col">
                <strong>Aron Bakker</strong>
                <div class="flex items-center">
                    <i class="fas fa-trophy mr-2" :class="{ 'text-yellow-400': number === 1 }"></i><span>12000 points</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ListItem',
    props: ['user', 'number'],
}
</script>
<style lang="scss">

</style>
