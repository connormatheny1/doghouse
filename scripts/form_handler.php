
<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DogHouse</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="../styles/main.css" rel="stylesheet" type="text/css">
        <script src="../js/script.js"></script>
    </head>
    
    <body>
        
    <!--DO this stuff    

        <!-- horizontal nav bar, logo top left, unordered inline list for nav -->
            <!-- index, meet the team, about us w/contact, gallery, scheduler -->
        
        <nav id="nav_container">
            <div id="logo_container"><a href="../index.html"><img src="../images/doghouse-logo.png" height="63"></a></div>
            <ul id="nav_list_container">
                <a href="../index.html"><li class="nav_item">Home</li></a>
                <a href="../documents/gallery.html"><li class="nav_item">Gallery</li></a>
                <a href="../documents/scheduler.html"><li class="nav_item">Scheduler</li></a>
                <a href="../documents/meet-the-team.html"><li class="nav_item">Meet the Team</li></a>
                <a href="../documents/about.html"><li class="nav_item">About</li></a>
            </ul>
        </nav>
        
        
        <h2 class="features_header">About DogHouse</h2>
        
        <div class="about_container">
            <div id="about_text">
                <p>
                    DogHouse is a place where people can come play with dogs and brighten up their day. Within our building are plenty of spaces for playtime. Each space is filled with toys, treats, and more. Patrons can play with the dogs or even just come in for some cuddle time.<br><br> DogHouse also has outdoor spaces for those of you who would prefer to play fetch or take a stroll with your temporary canine companion. Our appointments range from 15 minutes to an hour with a dog of your choice and can be reserved on site or here on our website!<br><br>
                    Looking to adopt your favorite DogHouse companion? Just ask our staff if that particular dog is available for adoption and you could take home a new best friend same day!
                </p>
            </div>
        </div>
        
        
        
        <div class="hours_container">
            <div class="hours">
                <h2>Hours</h2>
            </div>
            
            <div id="map">
                <h2>Location</h2>
            </div>
        </div>
        
        
        
    <div class="info_container">    
        <div class="hours_container_hidden">
            <div class="hours_hidden">
                <p><b>Monday—Friday:</b> <em>10:00am - 6:00pm</em></p>
                <p><b>Saturday:</b><em> 11:00am - 7:00pm</em></p>
                <p><b>Sunday:</b><em> 12:00pm - 6:00pm</em></p>
            </div>
        </div>
        
        <div class="hours_container_hidden">    
            <div id="map_hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.1563310425427!2d-84.74603168467699!3d39.510961218148665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88403d12ef3ab947%3A0x3fc085b224a30e09!2s13+N+Beech+St%2C+Oxford%2C+OH+45056!5e0!3m2!1sen!2sus!4v1543351069902" width="480" height="350" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
        
        
  </div>      
        <?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    $message = $_POST['message'];
    $from = 'From: EmmaWalker.com'; 
    $to = 'connormatheny1@gmail.com'; 
    $subject = 'Website Contact Form';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
        
        ?>
        
            <!-- INSERT PAGE HTML HERE -->
            
        <?php 
        } 
        else { 
        ?>
            

        <?php }
    }
?>
        
        
        
        <div class="contact_container"> 
            <h1>Thank you!</h1>
            
            <h2 style="text-align:center;">Your message has been sent!</h2>
        </div>
        
        
        
        
        
        <footer id="footer">
            &copy;DogHouse 2018
        </footer>
        </body>
    
</html>


