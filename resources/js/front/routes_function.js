function isIndex() {
  if(currentRouteName === "index") {
    return true;
  }
}

function isBlogIndex() {
  if(currentRouteName === "blog.index") {
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

function isTemplate() {
  if(currentRouteName === "theme.show") {
    return true;
  }
}

function isContact() {
  if(currentRouteName === "contact.index") {
    return true;
  }
}

export {isIndex, isBlogIndex, isAbout, isSingleBlog, isTemplate, isContact};