$(document).ready(function(){
    var index = 0,
    items = $('.container div'),
    total = items.length;

    function slide(){
        var item = $('.container div').eq(index);
        items.hide();
        item.css('display','block');
    }

    var autoslide = setInterval(function(){
        index += 1;
        if(index > total - 1) index = 0;
        slide();
    }, 1500);
});