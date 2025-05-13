<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


        html,
    body {
      height: 100%;
    }


    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }


    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }


    .form-signin .checkbox {
      font-weight: 400;
    }


    .form-signin .form-floating:focus-within {
      z-index: 2;
    }


    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }


    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .form-floating{
        margin: 10px;
    }
    </style>
</head>
<body>
    <main class="form-signin">
        <form action="register.php" method="post">
            <img class="mb-4" src="https://cdn.freebiesupply.com/logos/large/2x/nike-4-logo-black-and-white.png">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" name="emri" class="form-control" placeholder="Emri">
                <label for="floatinginput">Emri</label>
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" placeholder="username">
                <label for="floatinginput">username</label>
            </div>
            <div class="form-floating">
                <input type="text" name="email" class="form-control" placeholder="email">
                <label for="floatinginput">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" name="emri" class="form-control" placeholder="Emri">
                <label for="floatinginput">Password</label>
            </div>
            <div class="form-floating">
                <input type="text" name="emri" class="form-control" placeholder="Emri">
                <label for="floatinginput">Confirm Password</label>
                <div class="checkbox" value="remember me">
                    
                </div>
            </div>
        </form>
    </main>
</body>
</html>