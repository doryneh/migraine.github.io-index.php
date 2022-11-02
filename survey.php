<?php
$page = 'survey';
require("header.php"); ?>



    <div class="container py-md-5 px-3 ">
        <div class="row  ">
            <section class="survey">
                <div class="  title col-12 mx-auto mx-md-0">
                    <h1 class="title-grey">Migraine Survey</h1>
                </div>



                <form action="results.php" method="post" class="row g-3 needs-validation">
                    <div class="col-md-6 col-12">

                        <div class="question">
                            <div class="question-number">
                                Question 1:
                            </div>
                            <div class="question-desc">
                                What is your gender?

                            </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question1" id="flexRadioDefault2" required>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Male
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="question">
                            <div class="question-number">
                                Question 2:
                            </div>
                            <div class="question-desc">
                                How old are you?
                            </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault4" required>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                    ≤ 29 years old
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault5" required>
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        30-39 years old
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault6" required>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        40-49 years old
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault7" required>
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        50-59 years old
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault8" required>
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        ≥ 60 years
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="question">
                            <div class="question-number">
                                Question 3:
                            </div>
                            <div class="question-desc">
                                Have you ever had a headache?
                            </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question3" id="flexRadioDefault9" required>
                                    <label class="form-check-label" for="flexRadioDefault9">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question3" id="flexRadioDefault10" required>
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="question">
                            <div class="question-number">
                                Question 4:
                            </div>
                            <div class="question-desc">
                                Have you or someone in your immediate family, ever been diagnosed by a doctor with migraine?
                            </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question4" id="flexRadioDefault11" required>
                                    <label class="form-check-label" for="flexRadioDefault11">
                                        Yes, I have.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question4" id="flexRadioDefault12" required>
                                    <label class="form-check-label" for="flexRadioDefault12">
                                        Yes, both I and someone else in my immediate family have.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question4" id="flexRadioDefault13" required>
                                    <label class="form-check-label" for="flexRadioDefault13">
                                        No, but I may have had a migraine, I am not sure.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question4" id="flexRadioDefault14" required>
                                    <label class="form-check-label" for="flexRadioDefault14">
                                        No, but someone in my immediate family has.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question4" id="flexRadioDefault15" required>
                                    <label class="form-check-label" for="flexRadioDefault15">
                                        No.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">

                        <div class="question">
                            <div class="question-number">
                                Question 5:
                            </div>
                            <div class="question-desc">
                                How long have you been diagnosed with migraines?
                                <i> (In case he is diagnosed already with Migraine) </i>
                            </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question5" id="flexRadioDefault16" required>
                                    <label class="form-check-label" for="flexRadioDefault16">
                                        Less than a year
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question5" id="flexRadioDefault17" required>
                                    <label class="form-check-label" for="flexRadioDefault17">
                                        For the last five years
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question5" id="flexRadioDefault18" required>
                                    <label class="form-check-label" for="flexRadioDefault18">
                                        For the last 10 years
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question5" id="flexRadioDefault19" required>
                                    <label class="form-check-label" for="flexRadioDefault19">
                                        Longer than 10 years
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question5" id="flexRadioDefault30" required>
                                    <label class="form-check-label" for="flexRadioDefault30">
                                    Am not diagnosed with Migraine
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="question">
                            <div class="question-number">
                                Question 6:
                            </div>
                            <div class="question-desc">
                                Have you ever felt nauseated/sick with a headache?
                            </div>
                            <div class="question-choices">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question6" id="flexRadioDefault20" required>
                                    <label class="form-check-label" for="flexRadioDefault20">
                                        Yes, at least once.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question6" id="flexRadioDefault21" required>
                                    <label class="form-check-label" for="flexRadioDefault21">
                                        No, never.
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="question">
                            <div class="question-number">
                                Question 7:
                            </div>
                            <div class="question-desc">
                                Has light ever bothered you<i>(a lot more than when you didn’t have a headache)</i> with a headache? </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question7" id="flexRadioDefault22" required>
                                    <label class="form-check-label" for="flexRadioDefault22">
                                        Yes, at least once.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question7" id="flexRadioDefault23" required>
                                    <label class="form-check-label" for="flexRadioDefault23">
                                        No, never.
                                    </label>
                                </div>
                            </div>
                        </div>





                        <div class="question">
                            <div class="question-number">
                                Question 8:
                            </div>
                            <div class="question-desc">
                                Has a headache ever limited your ability to do an activity for at least one day?
                            </div>
                            <div class="question-choices">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question8" id="flexRadioDefault24" required>
                                    <label class="form-check-label" for="flexRadioDefault24" required>
                                        Yes, I have.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question8" id="flexRadioDefault25" required>
                                    <label class="form-check-label" for="flexRadioDefault25">
                                        No, never.
                                    </label>
                                </div>
                            </div>
                        </div>



                    </div>
                    <hr>
                    <div class=" mt-md-5 mb-4 text-center">
                        <button class="btn purple-btn submit-btn " type="submit"> Submit</button>
                    </div>
                </form>

            </section>
        </div>
    </div>

</body>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/all.js"></script>


</html>