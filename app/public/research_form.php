<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Request Form for Client</title>

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
  <form id="researchForm" method="post" action="submit_research_form.php">

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
  <div><label for="institution">Current Institution of Study:</label></div>
  <div class="form-element-padding"><input type="text" id="institution" name="institution" required></div>
</div>

<div class="form-step" data-step="6">
  <div><label for="course">Course of Study:</label></div>
  <div class="form-element-padding"><input type="text" id="course" name="course" required></div>
</div>

<div class="form-step" data-step="7">
  <div><label for="level">Current Level of Study:</label></div>
  <div class="form-element-padding">
    <select id="level" name="level" required>
    <option value="" disabled selected>Select an option</option>
      <option value="Undergraduate">Undergraduate</option>
      <option value="Postgraduate">Postgraduate</option>
      <option value="Masters">Masters</option>
      <option value="PhD">PhD</option>
    </select>
  </div>
</div>

<div class="form-step" data-step="8">
  <div><label for="researchTopic">Topic of the Research:</label></div>
  <div class="form-element-padding"><input type="text" id="researchTopic" name="researchTopic" required></div>
</div>

<div class="form-step" data-step="9">
  <div><label for="researchLevel">Current Level of Research:</label></div>
  <div class="form-element-padding">
    <select id="researchLevel" name="researchLevel" required>
    <option value="" disabled selected>Select an option</option>  
      <option value="Yet to Begin">Yet to Begin</option>
      <option value="Exploratory">Exploratory</option>
      <option value="Literature Review">Literature Review</option>
      <option value="Data Collection">Data Collection</option>
      <option value="Data Analysis">Data Analysis</option>
      <option value="Writing">Writing</option>
      <option value="Editing/Proofreading">Editing/Proofreading</option>
    </select>
  </div>
</div>

<div class="form-step" data-step="10">
  <div><label for="researchChallenges">Current Challenges with the Research (if any):</label></div>
  <div class="form-element-padding"><textarea id="researchChallenges" name="researchChallenges" rows="4" cols="50"></textarea></div>
</div>

<div class="form-step" data-step="11">
  <div><label for="timeFrame">Time Frame to Complete the Research:</label></div>
  <div class="form-element-padding"><input type="text" id="timeFrame" name="timeFrame" required></div>
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
<script src="js/research_form.js"></script>
</body>
</html>
