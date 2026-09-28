<template>
	<Backdrop>
		<div class="ml-navbar py-top-offset">
			<StoriesEditor></StoriesEditor>
		</div>
	</Backdrop>
</template>

<script>
	import { defineComponent } from 'vue';
	import SoulshiaAttribution from '@D/components/attributions/SoulshiaAttribution.vue';
    import Backdrop from '@D/components/general/modals/Backdrop.vue';
	import StoriesEditor from '@D/components/stories/editor/StoriesEditor.vue';

	export default defineComponent({
		components: {
			StoriesEditor: StoriesEditor,
			SoulshiaAttribution: SoulshiaAttribution,
			Backdrop: Backdrop
		}
	});
</script>