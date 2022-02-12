<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My space</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
</head>
<body >
    <header>

    </header>
    <main>
        <div class="wrapper">
            <div class="container">
                <div class="title-container">
                    <h1>Login</h1>
                </div>
                <div class="form-container">
                    <form action="insert.php" method="post">
                        <dl>
                            <dt>USER NAME</dt>
                            <dd><input type="text" name="username" class="input"></dd>
                            <dt>PASSWORD</dt>
                            <dd><input type="text" name="password" class="input"></dd>
                            <div class="btn-container">
                                <input type="submit" value="Login" class="btn">
                            </div>
                            <div>
                                <a href="register.php">初めての方はこちら</a>
                            </div>
                        </dl>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>