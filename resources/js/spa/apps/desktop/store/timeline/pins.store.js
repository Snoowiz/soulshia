import { defineStore } from 'pinia';
import { soulshiaAPI } from '@/kernel/services/api-client/native/index.js';

export const usePinsStore = defineStore('pins_store', {
	deleteAware: true,
    state: function() {
        return {
            posts: []
        }
    },
    actions: {
        fetchGlobalPins: function() {
           	soulshiaAPI().pins().getFrom('posts/global').then((response) => {
                this.posts = response.data.data;
            }).catch((error) => {
                this.posts = [];
            });
        }
    }
})