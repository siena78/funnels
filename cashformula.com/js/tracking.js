;(function() {
"use strict";

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
            return null;
        }
        else{
            return results[1] || 0;
        }
    }


    // save tracking param
    if ($.urlParam('click')) {
        $.cookie('click', $.urlParam('click'), { expires: 30, path: '/' });
    }


    $('.js-subscription-form').submit(function() {

        // store user data
        localStorage.setItem('firstName', $(this).find('input[name=name]').val());
        localStorage.setItem('email', $(this).find('input[name=email]').val());
    });

    $(document).ready(function() {
        var sourceLink = 'https://roboturl.localhost/?token=1&signUp=1&shortForm=1&countryCode=DE';

        if (localStorage.getItem('firstName')) {
            sourceLink += '&firstName=' + localStorage.getItem('firstName');
        }

        if (localStorage.getItem('email')) {
            sourceLink += '&email=' + localStorage.getItem('email');
        }

        if ($.cookie('click')) {
            sourceLink += '&clickId=' + $.cookie('click');
        }

        $('.js-registration-iframe').html('<iframe id="regform" scrolling="no" frameborder="0" allowTransparency="true" src=' + sourceLink + ' width="100%" height="450"></iframe>');  
    });
})();
