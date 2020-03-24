<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Form Data to File using PHP</title>

</head>

<body>

    <div class="div-wrapper">
        <h1 class="heading">PHP Form</h1>

        <form class="form" action="processFormData.php" id="webForm" name="webForm" method="POST">

            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="Your name" required> <br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Your email address" required><br>

            <label for="age">Age: </label>
            <input type="number" name="age" id="age"><br>

            <label for="gender">Gender</label>
            <input type="radio" name="gender" />Male
            <input type="radio" name="gender" />Female

            <br>

            <label for="city">City: </label>
            <select name="city" id="city">
                <option value="">Select your city</option>
                <option value="Badagry">Badagry</option>
                <option value="Lekki">Lekki</option>
                <option value="Epe">Epe</option>
                <option value="Lagos_Island">Lagos Island</option>
            </select> <br>

            <input class="submit" type="submit" name="submit" id="submit" value="Submit Form">

        </form>

    </div>


</body>

</html>