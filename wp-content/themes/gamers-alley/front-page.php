<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamers Alley - Home</title>
    <?php wp_head(); ?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/01b172b534.js" crossorigin="anonymous"></script>
    
</head>

<body>

<?php get_header(); ?>

    <div class="main">

        <!-- Login/Signup Modal -->
        <div class="login-modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <h2 class="modal__button--login">Login</h2>
                <h2 class="modal__button--signup">Signup</h2>
                <form action="POST">
                    <fieldset>
                        <label for="email">Email:</label>
                            <input class="modal__input--email" type="email">
                        <label for="password">Password:</label>
                            <input class="modal__input--password" type="password">
                            <input class="modal__input--button" type="button" value="Submit">
                    </fieldset>
                </form>
            </div>   

        </div>

        <div class="content-container">
            <div class="featured-container">
                <h2 class="featured-container__h2"><i>Featured</i></h2>

                <p class="featured-container__p">
                    Zombicide: Black Plague takes the zombie apocalypse into a fantastical medieval setting! The arcane powers of the Necromancers have unleashed a zombie invasion in the age of swords and sorcery, and it's up to your group of straggling survivors to not only stay alive during these dark times, but to take back the realm and punish those responsible for the apocalypse!
                </p>

                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <a href="product-detail.html"><?php echo wp_get_attachment_image(35, "large"); ?></a>
                        <!-- <div class="text">Dominion: Nocturne</div> -->
                    </div>

                    <div class="mySlides fade">
                        <a href="product-detail.html"><?php echo wp_get_attachment_image(18, "large"); ?></a>
                        <!-- <div class="text">Zombicide</div> -->
                    </div>

                    <div class="mySlides fade">
                        <a href="product-detail.html"><?php echo wp_get_attachment_image(27, "large"); ?></a>
                        <!-- <div class="text">Caption Three</div> -->
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>

            <!-- Youtube Video -->
            <div>
                <iframe class="youtube-video" width="600" height="450" src="https://www.youtube.com/embed/gOf6CRKw950" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

    </div>

    <?php get_footer(); ?>