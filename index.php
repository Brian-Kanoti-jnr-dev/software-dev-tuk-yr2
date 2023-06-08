<!DOCTYPE html>
<html>
<head>
    <title>Meal Planning for the Week</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Meal Planning for the Week</h1>

    <form method="post" action="save_meals.php">
        <?php
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($days as $day) {
            echo '<label for="' . $day . '">' . $day . ': </label>';
            echo '<input type="text" name="' . $day . '" id="' . $day . '"><br>';
        }
        ?>
        <input type="submit" value="Save">
    </form>

    <div class="meal-plans">
        <?php include 'display_meals.php'; ?>
    </div>
</body>
</html>
