
<?php
include("verify.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
  <title>Login</title>
</head>

<style>
  .btn-login {
    margin-left: 20px;
  }
  .label-uname {
    margin-right: 5px;
  }
  .label-password {
    margin-right: 5px;
  }
</style>

<body>
  <section class="hero is-primary is-mobile">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          Purchase Order System
        </h1>
        <h2 class="subtitle">
          Login
        </h2>
      </div>
    </div>
  </section>
  <form action="verify.php" method="POST">
    <section class="section is-medium">
      <div class="level is-mobile">
        <div class="container">
          <!-- <div class="columns">
            <div class="column is-one-third"> -->
              <div class="field is-grouped is-grouped-centered">
                <label class="label label-uname">Username</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="e.g Alex Smith" name="username" required>
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </p>
                </div>
              <!-- </div>
            </div> -->
            <!-- <div class="columns">
              <div class="column is-one-third"> -->
                <div class="field is-grouped is-grouped-centered">
                  <label class="label label-password">Password</label>
                  <p class="control has-icons-left has-icons-right">
                    <input type="password" class="input" name="password" required>
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>
              <!-- </div>
            </div> -->
            <!-- <div class="columns is-mobile">
              <div class="column is-one-fifth">
                <div class="control">
                  <button class="button is-primary">Login</button>
                </div>
              </div>
              <div class="columns is-mobile">
                <div class="column is-one-fifth">
                  <div class="control">
                    <button class="button is-primary btn-login">Register</button>
                  </div>
                </div>
              </div> -->
              <div class="field is-grouped is-grouped-centered">
                  <p class="control">
                    <input type="submit" value="Login" name="login" class="button is-primary is-outlined">
                  </p>
                  <p class="control">
                    <input type="submit" value="Register" name="register" class="button is-primary is-outlined">
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
  <?php include('footer.php');?>
</body>
</html>