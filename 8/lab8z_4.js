
$(document).mousemove(function(e){
    console.log('Вызван обработчик для события mousemove.');
    var X = e.pageX;
    var Y = e.pageY;
    $('div').html("X: " + X + " Y: " + Y); 
}); 