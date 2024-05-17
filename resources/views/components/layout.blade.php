<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @session('message')
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endsession
    <div>
        <div class="">Header</div>
        <div>
            <div>
                <a href="{{ route('note.index') }}">Notes</a>
            </div>
            <div>
                <a href="{{ route('note.create') }}">Create Note</a>
            </div>
        </div>
    </div>
    <div>
        {{ $slot }}
    </div>
    <div>Footer</div>
</body>

</html>
