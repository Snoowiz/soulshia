import { defineStore } from 'pinia';
import { soulshiaAPI } from '@/kernel/services/api-client/native/index.js';

const useRelationsStore = defineStore('relations_store', {
    state: function() {
        return {
            blockedUsers: []
        }
    },
    actions: {
        muteUser: async function(userId) {
            return await soulshiaAPI().relations().with({
                muted_id: userId
            }).sendTo('mute/user').then((response) => {
                return response.data.data;
            }).catch((error) => {
                return null;
            });
        },
        blockUser: async function(userId) {
            return await soulshiaAPI().relations().with({
                blocked_id: userId
            }).sendTo('block/user').then((response) => {
                return response.data.data;
            }).catch((error) => {
                return null;
            });
        },
        fetchBlockedUsers: async function() {
            return await soulshiaAPI().relations().getFrom('block/list').then((response) => {
                this.blockedUsers = response.data.data;
            }).catch((error) => {
                this.blockedUsers = [];
            });
        }
    }
});

export { useRelationsStore };
