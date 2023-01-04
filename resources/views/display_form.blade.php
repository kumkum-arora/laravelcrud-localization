<html>

<head>
    <title></title>
</head>

<body>
    <form action="{{url('form-submit')}}" method="post">
        {{csrf_field()}}
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname" value="{{isset($findrec[0]->first_name) ? $findrec[0]->first_name:''}} " /></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input type="text" name="lastname" /></td>
            </tr>
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1" /></td>
            </tr>
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
    <form method="post" action="{{url('search-record')}}">
        {{csrf_field()}}
        <input type="text" name="name">
        <input type="submit" name="search" value="search">
    </form>
    <table border="1" width="80%">
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Lastname</th>
            <th>Marks1</th>
            <th>Marks2</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->first_name}}</td>
            <td>{{$row->last_name}}</td>
            <td>{{$row->marks1}}</td>
            <td>{{$row->marks2}}</td>
            <td><a href="{{'delete-data/'.$row->id}}">Delete</a></td>
            <td><a href="{{'edit_disp/'.$row->id}}">Edit</a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan="7">{{$data->links('pagi')}}</td>
        </tr>
    </table>
    <style>
        .pagination {
            list-style: none;
            margin-top: 20px;
        }

        .pagination li {
            display: inline;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</body>

</html>