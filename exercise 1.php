<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Module 2 - Exercise 01</title>
</head>
<body>

    <!-- TODO 4: Embed PHP into HTML to create a "Welcome" page -->
    <h1><?php echo "Welcome to PHP Programming!"; ?></h1>

    <hr>

    <!-- TODO 1: Print name, favorite language, and reason -->
    <p>
        <?php 
            $name = "Maiesha";
            $language = "PHP";
            $reason = "My favourite programming language is PHP because it is easy to use";

            echo "My name is $name. My favourite programming language is $language because $reason.";
        ?>
    </p>

    <!-- TODO 2: Calculate and print the sum of two numbers -->
    <p>
        <?php 
            $num1 = 5;
            $num2 = 10;
            $sum = $num1 + $num2;

            echo "The sum of $num1 and $num2 is: " . $sum;
        ?>
    </p>

    <!-- TODO 3: Display today's date using date() function -->
    <p>
        <?php 
            // 'l' = Day name, 'F' = Month name, 'j' = Date without leading zeros, 'Y' = 4-digit Year
            echo "Today is " . date("l, F j, Y") . ".";
        ?>
    </p>

    <!-- TODO 5: Generate a random number between 1 and 100 -->
    <p>
        <?php 
            $luckyNumber = rand(1, 100);
            echo "Your lucky number today is: " . $luckyNumber;
        ?>
    </p>

</body>
</html>