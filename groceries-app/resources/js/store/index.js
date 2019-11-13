import Vuex from 'vuex';
import Vue from 'vue';
import groceriesModule from './groceries/groceriesModule';

Vue.use(Vuex);

export default new Vuex.store({
	modules: {
		groceriesModule
	}
});