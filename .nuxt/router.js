import Vue from 'vue'
import Router from 'vue-router'
import { normalizeURL, decode } from 'ufo'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _583766a8 = () => interopDefault(import('../resources/js/pages/calendar/index.vue' /* webpackChunkName: "pages/calendar/index" */))
const _26c3e8c0 = () => interopDefault(import('../resources/js/pages/dashboard/index.vue' /* webpackChunkName: "pages/dashboard/index" */))
const _32884d2d = () => interopDefault(import('../resources/js/pages/games/index.vue' /* webpackChunkName: "pages/games/index" */))
const _25a15056 = () => interopDefault(import('../resources/js/pages/login/index.vue' /* webpackChunkName: "pages/login/index" */))
const _1adb7c56 = () => interopDefault(import('../resources/js/pages/profile/index.vue' /* webpackChunkName: "pages/profile/index" */))
const _01cb2670 = () => interopDefault(import('../resources/js/pages/login/register.vue' /* webpackChunkName: "pages/login/register" */))
const _413f13bb = () => interopDefault(import('../resources/js/pages/index.vue' /* webpackChunkName: "pages/index" */))

const emptyFn = () => {}

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: '/',
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
    path: "/calendar",
    component: _583766a8,
    name: "calendar"
  }, {
    path: "/dashboard",
    component: _26c3e8c0,
    name: "dashboard"
  }, {
    path: "/games",
    component: _32884d2d,
    name: "games"
  }, {
    path: "/login",
    component: _25a15056,
    name: "login"
  }, {
    path: "/profile",
    component: _1adb7c56,
    name: "profile"
  }, {
    path: "/login/register",
    component: _01cb2670,
    name: "login-register"
  }, {
    path: "/",
    component: _413f13bb,
    name: "index"
  }],

  fallback: false
}

export function createRouter (ssrContext, config) {
  const base = (config._app && config._app.basePath) || routerOptions.base
  const router = new Router({ ...routerOptions, base  })

  // TODO: remove in Nuxt 3
  const originalPush = router.push
  router.push = function push (location, onComplete = emptyFn, onAbort) {
    return originalPush.call(this, location, onComplete, onAbort)
  }

  const resolve = router.resolve.bind(router)
  router.resolve = (to, current, append) => {
    if (typeof to === 'string') {
      to = normalizeURL(to)
    }
    return resolve(to, current, append)
  }

  return router
}
