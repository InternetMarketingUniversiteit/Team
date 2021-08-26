<template functional>
	<div class="title flex items-center">
		<div class="circle"></div>
		<h1 class="pl-6">{{ props.titleLight }} {{ props.titleLight && '-' + props.titleBold }}</h1>
		<h2 v-if="props.subtitle" class="">{{ props.subtitle }}</h2>
	</div>
</template>

<script>
export default {
	name: 'Title',
	props: {
		titleLight: {
			type: String,
			required: true
		},
		titleBold: {
			type: String
		},
		subtitle: {
			type: String,
		},
	}
}
</script>

<style lang="scss" scoped>
	.title {
		position: relative;

		.circle{ 
			width:78px;
			height: 78px;
			border-radius:100%;
			background:rgba(#2196F3, .1);
			position: absolute;
		}

		h1 {
			font-size:24px;
			font-weight: bold;
		}

		h2 {
			font-size:14px;
			font-weight: normal;
		}
	}
</style>