<template>
    <StoryShareModal
        v-if="state.isShareModalOpen"
        v-on:cancel="handleStoryShareCancel"
    ></StoryShareModal>
    <StoryContentModal
        v-if="state.isContentModalOpen"
        v-on:hide="handleHideContent"
    ></StoryContentModal>
    <StoryViewsModal
        v-if="state.isViewsModalOpen"
        v-on:hide="handleHideViews"
    ></StoryViewsModal>
</template>

<script>
import { defineComponent, onMounted, reactive, onUnmounted } from "vue";
import { soulshiaEventBus } from "@/kernel/events/bus/index.js";

import StoryViewsModal from "@D/views/stories/parts/modals/StoryViewsModal.vue";
import StoryShareModal from "@D/views/stories/parts/modals/StoryShareModal.vue";
import StoryContentModal from "@D/views/stories/parts/modals/StoryContentModal.vue";

export default defineComponent({
    setup: function () {
        const state = reactive({
            isShareModalOpen: false,
            isContentModalOpen: false,
            isViewsModalOpen: false,
        });

        const handleStoryShare = () => {
            state.isShareModalOpen = true;
            soulshiaEventBus.emit("story:pause");
        };

        const handleShowContent = () => {
            state.isContentModalOpen = true;
            soulshiaEventBus.emit("story:pause");
        };

        const handleShowViews = () => {
            state.isViewsModalOpen = true;
            soulshiaEventBus.emit("story:pause");
        };

        onMounted(() => {
            soulshiaEventBus.on("story:share", handleStoryShare);
            soulshiaEventBus.on("story:show-content", handleShowContent);
            soulshiaEventBus.on("story:show-views", handleShowViews);
        });

        onUnmounted(() => {
            soulshiaEventBus.off("story:share", handleStoryShare);
            soulshiaEventBus.off("story:show-content", handleShowContent);
            soulshiaEventBus.off("story:show-views", handleShowViews);
        });

        return {
            state: state,
            handleStoryShareCancel: () => {
                soulshiaEventBus.emit("story:play");
                state.isShareModalOpen = false;
            },
            handleHideContent: () => {
                state.isContentModalOpen = false;
                soulshiaEventBus.emit("story:play");
            },
            handleHideViews: () => {
                state.isViewsModalOpen = false;
                soulshiaEventBus.emit("story:play");
            },
        };
    },
    components: {
        StoryViewsModal: StoryViewsModal,
        StoryShareModal: StoryShareModal,
        StoryContentModal: StoryContentModal,
    },
});
</script>
