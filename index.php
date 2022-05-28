
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Fill</title>
</head>
<body>

<div class="card">
    <form action="user_data.php" method="POST" >
            <h4>Registration Form</h4>

        <div>
                <label for="name">Name</label> <br>
                <input type="text" name="name" placeholder="John Doe">
        </div>

        <div>
                <label for="email">Email</label> <br>
                <input type="text" name="email" placeholder="@gmail">
         </div>

        <div>
                <label for="gender">Gender</label> <br>
                <label for=""> Male
                    <input type="radio" name="gender" value="M">
                </label>
                <label for="">Female
                    <input type="radio" name="gender"  value="F">
                </label>
        </div> <br>

        <div>
                <label for="country">Country</label> <br>
                <input type="text" name="country" placeholder="e.g Nigeria">
         </div>
       

               <button type="submit">Submit</button>

    </form>
</div>
</body>
</html>