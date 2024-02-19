<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styleaddEmployee.css">
</head>
<body>
    <h1>Employee List</h1>
    <br>
    <form method="POST" action="/employee/list">
    <div class="mb-3">
        <label for="employee-name" class="form-label">Name</label>
        <input type="text" class="form-control" id="employee-name" maxlength="20" minlength="5" name="name">
    </div>
    <div class="mb-3">
        <label for="employee-age" class="form-label">Age</label>
        <input type="number" class="form-control" id="employee-age" number_format="20" name="age">
    </div>
    <div class="mb-3">
        <label for="employee-address" class="form-label">Address</label>
        <input type="text" class="form-control" id="employee-address" maxlength="40" minlength="10" name="address">
    </div>
    <div class="mb-3">
        <label for="employee-phone-number" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="employee-phone-number" maxlength="12" minlength="9" name="number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>