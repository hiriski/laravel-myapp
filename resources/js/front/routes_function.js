function isIndex() {
    if(currentRouteName === "index") {
        return true;
    }
}

function isAbout() {
    if(currentRouteName === "about") {
        return true;
    }
}

function isSingleBlog() {
    if(currentRouteName === "blog.show") {
        return true;
    }
}

export {isIndex, isAbout, isSingleBlog};