@extends('extend.links')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
</head>

<body >
    @include('components.appBar')
    <section class="doc">

        <div class="input_form">
            

            <form action="{{ route('forgottenPassword.process') }}" method="POST" class="login">
                @csrf
        
                @if ($errors->any())
                <div class="error">
                    <ul class="alert alert-danger">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                </div>
                @endif
        
                @if ($message = Session::get('error'))
                    <div class="error">{{ $message }}</div><br />
                @endif
        
                @if ($message = Session::get('success'))
                    <div class="error">{{ $message }}</div><br />
                @endif
        
                <label for="email">Email</label><br />
                <input type="text" name="email" id="email" placeholder="Saisir l'e-mail ici"><br /><br />
        
                <button type="submit" class="btnSumbit">Soumettre</button>
            </form>
        </div>
    </section>
</body>

</html>
