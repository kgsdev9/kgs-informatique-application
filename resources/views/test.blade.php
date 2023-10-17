<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced text Editor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h3>Advanced Text Editor</h3>
    <form action="" method="post">
        <textarea name="textarea" id="default"  ></textarea>
        <input type="submit" value="submit">
    </form>

    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>
