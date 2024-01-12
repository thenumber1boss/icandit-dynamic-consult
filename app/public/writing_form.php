<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Writing Request Form for Client</title>

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
  <form id="writingForm" method="post" action="submit_writing_form.php">

<div class="form-step" data-step="1">
  <div><label for="name">Please Enter Your Name:</label></div>
  <div class="form-element-padding"><input type="text" id="name" name="name" required></div>
</div>

<div class="form-step" data-step="2">
  <div><label for="address">Please Enter Your Address:</label></div>
  <div class="form-element-padding"><input type="text" id="address" name="address" required></div>
</div>

<div class="form-step" data-step="3">
  <div><label for="phone">Please Enter Your Phone Number (What-App Preferably):</label></div>
  <div class="form-element-padding"><input type="tel" id="phone" name="phone" required></div>
</div>

<div class="form-step" data-step="4">
  <div><label for="writingType">What type of Educational Writing Assistance do you need?</label></div>
  <div class="form-element-padding">
    <select id="writingType" name="writingType" required>
      <option value="" disabled selected>Select an option</option>
      <option value="Articles">Articles</option>
      <option value="Books">Books</option>
      <option value="Publication">Publication (Journals)</option>
    </select>
  </div>
</div>

<div class="form-step" data-step="5">
  <div><label for="areaOfInterest">Area of Interest:</label></div>
  <div class="form-element-padding"><input type="text" id="areaOfInterest" name="areaOfInterest" required></div>
</div>

<div class="form-step" data-step="6">
  <div><label for="writingTitle">Title of the Article/Book/Publication:</label></div>
  <div class="form-element-padding"><input type="text" id="writingTitle" name="writingTitle" required></div>
</div>

<div class="form-step" data-step="7">
  <div><label for="writingLevel">What is the current level of the work?</label></div>
  <div class="form-element-padding">
  <select id="writingLevel" name="writingLevel" required>
    <option value="" disabled selected>Select an option</option>
    <option value="Planning Stage">Planning Stage</option>
    <option value="Researching">Researching</option>
    <option value="Drafting">Drafting</option>
    <option value="Editing/Revising">Editing/Revising</option>
    <option value="Reviewing Feedback">Reviewing Feedback</option>
    <option value="Finalizing">Finalizing</option>
</select>

  </div>
</div>

<div class="form-step" data-step="8">
  <div><label for="challenges">What challenges are you currently experiencing?</label></div>
  <div class="form-element-padding"><textarea id="challenges" name="challenges" rows="4" cols="50" required></textarea></div>
</div>

<div class="form-step" data-step="9">
  <div><label for="timeframe">What is the timeframe for completion of the work?</label></div>
  <div class="form-element-padding"><input type="text" id="timeframe" name="timeframe" required></div>
</div>

<div class="buttons">
  <button type="button" id="prevBtn" onclick="prevStep()">Back</button>
  <button type="button" id="nextBtn" onclick="nextStep()">Next</button>
</div>
</form>

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
<script src="js/writing_form.js"></script>
</body>
</html>
