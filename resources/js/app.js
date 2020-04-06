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


/** Line Number for pre tag */
(function () {
    for (var tagPre = document.querySelectorAll("pre"),
            preLength = tagPre.length,
            a = 0; preLength > a; a++) {
        tagPre[a].innerHTML = '<span class="line-number"></span>' + tagPre[a].innerHTML;
        for (var s = tagPre[a].innerHTML.split(/\n/).length, r = 0; s > r; r++) {
            var l = tagPre[a].getElementsByTagName("span")[0];
            l.innerHTML += "<span>" + ( r + 1 ) + "</span>";
        }
    }
})();


/** Code Data File Name */
const blogCode = document.querySelectorAll('pre[class*="language-"]');
if(blogCode) {
    for(var i = 0; i < blogCode.length; i++) {
        const codeFileName = blogCode[i].dataset.filename;
        const newElem = document.createElement('span');
        newElem.className = "code-filename";
        newElem.textContent = codeFileName;

        blogCode[i].appendChild(newElem);
    }
}