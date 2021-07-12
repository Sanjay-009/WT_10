<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="config.php" method="POST">
        <table class="roundedCorners" align="center" width = "450">
            <caption> <h1><FONT COLOR=BLACK FACE="Geneva, Candara" SIZE=6>Registration Form</FONT></h1> </caption>
            <tr>
                <th><FONT COLOR=BLACK FACE="Geneva, Candara" SIZE=3.5><label>Name : </label><input type="text" name="name" required><br></FONT></th>
            </tr>
            <tr>
                <th><FONT COLOR=BLACK FACE="Geneva, Candara" SIZE=3.5><label>Password : </label><input type="text" name="password" required><br></FONT></th>
            </tr>
            <tr>
                <th><FONT COLOR=BLACK FACE="Geneva, Candara" SIZE=3.5><label>Email : </label><input type="email" name="email" required><br></FONT></th>
            </tr>
            <tr>
                <th><FONT COLOR=BLACK FACE="Geneva, Candara" SIZE=3.5><label>Phone : </label><input type="number" name="phone" required><br></FONT></th>
            </tr>

            <tr>
                <th colspan="2" align="center"> <button type="submit" name="submit">Submit</button> </th>
            </tr>

        </table>
    </form>
</body>
</html>