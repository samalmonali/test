<html>
<head>

    <style>

        .pagination > li {
            display: inline;
        }
        .pagination li a{
            padding: 1%;
            background: lightgray;
        }
        .pagination li.active span{
            padding: 1%;
            background: lightgreen;
        }
    </style>
</head>

<body>
<center>
{{csrf_field()}}
<h1 style="color: #685d20"><b> Friends List</b><br>   </h1>
<p> <a href="/dashboard"><button>GoBack</button></a>
</p>
<hr/>
<h2 style="color: Green">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>
<table  border = "1" cellpadding = "5" cellspacing = "5">
    <thead>
    <tr class="bg-green">
        <th width="10">ID.no</th>
        <th width="10">Name</th>
        <th width="10">Email</th>
        <th width="10">View Profile</th>
    </tr>
    </thead>
    <?php $i=1;
//dd($userData);
    ?>
    @foreach($userData as  $value)

        <tr id="{{$value->id}}">
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td><a href="/profile/{{$value->id}}">View</a></td>
        </tr>

    @endforeach
</table>
{{$userData->links()}}



</center>
</body>
</html>