/**
 * @description This component is used to copy the code to the clipboard.
 * Naming convention: swUI<ComponentName>
 * Example: swUICode
 */

window.addEventListener('alpine:init', () => {
	const codeComponent = () => {
		return {
			copying: false,
			copy: async function() {
				this.copying = true;

				await navigator.clipboard.writeText(this.$refs.code.textContent);
				
				setTimeout(() => {
					this.copying = false;
				}, 1000);
			}
		};
	};

	Alpine.data('swUICode', codeComponent);
	Alpine.data('soulshiaUICode', codeComponent);
});