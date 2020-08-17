var btn_collapse = document.getElementById('coll');
btn_collapse.onclick = function() {
    var div = document.getElementById('layer');
    var div_height = getComputedStyle(div).height;
    var nav = document.getElementById('nav');

    var nav_height = getComputedStyle(nav).height;

    if (div_height != nav_height) {
        nav.style.height = div_height;
        var nav_height = getComputedStyle(nav).height;
    } else {
        nav.setAttribute('style', 'max-height: 50px, height:50px');
    }
}