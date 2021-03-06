<?php include 'form_process.php'; ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Contact Form Template</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="http://dev.see8ch.com/see8ch/v3/fonts/ss-social/ss-social.css" rel="stylesheet" />

<link href="http://dev.see8ch.com/see8ch/v3/fonts/ss-standard/ss-standard.css" rel="stylesheet" />
  
  
<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
.error{
  color:red;
}
body {
  background: #efefef;
  font-size: 62.5%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  color: #b6b6b6;
}
body section {
  background: white;
  margin: 60px auto 120px;
  border-top: 15px solid #313a3d;
  text-align: center;
  padding: 50px 0 110px;
  width: 80%;
  max-width: 1100px;
}
body section h1 {
  margin-bottom: 40px;
  font-size: 4em;
  text-transform: uppercase;
  font-family: "Lato", sans-serif;
  font-weight: 100;
}

form {
  width: 58.3333333333%;
  margin: 0 auto;
}
form .field {
  width: 100%;
  position: relative;
  margin-bottom: 15px;
}
form .field label {
  text-transform: uppercase;
  position: absolute;
  top: 0;
  left: 0;
  background: #313a3d;
  width: 100%;
  padding: 18px 0;
  font-size: 1.45em;
  letter-spacing: 0.075em;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field label + span {
  font-family: "SSStandard";
  opacity: 0;
  color: white;
  display: block;
  position: absolute;
  top: 12px;
  left: 7%;
  font-size: 2.5em;
  text-shadow: 1px 2px 0 #cd6302;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"],
form .field textarea {
  border: none;
  background: #e8e9ea;
  width: 80.5%;
  margin: 0;
  padding: 18px 0;
  padding-left: 19.5%;
  color: #313a3d;
  font-size: 1.4em;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}
form .field input[type="text"]#msg,
form .field textarea#msg {
  height: 18px;
  resize: none;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"]:focus, form .field input[type="text"].focused,
form .field textarea:focus,
form .field textarea.focused {
  outline: none;
}
form .field input[type="text"]:focus#msg, form .field input[type="text"].focused#msg,
form .field textarea:focus#msg,
form .field textarea.focused#msg {
  padding-bottom: 150px;
}
form .field input[type="text"]:focus + label, form .field input[type="text"].focused + label,
form .field textarea:focus + label,
form .field textarea.focused + label {
  width: 18%;
  background: #fd9638;
  color: #313a3d;
}
form .field input[type="text"].focused + label,
form .field textarea.focused + label {
  color: #fd9638;
}
form .field:hover label {
  width: 18%;
  background: #313a3d;
  color: white;
}
form input[type="submit"] {
  background: #fd9638;
  color: white;
  -webkit-appearance: none;
  border: none;
  text-transform: uppercase;
  position: relative;
  padding: 13px 50px;
  font-size: 1.4em;
  letter-spacing: 0.1em;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form input[type="submit"]:hover {
  background: #313a3d;
  color: #fd9638;
}
form input[type="submit"]:focus {
  outline: none;
  background: #cd6302;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <section id="hire">
  <h1>Contact Us</h1>

  <form id="contactus" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <div class="field name-box">
      <input type="text" name="name" id="name" value="<?= $name ?>" placeholder="Who Are You?" />
      <label for="name">Name</label>
      <span class="ss-icon">check</span>
      <span class="error"><?= $name_error ?></span>
    </div>

    <div class="field email-box">
      <input type="text" name="email" id="email" value="<?= $email ?>" placeholder="name@email.com" />
      <label for="email">Email</label>
      <span class="ss-icon">check</span>
      <span class="error"><?= $email_error ?></span>
    </div>

    <div class="field phone-box">
      <input type="text" name="phone" id="phone" value="<?= $phone ?>" placeholder="9876543210" />
      <label for="phone">Mobile</label>
      <span class="ss-icon">check</span>
      <span class="error"><?= $phone_error ?></span>
    </div>

    <div class="field msg-box">
      <textarea type="text" name="message" id="msg" rows="4" value="<?= $message ?>" placeholder="Your message goes here..." /></textarea>
      <label for="msg">Message</label>
      <span class="ss-icon">check</span>
      <span class="error"><?= $message_error ?></span>
    </div>

    <input class="button" type="submit" value="Send" />
  </form>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
