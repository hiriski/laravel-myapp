const breakpoint = {
    desktop     : 1366,
    laptop      : 1000,
    tablet      : 768,
    mobile_lg   : 640,
    mobile      : 480,
    mobile_sm   : 360
}

/** Media Screen Width */
const isMediaWidth = (breakpointWidth) => {
    if(window.outerWidth < breakpointWidth) {
        return true;
    }
}

/** Media Screen Height */
const isMediaHeight = (breakpointHeight) => {
    if(window.outerWidth < breakpointHeight) {
        return true;
    }
}


/** functions is media queries */
// tablet
const isTablet = () => {
    if(isMediaWidth(breakpoint.tablet)) {
        return true;
    }
}

// mobile
const isMobileLg = () => {
    if(isMediaWidth(breakpoint.mobile_lg)) {
        return true;
    }
}


// mobile
const isMobile = () => {
    if(isMediaWidth(breakpoint.mobile)) {
        return true;
    }
}

export { breakpoint, isTablet, isMobileLg, isMobile }