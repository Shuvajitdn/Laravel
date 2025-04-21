<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Status List</h1>
    <ul>
        @foreach($users as $user)
            <li>{{$user["name"]}} -
                @if ($user["status"] == "active")
                <span style="color:green">
                    <b>{{ucfirst($user["status"])}}</b>
                </span>
                
                @elseif ($user["status"] == "inactive")
                <span style="color:red">
                    <b>{{ucfirst($user["status"])}}</b>
                </span>
                
                @elseif (($user["status"] == "suspended") && ($user["role"] == "Admin"))
                <span style="color:red">
                    <i>Admin Privilages {{$user["status"]}}</i>
                </span>
                @endif
                <span>
                    ({{$user["role"]}})
                </span>
            </li>
        @endforeach
    </ul>
</body>
</html>