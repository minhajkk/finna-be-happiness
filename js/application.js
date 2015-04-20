$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).attr("value");
        var ajaxurl = 'action.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            $(".full").css({"background-image":"url(" + response + ")"});

        });
    });
});