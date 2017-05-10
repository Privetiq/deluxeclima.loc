$(document).ready(function(){
    $("#hamb").click(function(){
        $("#menuactive").toggle();
    });
    $("#closemenu").click(function () {
        $("#menuactive").hide();
    });

    $(".callbackmenu").click(function () {
        $("#formcallback").toggle();
    });
    $("#closeform").click(function () {
        $("#formcallback").hide();
    });
});

jQuery(function($){
    $(".form-numbe").mask("+38(099)-99-99-999");
});


// var hamb = document.querySelector("#hamb");
// var menuactive = document.querySelector("#menuactive");
// hamb.onclick = function () {
//     if (menuactive.style.display = 'none') {
//         menuactive.style.display = 'block';
//     } else {
//         menuactive.style.display = '';
//     }
// };


// function print_object(obj) {
//     var res = '<ul>';
//
//     for(i in obj) {
//         res += '<li><b>' + i + '</b>: ' + obj[i] + '</li>';
//     }
//     res += '</ul>';
//     document.write(res);
// }