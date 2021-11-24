const appHeight = () => document.documentElement.style.setProperty( "--app-height", `${window.innerHeight}px` );
window.addEventListener("resize", appHeight);
appHeight();