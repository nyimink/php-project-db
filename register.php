<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container text-center" style="max-width: 600px;">
        <h1 class="h4 mt-4">Register</h1>

        <form action="_actions/create.php" method="post">
            <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>

            <input type="text" name="email" class="form-control mb-2" placeholder="Email" required>

            <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>

            <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>

            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    
            <button type="submit" class="btn btn-primary w-100">Register</button>

        </form>
            
            <a href="index.php">Login</a>
    
    </div>
        
    
</body>
</html>