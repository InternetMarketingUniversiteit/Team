<template>
    <div>
        games overview
        <Card :game="'table_football'"></Card>
    </div>
</template>

<script>
import Card from "../../components/Card";
export default {
    components: {Card}
}
</script>
