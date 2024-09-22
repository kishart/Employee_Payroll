<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            padding-top: 150px;
        }
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
            background-color: red;
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
            padding: 10px;
            margin-left: 120px;
            margin-right: 120px;
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
            margin-left: 20px; /* Space between heading and button */
            cursor: pointer;
        }

        .header-container {
            display: flex;
            justify-content: space-between; /* Space between heading and button */
            align-items: center; /* Align items vertically */
            margin-bottom: 20px; /* Space below the header */
            
        }

        h1 {
            margin: 0; /* Remove default margin */
            flex-grow: 1; /* Allow h1 to take up available space */
            text-align: center; /* Center text in header */
        }
    </style>
</head>

<body>
    <div>
        <div class="header-container">
            <h1>Delete Employee</h1>
            <button onclick="location.href='index.php'">Home</button>
        </div>
        <form action="form_delete.php" method="post">
            <label for="fname">Employee ID:</label>
            <input type="text" id="fname" name="EmployeeID" placeholder="Enter Employee ID..">

            <input type="submit" id="SubmitButton" name="submit">
        </form>
    </div>
</body>

</html>
