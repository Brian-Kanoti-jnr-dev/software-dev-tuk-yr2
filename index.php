<!DOCTYPE html>
<html>
<head>
    <title>Meal Planning for the Week</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Meal Planning for the Week</h1>

        <form method="post" action="save_meals.php">
            <?php
            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

            foreach ($days as $day) {
                echo '<h3>' . $day . '</h3>';
                echo '<label for="' . $day . '-breakfast">Breakfast: </label>';
                echo '<input type="text" name="' . $day . '-breakfast" id="' . $day . '-breakfast"><br>';

                echo '<label for="' . $day . '-lunch">Lunch: </label>';
                echo '<input type="text" name="' . $day . '-lunch" id="' . $day . '-lunch"><br>';

                echo '<label for="' . $day . '-dinner">Dinner: </label>';
                echo '<input type="text" name="' . $day . '-dinner" id="' . $day . '-dinner"><br>';
            }
            ?>
            <input type="submit" value="Save">
        </form>

        <div class="meal-plans">
            <?php include 'display_meals.php'; ?>
        </div>
    </div>
</body>
</html>
