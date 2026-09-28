import { defineStore } from 'pinia';
import { soulshiaAPI } from '@/kernel/services/api-client/native/index.js';

const useBookmarksStore = defineStore('bookmarks_store', {
	state: function() {
		return {
			bookmarks: []
		}
	},
	actions: {
		resetBookmarks: function() {
			this.bookmarks = [];
		},
		fetchBookmarks: async function(filter = {}) {
			await soulshiaAPI().bookmarks().with(filter).sendTo('bookmarks').then((response) => {
			    this.bookmarks = response.data.data;
			}).catch((error) => {
				this.bookmarks = [];
			});
		}
	}
});

export { useBookmarksStore };