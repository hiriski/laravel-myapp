import './front/components/overlay';
import './front/components/nav';
import './front/pages/home';
import './front/pages/about';
import './front/pages/blog';
import './front/pages/template-page';

// const removePreload = () => {
//     setTimeout(() => {
//         document.getElementById("_x0").className = 'removed';
//         console.log("Preload Removed!");
//     }, 500);
// }


/** Scroll */
// window.addEventListener('scroll', () => {
//     let userScrollTo = window.scrollY;
//     if(userScrollTo > 100) {
//         moveNavigation('left');
//         if(isIndex()) {
//             layoutStyle('left');
//         }
//     }
//     if(userScrollTo > 400) {
//         if(currentRouteName === 'blog.show') {
//             showFloatingShare();
//         }
//     }
//     else {
//         moveNavigation('top');
//         if(currentRouteName === 'blog.show') {
//             removeFloatingShare();
//         }
//         else if(currentRouteName === 'index') {
//             layoutStyle('center');
//         }
//     }
// });