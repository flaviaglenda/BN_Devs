
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/login.css">
        <title>Document</title>
        <?php include './html/head.php' ?>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body style="height: 100vh !important;">
<div class="container">
    <div class="heading">Entre agora</div>
    <form class="form" id="form-login">
        <label for="email">Email:</label>
      <input required="" class="input" type="email" name="email" id="email">
        <label for="password">Senha:</label>
      <input required="" class="input" type="password" name="password" id="password">
      <input class="login-button" type="submit" value="Entre">
      
    </form>
    <script>
        searchElement('form-login').addEventListener('submit', event => {
            event.preventDefault();
            const form = event.target;

            login(form.email.value, form.password.value, true, '');
        })
    </script>
    
  </div>
    </body>
</html>