<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Admin</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .text-header {
            font-family: sans-serif;
            margin: 5% 5%;
        }

        .text-header h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="app">
        <header-component></header-component>
        <div class="text-header">
            <h1 v-text="title"></h1>
            <h4>Petugas Posyandu</h4>

            <content-component></content-component>
        </div>
        <footer-component></footer-component>
    </div>


    <script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
