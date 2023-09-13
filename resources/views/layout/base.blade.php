<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Contacts</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('contacts.index') }}>CRUDcontacts</a>
            <div class="justify-end ">
                <div class="col ">
                    @guest
                        <a class="btn btn-sm btn-success" href={{ route('login') }}>Login</a>
                    @endguest
                    @auth
                        <a class="btn btn-sm btn-success mr-5" href={{ route('logout') }}>Logout</a>
                        <a class="btn btn-sm btn-success" href={{ route('contacts.create') }}>Add Post</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>
