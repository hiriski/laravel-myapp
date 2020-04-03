const changeTitle = () => {
    let title = document.querySelector('title');
    title.textContent = String.fromCodePoint(0x211B, 0x1D4BE, 0x1D4C8, 0x1D4C0, 0x1D4BE);
}

window.addEventListener('DOMContentLoaded', () => {
    removePreload();
    // changeTitle();
})

const removePreload = () => {
    setTimeout(() => {
        document.getElementById("_x0").className = 'removed';
        console.log("Preload Removed!");
    }, 500);
}