<!DOCTYPE html>
<html>
<head>
    <title>Create New User</title>
</head>
<body>
    <h2>Create User</h2>
    <form action="create_user.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Role: <select name="role">
                 <option value="user">User</option>
                 <option value="admin">Admin</option>
              </select><br>
        <input type="submit" value="Create User">
    </form>
</body>
</html>
