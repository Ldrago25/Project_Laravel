<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css')}} " type="text/css" media="all">
    <title>Home</title>
</head>
<body>
    <div id="content">
        <h1 class="content">Initial Page</h1>
        <h2><a href="{{route("/userLogin")}}" class="edit">sign in</a></h2>
    </div>
</body>
</html>