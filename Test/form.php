<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Pet Form</title>
</head>
<body>
    <h1>Tell Us About Your Favorite Pet</h1>
    <form action="test.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="first_name" required>
        <br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="last_name" required>
        <br><br>

        <label for="favoritePet">Favorite Pet:</label>
        <select id="favoritePet" name="favorite_pet" required>
            <option value="">--Select Your Favorite Pet--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
            <option value="fish">Fish</option>
            <option value="rabbit">Rabbit</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
