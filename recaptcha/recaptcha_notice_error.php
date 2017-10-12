<?php process_si_contact_form(); // Process the form, if it was submitted

if (isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true):

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 error">
There was a problem with your submission.  Errors are displayed below in red.
</div>
<?php elseif (isset($_SESSION['ctform']['success']) && $_SESSION['ctform']['success'] == true): /* form was processed successfully */ ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 success">
The captcha was correct and the message has been sent!  The captcha was solved in 
<?php echo $_SESSION['ctform']['timetosolve'] ?> seconds.
</div>
<?php endif; ?>