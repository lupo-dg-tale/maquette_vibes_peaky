<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peaky BLinders</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>

<body>
    <div id="drop"><i class="fas fa-tint"></i></div>
    <div class="wrapper">
        <header class="">
            <div class="wrapper-out flex">
                <img id="logo" src="img/logo.png" alt="logo">
                <nav>
                    <a href="#">HOME</a>
                    <a href="#">ABOUT</a>
                    <a href="#">PORTFOLIO</a>
                    <a href="#">TESTIMONIALS</a>
                    <a href="#">CONTACT</a>
                    <a href="#">PAGES</a>
                </nav>
            </div>

        </header>
        <main>
            <section id="first">
                <div class="mySlides un">
                    <div class="wrapper-in">
                        <h2>HTML TEMPLATE FOR CREATIVE FOLKS AND DESIGN AGENCIES</h2>
                        <p>Far far away, behind the word moutains, far from the countries Vokalia and Consonantia, there
                            live
                            the blind texts.</p>
                        <button>READ MORE</button>
                    </div>
                </div>
                <div class="mySlides deux">
                    <div class="wrapper-in">
                        <h2>HTML TEMPLATE FOR CREATIVE FOLKS AND DESIGN AGENCIES</h2>
                        <p>Far far away, behind the word moutains, far from the countries Vokalia and Consonantia, there
                            live
                            the blind texts.</p>
                        <button>READ MORE</button>
                    </div>
                </div>
                <div class="mySlides trois">
                    <div class="wrapper-in">
                        <h2>HTML TEMPLATE FOR CREATIVE FOLKS AND DESIGN AGENCIES</h2>
                        <p>Far far away, behind the word moutains, far from the countries Vokalia and Consonantia, there
                            live
                            the blind texts.</p>
                        <button>READ MORE</button>
                    </div>
                </div>


            </section>
            <section id="choose">
                <div id="choose-us" class="wrapper-out flex">
                    <article>
                        <h3>Why Choose Us?</h3>
                        <p>Meacenas tempus, telllus eget condimomentum rhoncus, sem quam semper libero, sit amet.</p>
                        <p><small>Nam quam nunc, blandit vel, luctus pulvinar, hendredrit id, lorem. Maecenas nec odio
                                et
                                ante tincidunt tempus. Donec vitae <span>sapien ut libero</span></small></p>
                    </article>
                    <article>
                        <h3>What You Get?</h3>
                        <dl class="flex">
                            <div class="flex icons">
                                <i class="fab fa-wordpress"></i>
                                <i class="fas fa-cog"></i>
                                <i class="far fa-paper-plane"></i>
                            </div>
                            <div>
                                <dt>COLORFUL & COMPACT</dt>
                                <dd>Portfolio WordPress Theme</dd>

                                <dt class="dt">VERY EASY TO USE</dt>
                                <dd>Page Builder & Shortcodes</dd>

                                <dt class="dt">CODED WITH SASS</dt>
                                <dd>Created Custom Skins in Minutes</dd>
                            </div>

                        </dl>
                    </article>
                    <article>
                        <button class="accordion">NULLA CONSEQUAT MASSA</button>
                        <div class="panel">
                            <p>In enim justo, rhoncus ut, imperdita, venenatis vitea, justo.</p>
                        </div>
                        <button class="accordion">VIVAMUS ELEMENTUM</button>
                        <div class="panel">
                            <p>In enim justo, rhoncus ut, imperdita, venenatis vitea, justo.</p>
                        </div>
                        <button class="accordion">ETIAM ULTRICIES NISI VEL</button>
                        <div class="panel">
                            <p>In enim justo, rhoncus ut, imperdita, venenatis vitea, justo.</p>
                        </div>
                    </article>
                </div>

            </section>
            <section id="gallery" class="flex">
                <div>
                    <figure data-src="img/gallery_1.jpg" data-fancybox="images"><img src="img/gallery_1.jpg" alt="logo shelby">
                        <figcaption><i class="fas fa-expand"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-fancybox data-src="#audio"><img src="img/gallery_2.jpg" alt="tommy shelby">
                        <figcaption><i class="fas fa-volume-up"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-fancybox data-src="https://www.youtube.com/watch?v=oVzVdvGIC7U"><img src="img/gallery_3.jpg" alt="frère shelby">
                        <figcaption><i class="far fa-play-circle"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-src="img/gallery_4.jpg" data-fancybox="images"><img src="img/gallery_4.jpg" alt="le juif">
                        <figcaption><i class="fas fa-expand"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-fancybox data-src="https://www.youtube.com/watch?v=OU1iZoOrkVo"><img src="img/gallery_5.jpg" alt="bar shelby">
                        <figcaption><i class="far fa-play-circle"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-fancybox data-src="#audio"><img src="img/gallery_6.jpg" alt="tommy à la gare">
                        <figcaption><i class="fas fa-volume-up"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-src="img/gallery_7.jpg" data-fancybox="images"><img src="img/gallery_7.jpg" alt="vieille voiture">
                        <figcaption><i class="fas fa-expand"></i></figcaption>
                    </figure>
                </div>
                <div>
                    <figure data-src="img/gallery_8.jpg" data-fancybox="images"><img src="img/gallery_8.jpg" alt="flingue et whisky">
                        <figcaption><i class="fas fa-expand"></i></figcaption>
                    </figure>
                </div>
                <div id="sorter" class="flex">
                    <div class="flex">
                        <button>ALL</button>
                        <button>AUDIO</button>
                        <button>IMAGE</button>
                        <button>VIDEO</button>
                    </div>
                    <button>LOAD MORE</button>
                </div>
            </section>
            <section id="testimonials">
                <h2>CLIENT TESTIMONIALS</h2>
                <div class="petit-trait"></div>
                <div class="flex wrapper-out">
                    <i class="fas fa-smile"></i>
                    <blockquote>
                        <p>Quisque rutrum. Aenan imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                            ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>
                        <footer>
                            <p><strong>Tommy Mars</strong>, Designer</p>
                        </footer>
                    </blockquote>
                </div>
                <div class="flex wrapper-out">
                    <blockquote id="right">
                        <p>Aenan impediet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam
                            eget dui. Etiam rhoncus.</p>
                        <footer>
                            <p><strong>Floor Simons</strong>, Startup CEO</p>
                        </footer>
                    </blockquote>
                    <i class="far fa-meh"></i>
                </div>
                <div id="noborder" class="flex wrapper-out">
                    <i class="fas fa-frown"></i>
                    <blockquote>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque itaque impedit quos placeat,
                            ab, esse velit est nemo exercitationem dolor adipisci rerum.</p>
                        <footer>
                            <p><strong>Mick Neil</strong>, Rock Star</p>
                        </footer>
                    </blockquote>
                </div>
                <button>BECOME OUR CLIENT</button>
            </section>
            <section id="paralax">
                <h2>NEW HORIZONS AWAIT</h2>
                <div class="petit-trait"></div>
                <p class="wrapper-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam amet porro animi
                    ut nam quis delectus
                    nesciunt? Ex unde iusto repellendus ipsa eligendi quo, est nostrum dolor, atque facilis dolores
                    maiores dignissimos praesentium?</p>
                <button>BUY VIBES ON THEMEFOREST</button>
            </section>
            <section id="touch" class="">
                <h2>GET IN TOUCH</h2>
                <div class="petit-trait"></div>
                <form action="traitement.php" method="POST" class="flex wrapper-out">

                    <?php
                    if (isset($_SESSION["error"])) {
                        echo "<div>" . $_SESSION["error"] . "</div>";
                    } else if (isset($_SESSION["success"])) {
                        echo "<div>" . $_SESSION["success"] . "</div>";
                    }
                    ?>

                    <div id="ancre" class="flex">
                        <label class="required" for="name">YOUR NAME</label>
                        <input type="text" name="name" id="name" required>

                        <?php
                        if (isset($_SESSION["nomvide"])) {
                            echo "<div>" . $_SESSION["nomvide"] . "</div>";
                        }
                        ?>

                        <label class="required" for="email">YOUR EMAIL</label>
                        <input type="mail" name="email" id="email" required>

                        <?php
                        if (isset($_SESSION["invalidmail"])) {
                            echo "<div>" . $_SESSION["invalidmail"] . "</div>";
                        }

                        if (isset($_SESSION["mailvide"])) {
                            echo "<div>" . $_SESSION["mailvide"] . "</div>";
                        }
                        ?>

                        <label for="phone">YOUR PHONE</label>
                        <input type="number" name="phone" id="phone">
                    </div>
                    <div class="flex">
                        <label for="subject">SUBJECT</label>
                        <input type="text" name="subject" id="subject">
                        <label class="required" for="message">MESSAGE</label>
                        <textarea name="message" id="message" cols="30" rows="6" required></textarea>

                        <?php
                        if (isset($_SESSION["messagevide"])) {
                            echo "<div>" . $_SESSION["messagevide"] . "</div>";
                        }
                        ?>

                        <input id="submit" type="submit" value="SEND">
                    </div>

                </form>
            </section>
            <section id="about">
                <div class="flex wrapper-out">
                    <div>
                        <h3>ABOUT VIBES</h3>
                        <div class="mini-trait"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam earum tempore
                            <strong>accusantium
                                quas
                                ipsam, ad molestiae rerum officiis pariatur dolorum</strong>strong voluptatum nulla?
                            Saepe,
                            quia similique?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<span>ThemeForest</span></p>
                    </div>
                    <div>
                        <h3>NEWSLETTER</h3>
                        <div class="mini-trait"></div>
                        <p><strong>VIBES</strong> contains fully working <strong>MailChimp</strong> subscrib form.</p>
                        <form action="">
                            <input id="adress" type="text" name="emailadress" placeholder="Your Email Adress">
                            <input id="subscribe" type="submit" value="SUBSCRIBE">
                        </form>
                    </div>
                    <div id="twitter">
                        <h3>TWITTER FEED</h3>
                        <div class="mini-trait"></div>
                        <i class="fas fa-cube"></i>
                        <i class="fas fa-cube"></i>
                        <i class="fas fa-cube"></i>
                        <i class="fas fa-cube"></i>
                        <i class="fas fa-cube"></i>
                    </div>
                </div>
                <div id="page-up">
                    <a href="#"><i id="arrow" class="fas fa-angle-up"></i></a>
                </div>
            </section>
        </main>
        <footer id="footer" class="wrapper-out flex">
            <p>Buy this theme on <a href="#">ThemeForest.net</a></p>
            <nav id="footer-nav">
                <a href="#">Home</a>
                <a href="#">Elements</a>
                <a href="#">Documentation</a>
            </nav>
        </footer>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <div hidden id="audio"><iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/679999073&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
        <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
            <a href="https://soundcloud.com/bonnierbooksuk" title="Bonnier Books UK" target="_blank" style="color: #cccccc; text-decoration: none;">Bonnier Books UK</a> · <a href="https://soundcloud.com/bonnierbooksuk/peaky-blinders-the-real-story-by-carl-chinn-audiobook-sample" title="Peaky Blinders: The Real Story by Carl Chinn - Audiobook sample" target="_blank" style="color: #cccccc; text-decoration: none;">Peaky Blinders: The Real Story by Carl Chinn - Audiobook
                sample</a></div>
    </div>

</body>

</html>
<?php
session_destroy();
?>