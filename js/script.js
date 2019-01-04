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
    $('#evenementLink').on('click',function(){
        $.ajax({
            url: 'evenements.html'
         }).done(function(d){
             $('#container').hide().html(d).fadeIn(1000);
             $(location).attr('hash','evenements');
         });
    });
    $('#contactLink').on('click',function(){
        $.ajax({
            url: 'contact.html'
         }).done(function(d){
             $('#container').hide().html(d).fadeIn(1000);
             $(location).attr('hash','contact');
         });
    });
});