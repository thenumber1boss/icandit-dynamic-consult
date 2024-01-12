<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson Request Form for Client</title>

  <link rel="icon" href="img/icandit-fav.png" type="image/x-icon">
  <link rel="stylesheet" href="css/form.css">

   <!-- Bootstrap CSS link here -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add animate.css for text animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>
<body>

<div class="request-form-body">

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" alt="Your Logo" class="logo-image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="quote" onclick="location.href='https://wa.me/+2349021603951'">Free Consultation</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
  
  <div class="is-form">
<form id="lessonForm" method="post" action="submit_lesson_form.php">

  <div class="form-step" data-step="1">
    <div><label for="name">Please Enter Your Name:</label></div>
    <div class="form-element-padding"><input type="text" id="name" name="name" required></div>
  </div>

  <div class="form-step" data-step="2">
    <div><label for="address">Please Enter Your Address:</label></div>
    <div class="form-element-padding"><input type="text" id="address" name="address" required></div>
  </div>

  <div class="form-step" data-step="3">
    <div><label for="email">Please Enter Your Email:</label></div>
    <div class="form-element-padding"><input type="email" id="email" name="email" required></div>
  </div>

  <div class="form-step" data-step="4">
    <div><label for="phone">Please Enter Your Phone Number (WhatsApp Preferably):</label></div>
    <div class="form-element-padding"><input type="tel" id="phone" name="phone" required></div>
  </div>

  <div class="form-step" data-step="5">
    <div><label for="numStudents">How Many Students Do you Need Tutoring For:</label></div>
    <div class="form-element-padding">
        <select id="numStudents" name="numStudents" onchange="showStudentNamesStep()">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
    </div>
  </div>

  <div class="form-step" data-step="6">
    <div id="studentNames"></div>
  </div>

  <div class="form-step" data-step="7">
    <div id="studentDetails"></div>
  </div>

  <div class="form-step" data-step="8">
    <div><label for="lessonMode">What Mode Of Tutoring Is Most Suitable To You:</label></div>
    <div class="form-element-padding">
        <select id="lessonMode" name="lessonMode">
        <option value="" disabled selected>Select an option</option>
            <option value="Online">Online</option>
            <option value="Physical">Physical</option>
            <option value="Hybrid">Hybrid</option>
        </select>
    </div>
  </div>

  <div class="form-step" data-step="9">
    <div><label for="expectations">Please Kindly Let Us Know what Your Expectations Are and Areas You Want Improvements.</label></div>
    <div class="form-element-padding"><textarea id="expectations" name="expectations" rows="4" cols="50"></textarea></div>
  </div>

  <div class="form-step" data-step="10">
    <div><label for="otherInfo">Is There Any Other Information or Special Needs Of The Student That We Should Know About?</label></div>
    <div class="form-element-padding"><textarea id="otherInfo" name="otherInfo" rows="4" cols="50"></textarea></div>
  </div>

  <div class="buttons">
    <button type="button" id="prevBtn" onclick="prevStep()">Back</button>
    <button type="button" id="nextBtn" onclick="nextStep()">Next</button>
  </div>
</form>

<div id="thankYouMessage" style="display: none;">
  <h2>Thank You!</h2>
  <p>Your form has been submitted successfully.</p>
</div>

</div>

<!-- Footer -->
<footer class="foot text-white text-center py-3">
  &copy; 2023 Icandit Dynamic Consult
  <div> Powered by <a href="https://gritinformedia.tech" target="_blank">Grit Informed Media</a>
  </div>
</footer>

            </div>

            <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/lesson_form.js"></script>
</body>
</html>
