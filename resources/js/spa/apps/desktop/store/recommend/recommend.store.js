import { defineStore } from 'pinia';
import { soulshiaAPI } from '@/kernel/services/api-client/native/index.js';

const useRecommendStore = defineStore('recommend_store', {
    state: function() {
		return {
            lastUpdate: null,
			followRecommendations: [],
		}
	},
    getters: {
    },
    actions: {
		fetchFollowRecommendations: async function() {
			const state = this;

			await soulshiaAPI().recommendations().getFrom('follow').then((response) => {
				state.followRecommendations = response.data.data;
			});
		}
    }
});

export { useRecommendStore };
