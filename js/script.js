
function goFunc(wh){
    $.ajax({
        url: wh+'.html'
     }).done(function(d){
         $('#container').hide().html(d).fadeIn(1000);
         $(location).attr('hash',wh);
     });
};

function eventFunc(){
    goFunc("evenements");
};
function contactFunc(){
    goFunc("contact");
};
function liensFunc(){
    goFunc("liens");
};

$(document).ready(function(){
    //alert("toto");
    var hash = $(location).attr('hash').replace('#','');
    
    
    if(hash){
        $.ajax({
            url: hash+'.html'
        }).done(function(d){
             $('#container').hide().html(d).fadeIn(1000);
         });
    }else{
        $('#container').fadeIn(1000);
    }


    $('#global').change( function(){
        console.log('resized');
    });
    $('#evenementLink').on('click',eventFunc);
    $('#evenementLink2').on('click',eventFunc);
    $('#contactLink').on('click',contactFunc);
    $('#liensLink').on('click',liensFunc);
    $('#liensLink2').on('click',liensFunc);
    
});




