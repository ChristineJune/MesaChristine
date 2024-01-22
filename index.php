<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">

    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="process.php" method="POST">
            <div class="form1">
                <div class="personal-details">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" required></p>
                        </div>
                        <div class="fields">
                        <div class="input-field">
                            <label>Date Of Birth</label>
                            <input type="date" name="bday" required></p>
                        </div>
                        <div class="fields">
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" required></p>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>