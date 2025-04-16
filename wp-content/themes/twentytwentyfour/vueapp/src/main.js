import { createApp } from 'vue'
import App from './App.vue'
import './styles/main.scss'

const mountEl = document.querySelector('#my-vue-app')

// Only mount the app if the target element exists on the page
if (mountEl) {
	// You could pass data from WP to Vue via dataset attributes on mountEl
	// const initialData = mountEl.dataset.initialMessage || 'Default from JS';

	createApp(App).mount('#my-vue-app')

	console.log('Vue app mounted successfully!')

	// Example: Accessing data passed via wp_localize_script (see Phase 3)
	if (typeof myVueAppData !== 'undefined') {
		console.log('Data from WordPress:', myVueAppData)
		// You might use this data within your component, maybe via provide/inject or a simple global store pattern
	}
} else {
	console.warn('Vue mount element #my-vue-app not found.')
}
