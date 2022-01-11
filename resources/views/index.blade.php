<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <form action="/add" method="post">
        @csrf
        <input type="text" name="fname" id="fname" placeholder="First Name"><br><br>
        <input type="text" name="lname" id="lname" placeholder="Last Name"><br><br>
        <input type="email" name="email" id="email" placeholder="Email"><br><br>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <input type="submit" value="Register">

    </form>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($data as $row)

            <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['fname']}}</td>
                <td>{{$row['lname']}}</td>
                <td>{{$row['email']}}</td>
                <td> <a href={{"delete/".$row['id']}}>Delete</a></td>
                <td><a href={{"edit/".$row['id']}}>Update</a></td>
            </tr>
            
        @endforeach
    </table>
</body>
</html>