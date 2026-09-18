<?php
session_start();

$conn = new mysqli("localhost", "root", "", "fakoo");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$message = "";

if (isset($_POST["signup"])) {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, username, password)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $first_name, $last_name, $username, $password);

    if ($stmt->execute()) {
        $message = "Account created successfully!";
    } else {
        $message = "Username already exists.";
    }

    $stmt->close();
}

if (isset($_POST["login"])) {

    $username = $_POST["login_username"];
    $password = $_POST["login_password"];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            $_SESSION["username"] = $user["username"];
            $_SESSION["first_name"] = $user["first_name"];

            header("Location: dashboard.php");
            exit();

        } else {
            $message = "Incorrect password.";
        }

    } else {
        $message = "Username not found.";
    }

    $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>welcome to my shopping mart - Sign Up / Login</title>
</head>

<body>

<h1>if them born you well theif anything there </h1>

<?php if ($message != ""): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>


<h2>Sign Up</h2>

<form method="POST">

    <input type="text"
           name="first_name"
           placeholder="First Name"
           required>

    <br><br>

    <input type="text"
           name="last_name"
           placeholder="Last Name"
           required>

    <br><br>

    <input type="text"
           name="username"
           placeholder="Username"
           required>

    <br><br>

    <input type="password"
           name="password"
           placeholder="Password"
           required>

    <br><br>

    <button type="submit" name="signup">
        Create Account
    </button>

</form>


<hr>


<h2>Login</h2>

<form method="POST">

    <input type="text"
           name="login_username"
           placeholder="Username"
           required>

    <br><br>

    <input type="password"
           name="login_password"
           placeholder="Password"
           required>

    <br><br>

    <button type="submit" name="login">
        Login
    </button>

</form>

</body>
</html>