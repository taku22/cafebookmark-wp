import '../stylesheets/main.scss';
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/swiper-bundle.css';
import snsLinkMenu  from './snsLinkMenu.js';
import hamburgerMenu  from './hamburgerMenu.js';
import {config, dom, library} from '@fortawesome/fontawesome-svg-core';
import {faTwitter,faLine,faInstagramSquare,faFacebookSquare,faPinterestSquare,faYoutube} from '@fortawesome/free-brands-svg-icons';


library.add(faTwitter,faLine,faInstagramSquare,faFacebookSquare,faPinterestSquare,faYoutube);

dom.watch();
snsLinkMenu();
hamburgerMenu();

Swiper.use([Navigation, Pagination]);

//swiper config
const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
