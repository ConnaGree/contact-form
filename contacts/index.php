<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="contact-container">
    <div class="contact-card-container">
      <h1>Get in touch</h1>
      <p>Please fill in the fields</p>
      <form class="inputs" action="contact.php" method="post">
        <input type="text" placeholder="Full name" name="name" />
        <input type="email" placeholder="email" name="email" />
        <input type="subject" placeholder="subject" name="subject" />

        <textarea rows="4" name="message" placeholder="Enter message"></textarea>
        <button type="submit" name="submit" class="submit">
          SEND E-MAIL
        </button>
      </form>
    </div>
  </div>
</body>

</html>