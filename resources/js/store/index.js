import Vue from 'vue';
import Vuex from 'vuex';
import VuexORM, { Database } from '@vuex-orm/core';
import VuexORMAxios from '@vuex-orm/plugin-axios';
import axios from 'axios';
import user from '../models/user';

Vue.use(Vuex);

VuexORM.use(VuexORMAxios, { axios });

const database = new VuexORM.Database();

database.register(user);

const state = {};
const getters = {};
const mutations = {};
const actions = {};

/*export default new Vuex.Store({
    plugins: [VuexORM.install(database, { namespace: 'db' })],
    state,
    mutations,
    actions,
    getters
});*/

export const plugins = [
    VuexORM.install(database, { namespace: 'db' })
];
