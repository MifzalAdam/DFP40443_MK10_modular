<?php include 'dashboard_process.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
<div class="container">
<a class="navbar-brand">UserSystem</a>

<div>
<span class="text-white me-3">Hi, <?php echo $user['fullname']; ?></span>
<a href="logout_process.php" class="btn btn-danger btn-sm">Logout</a>
</div>

</div>
</nav>

<div class="container">
<h3>Welcome, <?php echo $user['fullname']; ?></h3>

<table class="table table-bordered mt-3">
<tr><th>Username</th><td><?php echo $user['username']; ?></td></tr>
<tr><th>Email</th><td><?php echo $user['email']; ?></td></tr>
</table>

</div>
</body>
</html>