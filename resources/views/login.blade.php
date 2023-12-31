<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

        *{
            font-family: 'Poppins', sans-serif;
        }
        .wrapper{
            background: #ececec;
            padding: 0 20px 0 20px;
        }
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .btn:not(.nav-btns button){
            background-color: #fff;
            color: #ff600a;
            padding: 10px 28px;
            border-radius: 25px;
            border: 1px solid #ff600a;
        }

        .btn:not(.nav-btns button):hover{
            background-color: #ff600a;
            color: #fff;
            border-color: #ff600a;
        }

        .row{
            width: 900px;
            height: 550px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
        }
        .side-image{
            background-image: url("http://localhost/Tienda/resources/images/login_imagen.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 10px 0 0 10px;
        }
        img{
            width: 58px;
            position: absolute;
            top: 30px;
            left: 200px;
            
        }
        .text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            
        }
        .text p{
            color: #ffffff;
            font-size: 17px;
            
        }
        .encabezado{
            font-size: 25px;
            color: #ff600a;
        }
        i{
            font-weight: 400;
            font-size: 15px;
        }
        .right{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .input-box{
            width: 330px;
            box-sizing: border-box;
        }
        .input-box header{
            font-weight: 700;
            text-align: center;
            margin-bottom: 45px;
        }
        .input-field{
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 0 10px 0 10px;
        }
        .input{
            height: 45px;
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(0,0,0,0.2);
            outline: none;
            margin-bottom: 20px;
            color: #40414a;
        }
        .input-box .input-field label{
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
        }
        .input-field .input:focus ~ label{
            top: -10px;
            font-size: 13px;
        }
        .input-field .input:valid ~ label{
            top: -10px;
            font-size: 13px;
            color: #5d5076;
        }
        .input-field .input:focus, .input-field .input:valid{
            border-bottom: 1px solid #ff600a;
        }
        .submit{
            border: none;
            outline: none;
            height: 45px;
            background: #ececec;
            border-radius: 5px;
            transition: .4s;
        }
        .submit:hover{
            background: #ff600a;
            color: #fff;
        }
        .signin{
            text-align: center;
            font-size: small;
            margin-top: 25px;
        }
        span a{
            text-decoration: none;
            font-weight: 700;
            color: #000;
            transition: .5s;
        }
        span a:hover{
            text-decoration: underline;
            color: #000;
        }



        @media only screen and (max-width: 768px){
            .side-image{
                border-radius: 10px 10px 0 0;
            }
            img{
                width: 35px;
                position: absolute;
                top: 149px;
                left: 44%;
            }
            .text{
                position: absolute;
                top: 60%;
                text-align: center;
            }
            .text p,i{
                font-size: 16px;
            }
            .row{
                max-width: 420px;
                width: 100%;
            }
        }

    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="http://localhost/Tienda/resources/images/Logo_icono.ico">
    <title>Login | Siinbal </title>
</head>
<body>
    <form method="POST" action="{{ route('cliente.iniciar') }}">
        @csrf
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                        <!-------Image-------->
                        <img src="http://localhost/Tienda/resources/images/Logo.png" alt="" >
                    </div>
                    <div class="col-md-6 right">
                        <div class="input-box">
                            <header class="encabezado">¡Comienza a comprar!</header>
                            <div class="input-field">
                                <input type="text" class="input" name="email" required>
                                <label for="email">Correo Electronico</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" name="password" required>
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="input-field">
                                <button class="btn btn-primary mt-3" type="submit" >Ingresar</button>   
                            <div class="signin">
                                <span>¿Aun no tienes una cuenta? <a href="{{route('cliente.registro')}}">Crea una cuenta aqui</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--CSS y JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>