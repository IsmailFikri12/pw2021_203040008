const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);

const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
    indicators: false,
    height: 400,
    transition: 600,
    interval: 3000
});

const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);

const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
    scrollOffset: 50
});

const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// Hilangkan tombol cari
tombolCari.style.display = 'none';

// Event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function() {
    // AJAX
    // xmlhttprequest
    // const xhr = new XMLHttpRequest();
    // xhr.onreadystatechange = function() {
    // if (xhr.readyState == 4 && xhr.status == 200) {
    // container.innerHTML = xhr.responseText;
    // }
    // };
    // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
    // xhr.send();

    //fetch()
    fetch('ajax/ajax_index.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));
});