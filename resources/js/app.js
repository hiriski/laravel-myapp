const changeTitle = () => {
    let title = document.querySelector('title');
    title.textContent = String.fromCodePoint(0x211B, 0x1D4BE, 0x1D4C8, 0x1D4C0, 0x1D4BE);
}

window.addEventListener('DOMContentLoaded', () => {
    changeTitle();
})