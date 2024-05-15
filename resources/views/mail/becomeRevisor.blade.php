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
    <p>Nome: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Se vuoi rendere questo utente revisore clicca qui sotto</p>
    <a href="{{route('revisor.make', compact('user'))}}">Rendi {{$user->name}} revisore</a>
</body>
</html>