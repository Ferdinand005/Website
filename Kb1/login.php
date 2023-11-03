<head>
    <title>Form Example</title>
</head>
<body>
    <div class="form-container">
        <h1>Login Form</h1>
        <form method="POST" action="login.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="prodi">Program of Study (Prodi):</label>
            <input type="text" name="prodi" id="prodi" required>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>