import axios from 'axios';
import Alpine from 'alpinejs';
import '@lottiefiles/lottie-player';
import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

// axios
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// alpine
window.Alpine = Alpine;
Alpine.start();

// swiper
const getSlidesPerView = (query, slideWidth, maxSlides) => {
    const clientWidth = document.querySelector(query).clientWidth;
    return Math.min(maxSlides, clientWidth / slideWidth);
}
{
    // program recommendation swiper
    const query = '#pr-swiper'
    const swiper = new Swiper(query, {
        modules: [Pagination],
        slidesPerView: getSlidesPerView(query, 250, 4),
        spaceBetween: 10,
        breakpoints: {
            1024: {
                slidesPerView: 4
            }
        },
        pagination: {
            el: `${query} .swiper-pagination`,
            clickable: true,
        },
    });
    const observer = new ResizeObserver(() => {
        swiper.params.slidesPerView = getSlidesPerView(query, 250, 4);
        swiper.update();
    });
    observer.observe(document.querySelector(query))
}