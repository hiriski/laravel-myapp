import { AnhOi, footer, overflay } from '../global_element';
import setOverlay from '../components/overlay';
import { isSingleBlog } from '../routes_function';


/** Floating share parent element */
const floatingShareElem = document.querySelector("#_psh");


/** Line Number for pre tag */
(function () {
    for (var tagPre = document.querySelectorAll('pre[class*="language-"]:not([data-line-numbers="false"]'),
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
const blogCode = document.querySelectorAll('pre[class*="language-"][data-filename]');
if(blogCode) {
    for(var i = 0; i < blogCode.length; i++) {
        const codeFileName = blogCode[i].dataset.filename;
        const newElem = document.createElement('span');
        newElem.className = "code-filename";
        newElem.textContent = codeFileName;

        blogCode[i].appendChild(newElem);
    }
}


/** Floating Share Button Blog */
if(floatingShareElem) {
    let btnFloatingShare = floatingShareElem.querySelector("div[class^=s] > .a");
    let icon = floatingShareElem.querySelector("i");
    btnFloatingShare.addEventListener('click', () => {
        floatingShare(floatingShareElem, btnFloatingShare, icon);
    });
}

const setFloatingShare = (parent, btn, icon, callback) => {
    parent.className = parent.className == "x" ? 'show' : 'x';
    icon.textContent = parent.className == "x" ? 'share' : 'close';
    /** kirimkan nama class parent saat ini ke dalam callback */
    if(typeof callback == "function") {
        callback(parent.className);
    }
}

const floatingShare = (parent, btn, icon) => {
    /** Terima nama class parent floating share untuk di uji */
    setFloatingShare(parent, btn, icon, function(floatingShareClassName) {
        if(floatingShareClassName === "show") {
            setOverlay('true');
            /** jika overlay di click click juga share buttonnya */
            overflay.addEventListener('click', (e) => {
                e.preventDefault();
                btn.click();
            });
        } else {
            setOverlay('false');
        }
    });
}



/** Show and hide floating share button (when scroll) */
if(isSingleBlog()) {
    window.addEventListener('scroll', () => {
        let relatedPost = document.getElementById('RP');
        let batasBawah  = AnhOi.clientHeight - relatedPost.clientHeight - footer.clientHeight - 500;
        if(window.scrollY > 350) {
            showFloatingShare('true');
            if(window.scrollY > batasBawah) {
                showFloatingShare('false');
                // console.log('Masuk sini...');
            }
        }
        else {
            showFloatingShare('false');
        }
    });


    const showFloatingShare = (arg) => {
        floatingShareElem.dataset.show = arg;
    }
}