<html>

<head>
    <title></title>
</head>

<body>
    <table border="1" width="80%">
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Lastname</th>
            <th>Marks1</th>
            <th>Marks2</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->first_name}}</td>
            <td>{{$row->last_name}}</td>
            <td>{{$row->marks1}}</td>
            <td>{{$row->marks2}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="6">{{$data->links()}}</td>
        </tr>
    </table>
</body>

</html>