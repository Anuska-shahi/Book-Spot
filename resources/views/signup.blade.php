<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <script type="text/javascript">
        function validate(theform)
        {
            if(theform.name.value.length<6)
            {
                alert ("Please enter atleast 6 characters in name.");
                return false;
            }
            if(theform.password.value.length<8)
            {
                alert ("Please enter atleast 8 characters in password");
                return false;
            }
            if(theform.password.value!=theform.r_password.value)
            {
                alert ("Please enter same password");
                return false;
            }
        }
    </script>
</head>
<body margin="0">
    <!-- <nav>
        <div class="logo">
            <img src="book.png" alt="logo">
        </div>
        <div class ="name">
            <h3>Library Managment System</h3>
        </div>
    </nav> -->
    <div class="container">
        <form method="post" action="store"  name="theform" style="background-color:white">
        @csrf
            <h1>Sign Up</h1>
            <!-- <div class="name">
                First Name: <input type="text" name="fname" required><br/><br/>
                Last Name: <input type="text" name="lname" required><br/><br/>
            </div>
            <div class="address">
                Address: <input type="text" name="address" required><br/><br/>
            </div>
            <div class="phone">
                Phone: <input type="number" name="phone" required><br/><br/>
            </div>
            <div class="dob">
                Date of Birth: <input type="date" name="dob" required><br/><br/>
            </div>
            <div class="user">
                Username: <input type="text" name="name" required><br/><br/>
            </div>
            <div class="email">
                Email: <input type="email" name="email" required><br/><br/>
            </div>
            <div class="pass">
                Password:<input type="password" name="password" required><br/><br/>
            </div>
            <div class="r_pass">
                Repeat your password:<input type="password" name="r_password" required><br/><br/>
            </div>
            <button type="submit">Sign Up</button><br/>
            <div class="hint-text">Already have an account?<br/>
                <a href="{{route('Userlogin')}}">Login here</a>
            </div> -->
            <table>
            <tr>
                <td>First Name:</td><td> <input type="text" name="fname" required><br/><br/><td>
            </tr>
            <tr>
                <td>Last Name:</td><td> <input type="text" name="lname" required><br/><br/></td>
            </tr>
            <tr>
                <td>Address:</td><td> <input type="text" name="address" required><br/><br/></td>
            </tr>
            <tr>
                <td>Phone:</td><td> <input type="number" name="phone" required><br/><br/></td>
            </tr>
            <tr>
                <td>Date of Birth:</td><td> <input type="date" name="dob" required><br/><br/></td>
            </tr>
            <tr>
                <td>Username:</td><td> <input type="text" name="name" required><br/><br/></td>
            </tr>
            <tr>
                <td>Email:</td><td> <input type="email" name="email" required><br/><br/></td>
            </tr>
            <tr>
                <td>Password:</td><td> <input type="password" name="password" required><br/><br/></td>
            </tr>
            <tr>
                <td>Repeat your password:</td><td> <input type="password" name="r_password" required><br/><br/></td>
            </tr>
            <tr align="center"><td colspan="2"><input type="submit" value="Sign Up"><br/></td></tr>
            <tr align="center"><td colspan="2"> Already have an account?<br/>
                <a href="{{route('Userlogin')}}">Login here</a></td>
            </tr>
    </table>
        </form>   
    </div>
</body>
</html>
