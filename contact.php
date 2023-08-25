<?php
session_start();
require('./includes/header.php') ?>
<section class="top_hero">
    <div class="img">
        <img src="./images/top_hero_bg_1.png" alt="">
    </div>
    <div class="text">
        <h1>Contact</h1>
        <p><a href="./index.php">Home</a> >> <span>Contact</span> </p>
    </div>
</section>
<section class="contact_1">
    <div class="container">
        <div class="head_text">
            <h1>Connect with Us <img src="./images/logo_footer.svg" alt=""></h1>
            <p>Reach out to us today and let's collaborate to create a <br> more environmentally sustainable future together.</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 p-2">
                <div class="box">

                    <div class="img">
                        <img src="./images/phone-call.svg" alt="">
                    </div>

                    <div class="text">
                        <h2>Contact Number</h2>
                        <p><a href="#!">98100-32481</a>,<a href="#!">97180-13658</a></p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="box">

                    <div class="img">
                        <img src="./images/mail.svg" alt="">
                    </div>

                    <div class="text">
                        <h2>Email Address</h2>
                        <p><a href="#!">emtrcjkm@gmail.com</a></p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="box">

                    <div class="img">
                        <img src="./images/map.svg" alt="">
                    </div>

                    <div class="text">
                        <h2 class="m-0">Address</h2>
                        <div class="address">
                            <p><span>Residential Office </span>- Block 34, Plot 13, Nehru Nagar (West), Bhilai, Dist. Durg (C.G.) - 490020</p>
                            <p><span>Registered Office</span> - Tower 5, Flat 102, CWG village, DELHI - 110092</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['EMTRC_msg'])) {
            echo "<script> alert('" . $_SESSION['EMTRC_msg'] . "') </script>";
            unset($_SESSION['EMTRC_msg']);
        }
        ?>
        <div class="input_form">
            <p>Let's Connect for a Greener Tomorrow</p>
            <div class="row">
                <div class="col-md-6 flex_box">
                    <form action="./A_email/send_email.php" method="post">
                        <h2>Contact</h2>
                        <input type="text" name="name" class="input_box" placeholder="Name">

                        <input type="number" name="number" class="input_box" placeholder="Contact Number">

                        <input type="email" name="email" class="input_box" placeholder="Email Address">

                        <textarea name="message" id="" cols="30" rows="4" class="input_box" placeholder="Message"></textarea>

                        <button name="submit" class="sub_btn">Submit</button>
                    </form>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.485977262665!2d81.3243017740516!3d21.212569181442436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293d8b8c00db95%3A0xe802ff6d07a3cca3!2sNehru%20nagar!5e0!3m2!1sen!2sin!4v1692709908227!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="single_line">
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <h3>Empowering Environmental Excellence for a Sustainable Tomorrow.</h3>
        <div class="img">
            <img src="./images/logo_footer.svg" alt="">
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>