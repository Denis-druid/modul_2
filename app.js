jQuery(document).ready(function ($) {
    var appToken = null;

    console.log("init");

    $("#login").addClass('_inline-block');

    $("#link_reg").click(function (e){
        e.preventDefault();

        $("#login").removeClass('_inline-block');
        $("#reg").addClass('_inline-block');
    });

    $("#link_log").click(function (e){
        e.preventDefault();

        $("#reg").removeClass('_inline-block');
        $("#login").addClass('_inline-block');
    });

    $("#button_log").click(function (e){
        e.preventDefault();

        var phone = $("input[name ='login_phone']").val();
        var password = $("input[name ='login_password']").val();

        $.ajax({
            type: 'POST',
            url: '/api/login',
            data: {
                phone: phone,
                password: password
            },
            success: function(data){
                appToken = data.token;
                console.log(appToken);
            }
        })
    });


});