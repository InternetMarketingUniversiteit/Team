<template>
    <app-layout title="Dashboard">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <Title title-bold="Home"></Title>
                    <Card :game="'table_football'"></Card>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Welcome from '@/Jetstream/Welcome.vue';
    import Card from '../components/Card.vue';
    import Title from '../components/Title';

    export default {
        components: {
            Title,
            AppLayout,
            Welcome,
            Card,
        },
    }
</script>
