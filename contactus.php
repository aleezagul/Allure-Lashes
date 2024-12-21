<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>contact</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>
<?php include 'nav.php';?>

<body>
  <section class="contact-us">
    <h1>Contact US</h1>
    <form class="contact-form">
      <div class="form-group">
        <label for="name" class="name">Name</label>
        <input type="text" id="name" required />
      </div>

      <div class="form-group">
        <label for="email" class="email">Email</label>
        <input type="email" id="email" required />
      </div>

      <div class="form-group">
        <label for="subject" class="subject">Subject</label>
        <input type="text" id="subject" rows="5" required />
      </div>

      <div class="form-group">
        <label for="enquiry" class="enquiry">Enquiry</label>
        <textarea id="text" required></textarea>
      </div>

      <div class="form-group">
        <label for="" class="order-number">Order number</label>
        <input type="number" id="ordernumber" required />
      </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </section>

  <section class="contact-us-socials">
    <div class="contact-us-info">
      <h1>Cant find what you're looking for?</h1>
      <p>Contact us on social media</p>

      <div class="social-icons">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-tiktok"></i>
        <i class="fa-solid fa-envelope"></i>
      </div>
    </div>
  </section>
</body>
<?php include 'footer.php';?>
<script src="contact.js"></script>

</html>