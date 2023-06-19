<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail</title>

    <style>

        body{
            background-color: #638a78;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            padding: 20px;
        }

        .text-center {
            text-align: center;
        }

        .header {
            background-color: #c0a286;
            border-radius: 10px 10px 0px 0px;
            padding: 10px;
        }

        .btn {
            width: 6rem;
            background-color: #c0a286;
            transition: .3s;
            color: #291711;
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
        }

        .card {
            background-color: transparent;
            border: 8px solid #c0a286;
            border-radius: 0px 0px 10px 10px;
            border-top: 0px solid transparent;
            margin-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            height: 100%;
        }

        .card-content {
            background-color: #4d725f;
            border-radius: 10px;
            height: calc(100% - 60px);
            padding: 10px;
            color: #fff;
        }

        .text {
            color: #291711;
        }

        .white {
            color: white;
        }

    </style>

</head>

<body>

    <div class="container">
        <div class="header text-center">
            <h1>Candidatura revisore</h1>
        </div>
        <div class="card">
            <div class="card-content">

                <h2 class="text">Informazioni candidato</h2>
                <p class="text">Nome: 
                    <span class="white">
                        {{ $user->name }}
                    </span>
                </p>
                <p class="text">Email: 
                    <span class="white">
                        {{ $user->email }}
                    </span>
                </p>
                <h2 class="text">Lettera di presentazione</h2>
                <p>{{ $presentation }}</p>
                <p class="text">Per accettare la candidatura clicca qui:</p>
                <a class="btn" href="{{ route('make_revisor', compact('user')) }}">Rendi revisore</a>

            </div>
        </div>
    </div>

</body>

</html>
