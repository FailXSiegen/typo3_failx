var scrollPosition = window.scrollY
var headerContainer = document.getElementById('head')
if (scrollPosition >= 10) {
    headerContainer.classList.add('sticky-top')
    headerContainer.classList.add('minify')
} else {
    headerContainer.classList.remove('sticky-top')
    headerContainer.classList.remove('minify')
}
window.addEventListener('scroll', function() {
    scrollPosition = window.scrollY
    if (scrollPosition >= 1) {
        headerContainer.classList.add('sticky-top')
        headerContainer.classList.add('minify')
    } else {
        headerContainer.classList.remove('sticky-top')
        headerContainer.classList.remove('minify')
    }
})