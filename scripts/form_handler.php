
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    $message = $_POST['message'];
    $from = 'From: EmmaWalker.com'; 
    $to = 'e.walke17@gmail.com'; 
    $subject = 'Website Contact Form';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { ?>
<div class="contact_container">
    <h2 class="features_header">Thank you! Message Submitted.</h2>
</div>
            <!-- INSERT PAGE HTML HERE -->
            
        <?php } else { ?>
            
            <!-- INSERT PAGE HTML HERE -->
<div class="contact_container">
    <h2 class="features_header">oof</h2>
</div
        <?php }
    }
?>

