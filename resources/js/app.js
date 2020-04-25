import './front/components/overlay';
import './front/components/nav';
import './front/pages/home';
import './front/pages/about';
import './front/pages/blog';
import './front/pages/template-page';
import './front/pages/contact';




/** Rencana akan membuat fungsi yang dimana ketika window di rezize melebihi batas, misal ukuran tablet kemudian di rezie ke ukuran mobile maka window akan reload secara otomatis */

const windowResized = (currentWidth) => {
    console.log(`current width is :  ${currentWidth}`);
}

window.addEventListener('DOMContentLoaded', () => {
    let currentWindowWidth = window.innerHeight;
    windowResized(currentWindowWidth);
});