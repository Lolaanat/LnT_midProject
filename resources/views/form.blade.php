<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
    <link rel="stylesheet" href="styleForm.css">
</head>
<style>
    label{
        font-family:'Times New Roman', Times, serif;
    }
    .button{
        background-color: #04AA6D;
        color: white;
    }
    .button2{
        background-color: #008CBA;
        color: white;
    }
    .name{
        font-weight: bold;
    }
    #email{
        font-weight: bold;
    }
</style>
<body>
    <div class="banner">
        <div class="navbar">
            <form action="" method="get">
                <h1>Login</h1>
                <label for="name" class="name">Name :</label>
                <input type="text">
                <div class="input">
                    <label for="Age" id="age">Age :</label>
                    <input type="text">
                </div>
                <div class="input">
                    <label for="address">Address :</label>
                    <input type="text">
                </div>
                <div class="input">
                    <label for="phone">Phone :</label>
                    <input type="text">
                </div>
        
                <button type="submit" class="button">Submit</button>
                <button type="reset" class="button2">Reset</button>
            </form>
        </div>
    </div>
</body>
</html>