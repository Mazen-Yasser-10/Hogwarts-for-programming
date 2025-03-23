<!DOCTYPE html>
<html>

<body>
    <h1>Add Professor</h1>
    <form action="../controllers/Professors" method="post">
        <label for="username">Professor Name</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="Email">Email</label>
        <input type="text" id="Email" name="email" required>
        <br>
        <label for="HashedPassword">Password</label>
        <input type="password" id="HashedPassword" name="password" required>
        <br>
        <label for="Role">Role</label>
        <input type="text" id="Role" name="role" required>
        <br>
        <input type="submit" class="btn btn-primary" value="Add Professor">
    </form>
</body>

</html>