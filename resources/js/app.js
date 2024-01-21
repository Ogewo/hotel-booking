import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


function onToggleMenu(e){
   e.name = e.name === 'menu' ? 'close' : 'menu'
}
