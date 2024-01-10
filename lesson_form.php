<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Form for Lesson</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  
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

<script src="js/lesson_form.js"></script>
</body>
</html>
