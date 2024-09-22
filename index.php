<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding-left: 30px;
            padding-right: 30px;
            margin: 30px;
        }

        .buttonu,
        .buttond {
            background-color: #FF8343;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .buttond {
            background-color: #f44336;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-container {
            display: flex;
            gap: 10px; /* Space between buttons */
        }
    </style>
</head>

<body>
    <div>
        <div class="header">
            <h1>Add Employee</h1>
            <div class="button-container">
                <button class="buttonu" onclick="location.href='update.php'">Update</button>
                <button class="buttond" onclick="location.href='delete.php'">Delete</button>
            </div>
        </div>
        
        <form action="form.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="FirstName" placeholder="Your first name..">

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="LastName" placeholder="Your last name..">

            <label for="jposition">Job Position:</label>
            <input type="text" id="jposition" name="JobPosition" placeholder="Your job position..">

            <label for="basicpay">Basic Pay:</label>
            <input type="text" id="basicpay" name="BasicPay" placeholder="Your basic pay..">

            <label for="daysw">Days Worked:</label>
            <input type="text" id="daysw" name="DaysWorked" placeholder="Your days worked..">

            <input type="submit" id="SubmitButton" name="submit">
        </form>
    </div>
</body>

</html>
