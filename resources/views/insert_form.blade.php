
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        .table
        {
           padding: 200px  500px;
        }
        button
        {
            text-align: center;
            background-color: green;
            color: white;
            font-size: bolder;
            width: 100px;
            height: 28px;
            border-radius: 5px;


        }
    </style>
    <form action="/create" method="POST">
        @csrf
       <table class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
       </table>
       <div>{{ session('message') }}</div>
    </form>
</body>
</html>
