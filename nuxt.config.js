export default {
    srcDir: 'resources/js/',
    buildModules: [
      '@nuxtjs/vuetify',
    ],
    css: [
      // SCSS file in the project
      '~/../../node_modules/vuetify/src/styles/styles.sass'
    ],
    components: true,
    head: {
        link: [
            {
                rel: 'stylesheet',
                href: 'https://use.fontawesome.com/releases/v5.0.13/css/all.css'
            },
            {
                rel: 'stylesheet',
                href: 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'
            }
        ],
    }
}
