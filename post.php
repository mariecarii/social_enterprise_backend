<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="style.css"> 
    <!-- icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Seeds of Life</a>
            <ul class="nav__items">
                <li><a href="blog.html">Foods In Season</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">SignIn</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/farmer1_avatar.png">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
            
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
         </div>
    </nav>
    <!-- end of nav -->

    
    <section class="singlepost">
        <div class="container singlepost__container">
            <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, mollitia? Vel ratione eum, fugit aliquam consectetur magnam. Tempore, accusamus earum?</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/farmer1_avatar.png">
                </div>
                <div class="post__author-info">
                    <h5>By: John Doe </h5>
                    <small>
                        July 21, 2005 - 10:30
                    </small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="images/farmer1_avatar.png">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi similique maxime id corrupti blanditiis dignissimos minima, rem in! Ut saepe, deserunt, laborum dolor exercitationem minima fugiat nemo consequuntur quod, optio itaque facilis! Labore culpa aspernatur eos est maxime ut voluptatibus.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi similique maxime id corrupti blanditiis dignissimos minima, rem in! Ut saepe, deserunt, laborum dolor exercitationem minima fugiat nemo consequuntur quod, optio itaque facilis! Labore culpa aspernatur eos est maxime ut voluptatibus.
            </p><p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi similique maxime id corrupti blanditiis dignissimos minima, rem in! Ut saepe, deserunt, laborum dolor exercitationem minima fugiat nemo consequuntur quod, optio itaque facilis! Labore culpa aspernatur eos est maxime ut voluptatibus.
            </p><p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi similique maxime id corrupti blanditiis dignissimos minima, rem in! Ut saepe, deserunt, laborum dolor exercitationem minima fugiat nemo consequuntur quod, optio itaque facilis! Labore culpa aspernatur eos est maxime ut voluptatibus.
            </p>
        </div>
    </section>

    <!-- start of categories -->
    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Foods in Season</a>
            <a href="" class="category__button">Farmer Bios</a>
            <a href="" class="category__button">Recipes</a>
            <a href="" class="category__button">Money Saving Resources</a>

        </div>
    </section>

    <!-- start of footer -->
    <footer>
        <div class="footer__socials">
            <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Foods In Season</a></li>
                <li><a href="">Farmer Bios</a></li>
                <li><a href="">Recipes</a></li>
                <li><a href="">Money Saving Resources</a></li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Locations</a></li>
            </ul>
        </article>
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Foods In Season</a></li>
                <li><a href="">Farmer Bios</a></li>
                <li><a href="">Recipes</a></li>
                <li><a href="">Money Saving Resources</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; MARIE </small>
    </div>
</footer>

    <script src="./main.js"></script>
</body>
</html>