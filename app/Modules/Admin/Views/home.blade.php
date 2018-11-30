<html>
<head>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <style type="text/css">
        body {
            background-image: url("/images/3402.jpg");
        }

    </style>
</head>
<body>


<h1 style="color: #685d20" >Admin Dashboard...!!</h1>
<p>*****************************************************************</p>


<h2 style="color: #c7254e">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>
<h2>{{ Session::has('msg') ? Session::get("msg") : '' }}</h2>


    <p>Name::{{$result->name}}</p>
    <p>Email::{{$result->email}}</p>
    <p><a href="/admin/editQuestion"><button class="btn btn-success">Edit_Question</button></a>
    <a href="/admin/importExport"><button class="btn btn-success">Excel File</button></a>
    <a href="/admin/logout"><button class="btn btn-success">Logout</button></a></p>
    <a href="/admin/viewTable"><button class="btn btn-success">Table</button></a>

</body>
</html>