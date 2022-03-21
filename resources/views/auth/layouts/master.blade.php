<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login an Registration</title>
    <link rel="shortcut icon" href="{{asset('backend/assets/media/logos/favicon.ico')}}" />
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .accoutn_main {
            position: relative;
            height: 100%;
            width: 100%;
            z-index: 999;
        }

        .accoutn_main .video {
            position: fixed;
            z-index: -100;
            width: 100%;
            height: auto;
            opacity: 0.5;
        }

        .form_area {
            width: 100%;
            height: 100%;
            background-size: 100% 200%;
            /*background: radial-gradient(circle at 250% 50%, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 40%, #1661C2 100%);*/
            /*background: #1661C2;*/
        }

        .main_con {
            position: relative;
            padding: 50px;
            width: 550px;

        }

        .headline {
            text-align: center;
            color: #fff;
            margin: 100px 0;
        }

        .form_con {
            position: relative;
            padding: 30px;
            width: 100%;
            background: #663259;
            opacity: 0.9;
            border: 2px solid #663259;
            border-radius: 5px;
        }

        .form_con h2 {
            margin: 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .form_con .input-box {
            position: relative;
        }

        .form_con .input-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .form_con .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 15px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .form_con .input-box input:focus+label,
        .form_con .input-box input:valid+label {
            top: -25px;
            left: 0;
            color: #fff;
            font-size: 18px;
        }

        .form_con .button {
            text-align: center;
        }

        .form_con button {
            font-size: 20px;
            padding: 8px 20px;
            background: none;
            border: 2px solid #fff;
            cursor: pointer;
            color: #fff;
            text-align: center;
            border-radius: 5px;
        }

        .form_con button:hover {
            background: #DDDDDD;
            color: #1661C2;
            border-radius: 5px;
            box-shadow: 0 0 5px #DDDDDD, 0 0 25px #DDDDDD, 0 0 50px #DDDDDD, 0 0 100px #DDDDDD;
        }

        .hidden {
            display: none;
        }

        .text-center {
            text-align: center;
            color: #fff;
            margin: 15px 0;
            cursor: pointer;
        }

        .text-danger {
            color: red;
            margin-top: 5px;
        }



        /* responsive media query */
        @media (max-width: 1080px) {
            .video {
                display: none;
            }

            .accoutn_main {
                width: 100%;
                height: 100%;
                /*background: url(assets/images/m-d-playing.jpg) no-repeat;*/
                background-size: cover;
            }

        }

        @media (max-width: 665px) {
            .video {
                display: none;
            }

            .accoutn_main {
                background: red;
            }

        }

        @media (max-width: 550px) {
            .video {
                display: none;
            }

            .accoutn_main {
                background: #1661C2;
            }

            .main_con {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="accoutn_main">
        <video muted loop autoplay class="video">
            <source src="{{asset('backend/assets/images/video1.mp4')}}" type="video/mp4">
        </video>
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#action").click(function(){
                $(".log_form, .reg_form").toggle(1200);
            });
    </script>
    @stack('script')
</body>

</html>