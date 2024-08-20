<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
</head>

<body>
    <form action="{{ route('newPassword.process') }}" method="POST">
        <h1>Nouveau mot de passe</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif

        @if ($message = Session::get('error'))
            <div>{{ $message }}</div><br />
        @endif

        @if ($message = Sesion::get('success'))
            <div>{{ $message }}</div><br />
        @endif

        <label for="password">Nouveau mot de passe</label><br />
        <input type="password" name="password" id="password" placeholder="Saisir le nouveau mot de passe ici ..."><br />

        <input type="hidden" name="email" id="password" value="{{ session()->get('email') }}">
        <input type="hidden" name="code" id="code" value="{{ session()->get('code') }}">

        <label for="password">Confirmer le nouveau mot de passe</label><br />
        <input type="password" name="password" id="password" placeholder="Saisir le nouveau mot de passe ici ..."><br />

        <button type="submit">Soumettre</button>
    </form>
</body>

</html>