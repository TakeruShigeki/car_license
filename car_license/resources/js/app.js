import './bootstrap';

import Alpine from 'alpinejs';
import './ajax';
import {ajax} from './ajax';
import './jquery'
window.Alpine = Alpine;

Alpine.start();
ajax();
