<template functional>
	<div class="title flex items-center">
		<div class="circle"></div>
		<div class="-ml-16 flex items-center">
			<NuxtLink :to="props.backLink" v-if="props.backLink" class="back-arrow mr-4"><i class="fas fa-chevron-left"></i></NuxtLink>
			<div>
				<h1>{{ props.titleLight }} {{ props.titleLight && props.titleBold && '- ' }} <span>{{ props.titleBold && props.titleBold }}</span></h1>
				<h2 v-if="props.subtitle" class="">{{ props.subtitle }}</h2>
			</div>
		</div>
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
		backLink: {
			type: String,
		}
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
		}

		h1 {
			font-size:24px;
			font-weight:normal;
			@apply leading-none;

			span {
				font-weight: bold;
			}
		}

		h2 {
			font-size:14px;
			font-weight: normal;
		}
	}
</style>