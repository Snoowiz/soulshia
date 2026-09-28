import { Howl } from 'howler';

const swSounds = {
	sounds: embedder('config.sounds'),
	activeChatMessageReceived: function() {
		swSounds.playSound(swSounds.sounds.chat.active_chat_message_received);
	},
	backgroundChatMessageReceived: function() {
		swSounds.playSound(swSounds.sounds.chat.background_chat_message_received);
	},
	chatMessageSent: function() {
		swSounds.playSound(swSounds.sounds.chat.chat_message_sent);
	},
	notificationReceived: function() {
		swSounds.playSound(swSounds.sounds.notification.received);
	},
	uiFeedback: function() {
		swSounds.playSound(swSounds.sounds.notification.ui_feedback);
	},
	playSound: function(soundSourceUrl) {
		let sound = new Howl({
			src: [soundSourceUrl],
			volume: 0.5
		});

		sound.play();
	}
};

const soulshiaSounds = swSounds;

export { swSounds, soulshiaSounds };