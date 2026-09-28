import useToastNotificationStore from '@D/store/toast/toast.store.js';
import { soulshiaSounds } from '@/kernel/services/sounds/index.js';

const toastSuccess = (message = '', duration = 5000) => {
    const toastStore = useToastNotificationStore();
    toastStore.add(message, duration);
    
    try {
        soulshiaSounds.uiFeedback();
    } catch (error) {
        console.log(error);
    }
};

const toastError = (message = '', duration = 5000) => {
    const toastStore = useToastNotificationStore();
    toastStore.add(message, duration, 'error');
    
    try {
        soulshiaSounds.uiFeedback();
    } catch (error) {
        console.log(error);
    }
};

export { toastSuccess, toastError };