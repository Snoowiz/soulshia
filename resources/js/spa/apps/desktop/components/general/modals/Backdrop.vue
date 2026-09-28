<template>
    <div
        class="fixed inset-0 z-50 bg-black/50 overflow-y-auto"
        v-bind:class="[hide ? 'invisible' : '']"
    >
        <slot></slot>
    </div>
</template>

<script>
import { defineComponent, onMounted, onUnmounted, ref } from "vue";
import { soulshiaEventBus } from "@/kernel/events/bus/index.js";

export default defineComponent({
    setup: function () {
        const hide = ref(false);

        const hideBackdrop = () => {
            hide.value = true;
        };

        const showBackdrop = () => {
            hide.value = false;
        };

        onMounted(() => {
            soulshiaEventBus.on("lightbox:opened", hideBackdrop);
            soulshiaEventBus.on("lightbox:closed", showBackdrop);
        });

        onUnmounted(() => {
            soulshiaEventBus.off("lightbox:opened", hideBackdrop);
            soulshiaEventBus.off("lightbox:closed", showBackdrop);
        });

        return {
            hide: hide,
        };
    },
});
</script>
