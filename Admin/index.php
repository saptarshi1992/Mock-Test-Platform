<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar">
                <h3>Admin Dashboard</h3>
                <a href="manage_users.php">Manage Users</a>
                <a href="Manage_questions.php">Manage Questions</a>
                <a href="Questions_Form.php">Add Questions</a>
                <a href="view_results.php">View Test Results</a>
                <a href="reports.php">Reports</a>
                <a href="logout.php">Logout</a>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <div class="container mt-4">
                    <h2>Welcome, Admin</h2>
                    <p>Choose an action from the sidebar.</p>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>