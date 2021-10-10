<!DOCTYPE html>
<html lang="en">
<head>

    <title> <?= 'Fader | Login' ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/feather-icon/feather.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="./assets/js/jquery.min.js"></script>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .form-login {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-login .checkbox {
            font-weight: 400;
        }

        .form-login .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
            background-color: white;
        }

        .form-login .form-control:focus {
            z-index: 2;
        }

        .form-login input[type="password"] {
            margin-bottom: 10px;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #c6d8ff;
            outline: 0;
            box-shadow: none !important;
        }

        .alert-success {
            background-color: #41c54d;
            color: white;
        }
    </style>
</head>
<body class="text-center bg-main">

<form class="form-login" id="form-login">
    <div class="d-flex justify-content-center">
        <div class="rounded position-relative image-box mt-5 mx-auto d-block mx-lg-0">
            <img src="assets/img/fader-face.jpg" class="rounded position-absolute w-100" alt="">
        </div>
    </div>
    <br>
    <br>
    <label for="log_password" class="sr-only d-none">Password</label>
    <input type="password" id="log_password" class="form-control rounded-bottom mb-5 input text-center" autofocus placeholder="Password"
           required>
    <button class="outline-white w-100 text-white mb-4" type="submit">
        <i class="feather icon-log-in me-3"></i>Login
    </button>

    <p class="text-center">
        <a href="/resume"><i class="feather icon-arrow-left me-2"></i>Back</a>
    </p>

    <div class="alert alert-success py-2 d-none" id="alert">
        <i class="feather icon-alert-triangle mr-2" id="icon"></i>
        <span id="message" class="f-s-13">login success</span>
        <button onclick="hideAlert()" type="button" class="close mt-0">
            <span class="feather icon-x text-dark f-s-10"></span>
        </button>
    </div>
</form>

<script !src="">

    function hideAlert() {
        $('#alert').addClass('d-none')
    }

    $(document).on('input', '.input', function () {
        hideAlert()
    });

    $(document).ready(function () {

        $('#form-login').on('submit', function (e) {
            e.preventDefault();

            const log_password = $('#log_password').val();
            $.ajax({
                type: 'POST',
                //url: '<?//= base_url('auth/try_login') ?>//',
                dataType: "JSON",
                data: {'log_password': log_password},
                beforeSend: function () {
                    $("#loader-two").fadeIn();
                },
                success: function (data) {
                    $("#loader-two").fadeOut();
                    if (data.ok) {
                        $('#icon').removeClass('icon-alert-triangle').addClass('icon-check');
                        $('#alert').addClass('alert-success').removeClass('d-none').find('button').remove();
                        $('#message').text(data.message);
                        setTimeout(function () {
                            window.location = 'home';
                        }, 2000)
                    } else {
                        $('#alert').addClass('alert-danger').removeClass('d-none');
                    }
                }
            });
        })
    });
</script>
</body>
</html>
