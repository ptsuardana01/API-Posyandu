<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" value="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/Tailwind.css') }}">
    
</head>

<body>
    <div id="user">
    </div>

<script src="{{ mix('js/app.js') }}">
</script>
</body>

</html>