<!DOCTYPE html>
<html>
<head><title>Membuat Form Login dengan Javascript</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br>
    <br>
    <center><h2>FORM LOGIN</h2></center>
    <br>
    <div class="login">
    <br>
    <form action="login.php" method="post" onSubmit="return validasi()">
        <div>
            <label>Email:</label>
            <input type="email" name="email" id="email" placeholder="namexample@gmail.com"/>
        </div>
        <div>
            <label>Password: </label>
            <input type="password" name="password" id="password"/>
        </div>
        <div>
             <input type="submit" value="Login" class="tombol"/>
        </div>
    </form>
    </div>
</body>
    <script type="text/javascript">
        function validasi(){
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            if(email!=""&&password!="")
            {
                return true;
            } 
                else{
                    alert('Email dan Password harus diisi!');
                    return false;
                }
            }                    
    </script>
</html>