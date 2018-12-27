<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script language="JavaScript">
        tempAlert("close",5000);
    </script>

</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>