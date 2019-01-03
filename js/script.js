$(document).ready(function(){
    //alert("toto");
    $('#global').change( function(){
        console.log('resized');
    });
    $('#evenementLink').on('click',function(){
        $.ajax({
            url: 'evenements.html'
         }).done(function(d){
             alert(JSON.stringify(d));
         });
    });
});