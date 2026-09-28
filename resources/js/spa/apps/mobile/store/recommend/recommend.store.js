import { defineStore } from 'pinia';
import { soulshiaAPI } from '@/kernel/services/api-client/native/index.js';

const useRecommendStore = defineStore('mobile_recommend_store', {
    actions: {
		fetchFollowRecommendations: async function() {
			return await soulshiaAPI().recommendations().getFrom('follow').then((response) => {
				return response.data.data;
			}).catch((error) => {
				return [];
			});
		}
    }
});

export { useRecommendStore };