<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin:0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background: #FAEDCA;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0,1);
        
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input [type="text"],
        input [type="password"] {
            width: 800px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border : 1px solid #ccc;
            margin-left: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color:white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 5px;


        }
        
    </style>
</head>
<body>
   <h1> User Registration</h1>
   <form action="create_user.php" method="POST">
     <label for="username">Username</label>
     <input type="text" id="username" name="username">

     <label for="password">Password</label>
     <input type="password" id="password" name="password">

     <label for="role">Role</label>
     <select name="role" id="role">
        <option value="administrator">Administrator</option>
        <option value="student">Student</option>
     </select>
     
     <input type="submit" value="Register">

   </form>

</body>
</html>
