(function(){
    var $menu = document.querySelector('#area-menu');

    window.addEventListener('scroll', setupNav);

    function setupNav(){
        var Yscroll = getYscoll()

        if(Yscroll > 100 && !hasClassFx()){
            console.log('adiciona');
            document.body.classList.add('fx');
        }
        if(Yscroll <= 100 && hasClassFx()){
            console.log('remove');
            document.body.classList.remove('fx');
        }
    }

    function getYscoll(){
        return window.pageYOffset;
    }

function hasClassFx(){
    return !!document.querySelector('.fx')
}
})();
