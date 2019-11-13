import axios from 'axios';
import { API_URL } from '../../../config/';

const state = {
	groceries: [],
	processing: false,
};

const mutations = {
	SET_PROCESSING(state, payload) {
		state.processing = payload;
	},
	SET_GROCERIES(state, payload) {
		state.groceries =  payload;
	},
	DELETE_ITEM(state, payload) {
		let groceries = state.groceries.filter(item => {
            return payload !== item.id;
        });
		state.groceries = groceries;
	}
};

const actions = {
	async groceries({ commit }) {
		commit('SET_PROCESSING',true);
		// begin to pull call ajax
		await axios.get(API_URL + '/groceries').then(response => {
			// commit the update to state
			commit('SET_GROCERIES',response.data.data);

			commit('SET_PROCESSING', false);
		}).catch(error => {
			// set back the processing to false
			commit('SET_PROCESSING', false);
		}); 
	},
	deleteGrocery({ commit }, itemId) {
		// send the request out to delete
		commit('SET_PROCESSING', true);
		return new Promise((resolve, reject) => {
			axios.get(API_URL + '/grocery/delete/' + itemId).then(response => {
				commit('DELETE_ITEM', itemId);
				//commit('SET_PROCESSING', false);
				resolve(true);
			}).catch(error => {
				//commit('SET_PROCESSING', false);
				resolve(true);
			});
		});
	}
};

const getters = {
	getGroceries(state) {
		return state.groceries;
	}
};

const groceriesModule = {
	state,
	mutations,
	actions,
	getters
};

export default groceriesModule;