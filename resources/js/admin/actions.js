const adminArea = document.getElementById('admin-area');
const mainElement = document.querySelector('main#main');
const btnToggleSidebar = document.getElementById('btnToggleSidebar');
const sidebarElem = document.getElementById('sidebar');

if(btnToggleSidebar) {
    btnToggleSidebar.addEventListener('click', function(e) {

        const fullWidth = () => {
            sidebarElem.className = 'hideme';
            mainElement.className = 'full-width';
        }
        const layoutDefault = () => {
            sidebarElem.className = 'left';
            mainElement.className = '';
        }

        e.preventDefault();
        /** cek dulu layout saat ini */
        if((sidebarElem.className === 'hideme') && (mainElement.className === 'full-width')) {
            layoutDefault();
        } else {
            fullWidth();
        }
    })
}