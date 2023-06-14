<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail</title>
</head>

<body>
    <h1>Candidatura revisore</h1>
    <h2>Informazioni candidato:</h2>
    <p>Nome:{{ $user->name }}</p>
    <p>Email:{{ $user->email }}</p>
    <h4>Lettera di presentazione:</h4>
    <p>{{ $presentation }}</p>
    <p>Per accettare la candidatura clicca qui:</p>
    <a href="{{ route('make_revisor', compact('user')) }}">Rendi revisore</a>


</body>

</html>
