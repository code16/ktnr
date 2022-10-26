import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import './components/scroll-carousel';

window.Alpine = Alpine;

Alpine.plugin(collapse);
Alpine.start();
