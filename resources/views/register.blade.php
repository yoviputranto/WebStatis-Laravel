<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="{{action('AuthController@welcome')}}" method="POST">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <!--Name-->
        <label>First name:</label><br><br>
        <input type="text" id="fname" name="fname" /><br><br>
        <label>Last Name:</label><br><br>
        <input type="text" id="lname" name="lname" /><br><br>

        <!--Gender-->
        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="Male" />Male<br>
        <input type="radio" name="gender" value="Female" />Female<br>
        <input type="radio" name="gender" value="Other" />Other<br><br>

        <!--Nationality-->
        <label>Nationality:</label><br><br>
        <select name="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapore">Singapore</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Australia">Australia</option>
        </select><br><br>

        <!--Language-->
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="Language" value="Indonesia" />Bahasa Indonesia<br>
        <input type="checkbox" name="Language" value="English" />English<br>
        <input type="checkbox" name="Language" value="Other" />Other<br><br>

        <!--Bio-->
        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br>

        <!--Submit-->
        <input type="submit" value="Submit" />

    </form>
</body>

</html>