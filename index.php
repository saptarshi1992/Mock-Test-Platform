<?php
// Login and registration operation
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Test Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Register</h2>
            <form method="POST" action="User/Dashborad.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>