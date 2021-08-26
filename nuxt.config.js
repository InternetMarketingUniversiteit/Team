export default {
    router: {
        base: '/dashboard/'
    },
    srcDir: 'resources/js/',
    buildModules: [
      '@nuxtjs/vuetify',
    ],
    css: [
      // SCSS file in the project
      '~/../../node_modules/vuetify/src/styles/styles.sass'
    ]
}
