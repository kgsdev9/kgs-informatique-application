<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création de post </title>

      @livewireStyles
</head>
<body>
    @livewire('admin.article-component')

@livewireScripts
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('script.js')}}"></script>
</body>
</html>
