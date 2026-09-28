import mitt from 'mitt';

const swEventBus = mitt();
const soulshiaEventBus = swEventBus;

export { swEventBus, soulshiaEventBus };