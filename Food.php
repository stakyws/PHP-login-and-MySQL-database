<?php 
    if(isset($_POST["out"]))
    {
        setcookie("user_email",$row['user_name'], time() - 1);
        setcookie("user_password", $_POST[""] , time() - 1);
        header("location:Signin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Food</title>

     <link rel="stylesheet" href="assets/css/Food.css">


    
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fontawsome -->

        <!-- Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
        <!-- Icon -->
</head>
<body>
    <!-- ********************************************************* -->
        <!-- Wrapper -->
    	
    <header>
        <div id="home" class="content">
            <h1>Welcome To <span class="text-span">Food Lover </span>Restaurant</h1>
            <p class="p1">Here you can find Most  delicacies food in the world</p>
            <form action="C:\Users\Smart\Desktop\ALL_FOLDER\A-HTML AND CSS\Coffee\Coffee.html" target="_blank" method="get">
                <button class="button-1">Book a Table</button>
            </form>
        </div>
    </header>

     <!-- Start Menue wrapper -->

     <!-- وهي تعد إختصار لحجم الكود include("php اسم صفحة ال") نعرضها هنا بخاصية ال menue صفحة ال -->
    <?php 
        include("Food_menue.php");
    ?>
    <!-- End Menue wrapper -->
        <!-- ********************************************************* -->
    <section id="about">
        <div class="history">
            <div class="title">
                <h2>The Food Lover History</h2>
                <p>More Than 25+ Years Of Experience</p>
            </div>
            <div class="about-history">
                <div class="pargraf">
                    <p>lorme ipsum dolor amet consectetur adipisicing elit. recusandae
                        minus totam tempora
                        nostrum nostrum asperiores nemo culpe provident explicabo nesciunt iusto nulla,
                        mainima commodi iste
                        quo sed eos eos dignissimos fugit est?
                    </p>
                    <br>
                    <p>lorme ipsum dolor amet consectetur adipisicing elit. recusandae
                            minus totam tempora
                            nostrum nostrum asperiores nemo culpe provident explicabo nesciunt iusto nulla,
                            mainima commodi iste
                            quo sed eos eos dignissimos fugit est?
                    </p>

                    <form action="#" method="get">
                        <button class="button-2">LEARN MORE</button>
                    </form>
                </div>
                <img src="img/about_img.png" alt="Pizza">
            </div>
        </div>
    </section>
    <!-- ********************************************************* -->

    <section id="offers">
        <div class="history">
            <div class="title">
                <h2>Our Special Offers</h2>
                <p class="pp">More Than 25+ Years Of Experience</p>
            </div>
            <div class="offers-items">
                <div>
                    <img src="img/offer1.png" alt="Quattro Pasta">
                    <div>
                        <h3>Quattro Pasta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                            elit, Nam, quibusdam</p>
                        <p class="mony"><del>$ 55.00</del> <span class="text-span"> $18.00</span></p>
                    </div>
                </div>

                <div>
                    <img src="img/offer2.png" alt="Vegertarian Pasta">
                    <div>
                        <h3>Vegertarian Pasta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                            elit, Nam, quibusdam</p>
                            <p class="mony"><del>$ 55.00</del> <span class="text-span"> $18.00</span></p>
                    </div>
                </div>

                <div>
                    <img src="img/offer3.png" alt="Gluten-Free pasta">
                    <div>
                        <h3>Gluten-Free pasta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                            elit, Nam, quibusdam</p>
                            <p class="mony"><del>$ 55.00</del> <span class="text-span"> $18.00</span></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ********************************************************* -->
    <section id="menu">
        <div class="history">
            <div class="title">
                <h2>Our Special Menu</h2>
                <p class="pp">Order Two And Get Third For Free</p>
            </div>
            <div class="menu-items">
                <div class="menu-items-left">
                    <div class="menu-item">
                        <img src="img/food1.png" alt="LASAL Cheese">
                        <div>
                            <h3>LASAL Cheese <span class="text-span"> $18.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food2.png" alt="Jumbo Crab Shrimp">
                        <div>
                            <h3>Jumbo Crab Shrimp <span class="text-span"> $24.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food3.png" alt="Koktail Jucie">
                        <div>
                            <h3>Koktail Jucie <span class="text-span"> $12.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food4.png" alt="Capo Steak">
                        <div>
                            <h3>Capo Steak <span class="text-span"> $60.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food5.png" alt="Organnic Fruit Salad">
                        <div>
                            <h3>Organnic Fruit Salad <span class="text-span"> $8.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food6.png" alt="Cheese Pizza">
                        <div>
                            <h3>Cheese Pizza <span class="text-span"> $18.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                </div>

                <div class="menu-items-right">
                    <div class="menu-item">
                        <img src="img/food7.jpeg" alt="Kofta Meat">
                        <div>
                            <h3>Kofta Meat <span class="text-span"> $40.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food8.jpeg" alt="Spanish Pies">
                        <div>
                            <h3>Spanish Pies <span class="text-span"> $14.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food9.jpeg" alt="Cheese Tost">
                        <div>
                            <h3>Cheese Tost<span class="text-span"> $6.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food10.jpeg" alt="Fruit Salda">
                        <div>
                            <h3>Fruit Salda <span class="text-span"> $14.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food11.jpeg" alt="Chicken Shawarma">
                        <div>
                            <h3>Chicken Shawarma <span class="text-span"> $20.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/food12.jpeg" alt="Mega Cheese Pizza">
                        <div>
                            <h3>Mega Cheese Pizza <span class="text-span"> $30.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adiplsiclng 
                                elit, Natus, deserunt,</p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="#" method="get">
                <button class="button-3">LEARN MORE</button>
            </form>
        </div>
    </section>
    <!-- ********************************************************* -->
    <section id="timer">
        <div class="time-items">
            <div class="time-item">
                <img src="img/breckfastIcon.png" alt="Breakfast">
                <div>
                    <h3>Breakfast</h3>
                    <p>8:00 Am to 10:00 Am</p>
                </div>
            </div>
            <div class="time-item">
                <img src="img/lunchIcon.png" alt="Lunch">
                <div>
                    <h3>Lunch</h3>
                    <p>4:00 Pm to 7:00 Pm</p>
                </div>
            </div>
            <div class="time-item">
                <img src="img/dinnerIcon.png" alt="Dinner">
                <div>
                    <h3>Dinner</h3>
                    <p>9:00 Pm to 1:00 Am</p>
                </div>
            </div>
            <div class="time-item">
                <img src="img/dessertIcon.png" alt="Dessert">
                <div>
                    <h3>Dessert</h3>
                    <p>All day</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************************************************* -->
    <section id="gallery">
        <div class="history">
            <h2>Our Food Gallery</h2>
            <div class="img-gallery">
                <img src="img/gallery1.jpeg" alt="Gallery1">
                <img src="img/gallery2.jpeg" alt="Gallery2">
                <img src="img/gallery3.jpeg" alt="Gallery3">
                <img src="img/gallery4.jpeg" alt="Gallery4">
                <img src="img/gallery5.jpeg" alt="Gallery5">
                <img src="img/gallery6.jpeg" alt="Gallery6">
            </div>
        </div>
    </section>
    <!-- ********************************************************* -->
    <section id="contact">
        <div class="history">
            <div class="contact-content">
                <div class="contact-info">
                    <div>
                        <h3>ADDRESS</h3>
                        <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                        </svg>Sort the directory, 6 October, Yemen</p>

                        <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                        </svg> Phone: 780721071</p>

                        <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                        </svg> Support@foodlover.com</p>
                    </div>
                    <div>
                        <h3>WORKING HOURS</h3>
                        <p>8:00 am to 11:00 pm on Weekdays</p>
                        <p>11:00 am to 1:00 Am on Weekends</p>
                    </div>
                    <div>
                        <h3>FOLLOW US</h3>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                    </div>
                </div>
                <form action="#" method="post">
                    <input type="text" name="Name" id="name" placeholder="Full Name">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-third" class="button-4">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </section>
    </main>
    <!-- ********************************************************* -->
    <footer id="footer">
        <p>Copyright &copy; 2024 All rights reserved | made by <b> <a href="mailto:stakywsnablyws@gmail.com "
                    target="_blank"> AL-Hackers</a> </b></p>
    </footer>
    <!-- ********************************************************* -->

    
</body>
</html>