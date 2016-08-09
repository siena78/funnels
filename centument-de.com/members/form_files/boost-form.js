$(document).ready(function() {
    var sourceDiv = $('#statusMsg').html();

    function SplashScreen(data) {
        $('#boost-form').fadeOut();
        $('#SplashScreen').html('<div class="logo"><img src="http://www.binaryads.co/logos/' + data.broker_id + '.png" /></div><div class="bold">Your Account Has Been Registered With ' + data.name + '</div><img style="max-width: 90%; margin:30px 0;" border="0" src="img/barloader.gif" alt="" /><div class="footer">Redirecting To ' + data.domain_name + ' Software...</div>');
        setTimeout(function () {
            $('#SplashScreen').fadeIn();
        }, 200);
        if ($("#autoSubmitScript").val()) { // Auto Submit Form
            var autoSubmitScriptTime = 6000;
            var strUrl = $("#autoSubmitScript").val();
            newUrl = strUrl.replace("xxxemailxxx", $("#email").val());
            newUrl = newUrl.replace("xxxfirstnamexxx", $("#FirstName").val());
            newUrl = newUrl.replace("xxxphonexxx", $("#kid").val() + $("#phone").val());
            $('body').append($('<iframe></iframe>', {src: newUrl, style: 'display:none'}));
        } else var autoSubmitScriptTime = 3000;
        setTimeout(function () {
            window.top.location.href = "/";
        }, autoSubmitScriptTime);
    }

    function ForgotForm() {
        $('#boost-form').fadeOut();
        $("#loginForm").fadeOut();
        setTimeout(function () {
            $('#forgotForm').fadeIn();
        }, 500);
    }

    function LoginForm(delay) {
        if (!delay)delay = 500;
        $('#boost-form').fadeOut();
        $("#forgotForm").fadeOut();
        setTimeout(function () {
            $('#loginForm').fadeIn();
        }, delay);
    }

    function RegisterForm() {
        $('#loginForm').fadeOut();
        $("#forgotForm").fadeOut();
        $('#boost-form').show();
    }


    function popMsg(msg) {
        $("#statusMsg").html(msg);
        $('#regStatus').fadeIn();
        setTimeout(function () {
            $('#regStatus').fadeOut();
        }, 4000);
    }
});