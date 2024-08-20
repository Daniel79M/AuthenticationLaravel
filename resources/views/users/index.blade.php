<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Mot de passe</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    {{-- <td>{{ $users->id}}</td> --}}
                    {{-- <td>{{ $users->name}}</td> --}}
                    {{-- <td>{{ $users->email}}</td> --}}
                    {{-- <td>{{ $users->password}}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>