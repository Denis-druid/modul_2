jQuery(document).ready(function ($) {
    var appToken = null;

    console.log("init");

    $("#login").addClass('_inline-block');

    $("#link_reg").click(function (e){
        e.preventDefault();

        $("#login").removeClass('_inline-block');
        $("#reg").addClass('_inline-block');
    });

    $("#link-logout").click(function (e){
        e.preventDefault();

        $("#page").removeClass('_inline-block');
        $("#login").addClass('_inline-block');
    });

    $("#link_log").click(function (e){
        e.preventDefault();

        $("#reg").removeClass('_inline-block');
        $("#login").addClass('_inline-block');
    });

    $("#button_log").click(function (e){//Вход в аккаунт
        e.preventDefault();

        var phone = $("input[name='login-phone']").val();
        var password = $("input[name='login-password']").val();


        $.ajax({
            type: 'POST',
            url: 'http://localhost/api/login',
            data: {
                phone: phone,
                password: password
            },
            success: function (data) {
                appToken = data.token;

                if (appToken) {
                    initUser();
                }
            }
        });

    });

    function initUser() {

        $("#login").removeClass('_inline-block');
        $("#page").addClass('_inline-block');

        $.ajax({
            type: 'POST',
            url: 'http://localhost/api/profile',
            headers: {
                'Authorization':'Bearer ' + appToken,
            },
            success: function (data) {
                console.log(data.first_name + ' ' + data.surname);
            }
        });
    };

    $("#button_reg").click(function (e) {
        e.preventDefault();

        var first_name = $("input[name='reg-name']").val();
        var surname = $("input[name='reg-surname']").val();
        var phone = $("input[name='reg-phone']").val();
        var password = $("input[name='reg-password']").val();

        $.ajax({
            type:'POST',
            url:'http://localhost/api/signup',
            data:{
                first_name:first_name,
                surname:surname,
                phone:phone,
                password:password
            },
        });

    })



});