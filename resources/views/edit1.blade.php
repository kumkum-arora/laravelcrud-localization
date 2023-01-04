<html>

<head>
    <title></title>
</head>

<body>
    <form method="post" action="{{url('edit_form/'.$findrec[0]->id)}}">
        {{csrf_field()}}
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname" value="{{isset($findrec[0]->first_name) ? $findrec[0]->first_name:''}} " /></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input type="text" name="lastname" value="{{isset($findrec[0]->last_name) ? $findrec[0]->last_name:''}} " /></td>
            </tr>
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1" value="{{isset($findrec[0]->marks1) ? $findrec[0]->marks1:''}} " /></td>
            </tr>
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2" value="{{isset($findrec[0]->marks2) ? $findrec[0]->marks2:''}} " /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>

</body>

</html>