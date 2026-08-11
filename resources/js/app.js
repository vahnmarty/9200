import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

// Default theme
import '@splidejs/splide/css';


// or other themes
import '@splidejs/splide/css/skyblue';
import '@splidejs/splide/css/sea-green';


// or only core styles
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';



const splide = new Splide('.splide', {
    type: 'loop',

    // Let slides have their natural width
    autoWidth: true,

    // Smooth continuous movement
    drag: false,

    arrows: false,
    pagination: false,

    gap: '1rem',

    autoScroll: {
        speed: 1,
        pauseOnHover: false,
        pauseOnFocus: false,
    },
});

splide.mount({ AutoScroll });

// Pause + focus on hovered slide
// splide.on('mounted', () => {
//     splide.Components.Elements.slides.forEach((slide) => {
//         slide.addEventListener('mouseenter', () => {
//             splide.Components.AutoScroll.pause();

//             const index = Number(slide.dataset.index);

//             if (!Number.isNaN(index)) {
//                 splide.go(index);
//             }
//         });

//         slide.addEventListener('mouseleave', () => {
//             splide.Components.AutoScroll.play();
//         });
//     });
// });

// splide.mount();
