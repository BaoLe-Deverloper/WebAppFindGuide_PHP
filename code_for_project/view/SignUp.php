
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp FindGuide</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/plugins/intlTelInput.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet" />
</head>
<body>


    <div class="limiter">
        <div class="container-login100" style="background-image:url(img/backgroudLogin.jpg); background-size:cover; ">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="SignUp" method="post">

                    <span class="login100-form-title p-b-26">
                        Sign Up
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Enter Your Name">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100" data-placeholder="Name"></span>
                    </div>
                    <div class="wrap-input100 valiate-input">
                        <input class="" id="phone" type="tel" name="" placeholder="Enter Phone Number">

                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password Config">
                        <span class="btn-show-pass">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                        <input class="input100" type="password" name="passconfig">
                        <span class="focus-input100" data-placeholder="Config Password"></span>
                    </div>

                    <div class="container-login100-form-btn p-b-26">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                SignUp
                            </button>
                        </div>
                    </div>

                    <div class="text-center">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins/intlTelInput-jquery.js"></script>
    <script>
        $("#phone").intlTelInput({
            separateDialCode : true,
            initialCountry: "auto",
            hiddenInput: "phone",
            geoIpLookup: function (callback) {
                jQuery.get('https://ipinfo.io', function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.5/js/utils.js"
        });
        
    </script>
    <script>

        (function ($) {
            "use strict";
    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function () {
        if($(this).val().trim() != "") {
            $(this).addClass('has-val');
        }
        else {
            $(this).removeClass('has-val');
        }
    })    


/*==================================================================
[ Validate ]*/
var input = $('.validate-input .input100');

$('.validate-form').on('submit',function(){
    var check = true;

    for(var i=0; i<input.length; i++) {
        if(validate(input[i]) == false){
            showValidate(input[i]);
            check=false;
        }
    }

    return check;
});


$('.validate-form .input100').each(function(){
    $(this).focus(function(){
        hideValidate(this);
    });
});
function validate (input) {
    if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
        if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            return false;
        }
    }
    else {
        if($(input).val().trim() == ''){
            return false;
        }
    }
}

function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass('alert-validate');
}

function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass('alert-validate');
}

/*==================================================================
[ Show pass ]*/

var showPass = 0;
$('.btn-show-pass').on('click', function(){
    if(showPass == 0) {
        $(this).next('input').attr('type','text');
        $(this).find('i').removeClass('fa-eye-slash');
        $(this).find('i').addClass('fa-eye');
        showPass = 1;
    }
    else {
        $(this).next('input').attr('type','password');
        $(this).find('i').addClass('fa-eye-slash');
        $(this).find('i').removeClass('fa-eye');
        showPass = 0;
    }

});


})(jQuery);
</script>

</body>
</html>