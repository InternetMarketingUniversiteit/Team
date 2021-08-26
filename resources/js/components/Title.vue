// <Title titleLight="hoi" titleBold="doei" subtitle="groejtes"></Title>

<template>
	<div class="title flex items-center">
		<div class="circle"></div>
		<div class="-ml-16 flex items-center">
			<NuxtLink :to="backLink" v-if="backLink" class="back-arrow mr-4"><i class="fas fa-chevron-left"></i></NuxtLink>
			<div>
				<h1>{{ titleLight }} {{ titleLight && titleBold && '- ' }} <span>{{ titleBold && titleBold }}</span></h1>
				<h2 v-if="subtitle" class="">{{ subtitle }}</h2>
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
