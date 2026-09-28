import { defineStore } from 'pinia';
import { soulshiaAPI } from '@/kernel/services/api-client/native/index.js';

const useNotificationsStore = defineStore('mobile_notifications_store', {
    state: function() {
		return {
			isOpen: false,
			unreadCount: {
				formatted: 0,
				raw: 0
			},
			notifications: []
		}
	},
    actions: {
		openNotifications: function() {
			this.isOpen = true;
		},
		closeNotifications: function() {
			this.isOpen = false;
		},
		fetchNotifications: async function(type = 'all') {
			await soulshiaAPI().notifications().getFrom(type).then((response) => {
				this.notifications = response.data.data;
			}).catch(() => {
				this.notifications = [];
			});
		},
		fetchUnreadCount: function() {
			soulshiaAPI().notifications().getFrom('unread/count').then((response) => {
				this.unreadCount = response.data.data;
			}).catch(() => {
				this.unreadCount = {
					formatted: 0,
					raw: 0
				};
			});
		},
		deleteNotification: function(notificationId) {
			soulshiaAPI().notifications().with({
				notification_id: notificationId
			}).delete('delete');

			this.notifications = this.notifications.filter((notification) => notification.id !== notificationId);
		},
		setUnreadNotificationsCount: function(unreadCount) {
			this.unreadCount = unreadCount;
		}
    }
});

export { useNotificationsStore };