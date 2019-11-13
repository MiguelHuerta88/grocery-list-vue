import Vuex from 'vuex';
import Vue from 'vue';
import groceriesModule from './modules/groceries/';

Vue.use(Vuex);

export default new Vuex.Store({
	modules: {
		groceriesModule
	}
});