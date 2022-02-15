<?php
$title = "number";
include_once "layouts/header.php";
require_once "layouts/nav.php";
?>







<?php if (isset($_POST['form_submitted'])) : ?>
    <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>

    <p>You have been registered as
        <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
    </p>

    <p>Go <a href="/registration_form.php">back</a> to the form</p>

<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-4">
                <h2>Registration Form</h2>

                <form action="review.php" method="POST">

                    First name:
                    <input type="text" name="firstname">

                    <br> Last name:
                    <input type="text" name="lastname">
<br>
                    <input type="hidden" name="form_submitted" value="1" />

                    <input type="submit" value="Submit">

                </form>

            <?php endif; ?>
            </div>
        </div>
    </div>








    <?php
    include_once "layouts/footer.php";
    require_once "layouts/script.php";
    ?>