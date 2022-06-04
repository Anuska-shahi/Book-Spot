
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
</head>
<body margin="0">
    
    <!-- <div class="nav">
        <div class="logo">
            <img src="book.png" alt="logo">
        </div>
        <div class="name">
            <h3>library managment system</h3>
        </div>
    </div> -->
    <div class="container">
    <form method="post" action="{{route('userlogin.store')}}" onsubmit="return" style="background-color:white">
    <table>
        <h1>Login</h1>
        <tr>
        <td>Email:</td><td><input type="text" name="email" required><br/><br/></td>
        </tr>
        <tr>
        <td>Password:</td><td><input type="password" name="password" required><br/><br/></td>
        </tr>
        <tr align="center"><td colspan="2"><button type="submit">Login</button></td></tr>
        <tr align="center"><td colspan="2"><a href="{{route('user.signup')}}">Sign up?</a></td></tr>
    </table>
    </form> 
</div>
</body>
</html>
