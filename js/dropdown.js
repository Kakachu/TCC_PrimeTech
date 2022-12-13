var myDropdown = document.getElementsByClassName('dropdown-toggle')
for (i=0; i<myDropdown.length; i ++) {
    myDropdown[i].addEventListener('click', function () {
        var el = this.nextElementSibling;
        el.style.display = el.style.display == 'block' ? 'none' : 'block';
    });
}