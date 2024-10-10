import './bootstrap';

import Alpine from 'alpinejs';
import './ajax';
import {ajax} from './ajax';
import './favorite';
import {favorite} from './favorite';
import './jquery'
window.Alpine = Alpine;

Alpine.start();
ajax();
favorite();



