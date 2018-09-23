<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yikes!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <article class="message is-danger">
        <div class="message-header">
          <p>Error</p>
          <button class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body">
          Oops! Incorrect credentials. <strong>Please check your username and password</strong>, and <a href="login.php">try again.</a>
        </div>
      </article>
    </div>
  </section>
  </body>
  <?php include('footer.php');?>
</html>
