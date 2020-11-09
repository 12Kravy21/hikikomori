document.querySelector('.to-top').addEventListener('click', ()=>{
    let scrollT;
    GoToTop();
});

function GoToTop() {
    let top = window.scrollY;
    if(top > 0) {
        window.scrollBy(0,-45);
        scrollT = setTimeout('GoToTop()', 0.1);
    } else clearTimeout(scrollT);
}