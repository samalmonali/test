<html>
<head>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<link href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
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
{{csrf_field()}}
<h1 style="color: #685d20"><b>View All Suggested Friends List</b><br>   </h1>
<p> <a href="/dashboard"><button>GoBack</button></a>
</p>
<hr/>
<h2 style="color: Green">{{ Session::has('errorMsg') ? Session::get("errorMsg") : '' }}</h2>
<table  border = "1" cellpadding = "5" cellspacing = "5">
    <thead>
    <tr>
        <th>ID.no</th>
        <th>Name</th>
        <th>Email</th>
        {{--<th>View Profile</th>--}}
        <th>Send Request</th>
    </tr>
    </thead>
    <?php $i=1; ?>
    @foreach($userData as $key => $value)
        <tr id="{{$value->id}}">
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            {{--<td><a href="#">View Profile</a></td>--}}
            <td><a href="/sendReq/{{$value->id}}">Send Request</a></td>
        </tr>

    @endforeach
</table>
{{$userData->links()}}



{{--<script src="/js/jquery-3.2.1.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>--}}
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
        {{--var id='{{\Illuminate\Support\Facades\Auth::user()->id}}';--}}
        {{--$('#'+id).hide();--}}
    {{--});--}}

{{--</script>--}}
</body>
</html>