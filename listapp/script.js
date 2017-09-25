$('#btnAdd').click(function(){
    $('#list').append("<li><input type='text' class='input'></li>");
    $('#list').children().children().last().focus();
/*
    $("#list .input").slice(0,-1).each(function(index){
        $(this).replaceWith("<li>" + $(this).val() +"</li>");
    });
*/
});

$("#list .input").focusout(function(){
            $(this).replaceWith("<li>" + $(this).val() +"</li>");

});
