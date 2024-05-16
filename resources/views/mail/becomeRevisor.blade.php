<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifica Revisore</title>
</head>
<body>
    <h1>Un utente ha chiesto di diventare revisore</h1>
    <p>Nome: {{$name}}</p>
    <p>Email: {{$email}}</p>
    <p>Messaggio:</p>
    <p>{{$usermessage}}</p>
    <p>Se vuoi rendere questo utente revisore clicca qui sotto</p>
    <a href="{{route('revisor.make', ['user' => $user->id])}}">Rendi {{$name}} revisore</a>
</body>
</html>