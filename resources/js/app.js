import './bootstrap';
import 'toastr/build/toastr.css';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import toastr from 'toastr';

window.toastr = toastr;
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
