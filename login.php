<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="foto/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    
    
    <body style="background-image: url(foto/bg3.jpg); background-size: cover; background-repeat: repeat; height: 100%">
        <form method="post" action="aksilogin.php">
            <table id="Table">
                <tr>
                    <td align="center"><h1>Login</h1></td>
                </tr>
                <tr>
                    <td  align="center" style="border-width: 100%; border: 1 px solid black">Username<br><input autocomplete="off" name="username" type="text" placeholder="Your Username"></td>
                </tr>
                <tr>
                    <td align="center">Password<br><input  name="password" type="password" placeholder="Your Password"></td>
                </tr>
                <tr> 
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>
    
    <footer><p>&copy; 2022 Miracle Aesthetic Clinic.</p></footer>

</html>