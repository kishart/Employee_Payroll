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
            padding: 30px;
          margin-top: 30px;
            margin-left: 80px;
            margin-right: 80px;
        }

        button {
            background-color: #008CBA; /* Blue */
            border: none;
            color: white;
            border-radius: 10px;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 20px; /* Space between the heading and button */
            cursor: pointer;
        }

        .header-container {
            display: flex;
            margin-top: 20px;
            justify-content: space-between; /* Space between heading and button */
            align-items: center; /* Align items vertically */
            text-align: center; /* Center the text in the header */
        }

        h1 {
            margin: 0; /* Remove default margin */
            flex-grow: 1; /* Allow h1 to take up available space */
        }
    </style>
</head>

<body>
    <div>
        <div class="header-container">
            <h1>Update Employee</h1>
            <button onclick="location.href='index.php'">Home</button>
        </div>
        <form action="form_update.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="FirstName" placeholder="Your first name..">

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="LastName" placeholder="Your last name..">

            <label for="jposition">Job Position:</label>
            <input type="text" id="jposition" name="JobPosition" placeholder="Your job position..">

            <input type="submit" id="SubmitButton" name="submit">
        </form>
    </div>
</body>

</html>
