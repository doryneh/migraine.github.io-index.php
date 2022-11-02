<?php
$page = 'results';
require("header.php"); ?>
    <div class="container pb-5 px-3">
        <div class="row">
            <div class="col-md-3 col-0"></div>
            <div class="col-md-6 col-12 results">
                <div class=" title-grey title col-12 mx-auto mx-md-0 text-md-center">
                    <h1 class="title-grey">Survey Result</h1>
                </div>
                <div class="return">
                    <a href="index.php"> <i class="fa-solid fa-arrow-left-long me-3"></i> Return to Homepage</a>
                </div>

                <div class="div-results mt-5 text-center">
                    <img src="./images/doc.svg" alt="doc" class="mb-5">
                    <p class="result-text">
                        Your results indicate that you could have migraines.
                    </p>
                    <p class="description" style="font-size: 18px;">
                        We recommend for you to speak to a neurologist.
                    </p>

                    <div class="row gx-4 mb-5">
                        <div class="col-md-6 col-12 mb-4 mb-md-0">
                            <button class="btn white-btn" type="button"><i class="fa-solid fa-download me-3"></i> Download results</button>
                        </div>
                        <div class="col-md-6 col-12">
                            <button class="btn  purple-btn" type="button">Book an Appointment</button>

                        </div>
                    </div>

                    <p class="retake-task">
                        <a href="survey.php" class="rotate"> <i class="fa-solid fa-rotate-right me-3"></i> Retake test </a>
                    </p>

                </div>
            </div>
            <div class="col-md-3 col-0"></div>
        </div>
    </div>


</body>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/all.js"></script>


</html>