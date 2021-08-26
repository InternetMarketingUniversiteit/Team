<template>
    <div class="navigation">
        <div class="flex justify-center">
            <NuxtLink to="/dashboard" class="navigation__item flex flex-col items-center">
                <i class="fa fa-home"></i>
                <span>Overzicht</span>
            </NuxtLink>
            <NuxtLink to="/games" class="navigation__item flex flex-col items-center">
                <i class="fa fa-gamepad"></i>
                <span>Games</span>
            </NuxtLink>
            <NuxtLink to="/calendar" class="navigation__item flex flex-col items-center">
                <i class="fa fa-calendar"></i>
                <span>Agenda</span>
            </NuxtLink>
            <NuxtLink to="/profile" class="navigation__item flex flex-col items-center">
                <i class="fa fa-user"></i>
                <span>Profile</span>
            </NuxtLink>
        </div>
    </div>
</template>
<style lang="scss">
.navigation {
    box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.08);
    position: fixed;
    background-color: white;
    z-index: 9;
    bottom: 0;
    left: 0;
    right: 0;
    &__item {
        padding: 24px;
        color: #8E8E8E;
        transition: color .2s ease;
        &:hover {
            color: #2196F3;
        }
    }
}
</style>

