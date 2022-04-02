<?php
session_start();
require_once('php/link.php');

$current_date = strtotime(date("r"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="<?php echo $baseurl; ?>" target="_blank"> -->

    <!-- Enter a proper page title here -->
    <title>Template | Example with all standards</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="ENTER_PAGE_TITLE" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="ENTER_PAGE_URL" />

    <!-- Enter page description -->
    <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" />

    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="ENTER_FAVICON_LOCATION">


    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>

    </style>
</head>

<body>
    <!-- <div class="container-fluid  vh-100 preloader" style=" background-color: #172027;">


        &nbsp;

        <img src=" images/no-halftime-loaders-petrick.gif" style="  position: absolute;background-color: #172027;
            top: 50%; right: 50%;
            transform: translate(50%,-50%);  margin: 0;">


    </div> -->
    <div class="main">
        <div class="d-none d-lg-block">

            <!-- Enter code for desktop UI here -->
            <div class="container-fluid pl-0 pr-0 header fixed-top">
            </div>
            <div class="container-fluid live-section1">
                <h2 class="text-center"><span style="color: #FFFFFF;">LIVE</span> EVENTS</h2>
                <?php
                $result = mysqli_query($link, "SELECT * FROM  `events`");
                if (mysqli_num_rows($result) != 0) {
                    while ($row = mysqli_fetch_array($result)) {




                ?>
                        <div class="container main-match pb-5">
                            <div class="d-flex justify-content-center image-bg">
                                <a href="#"><img src="assets/images/match_box.png"></a>
                            </div>
                            <div class="match-box container">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center mt-2">
                                        <a href="live-info"><img src="assets/images/uploads/<?php echo ($row['logo']); ?>" alt=""></a>
                                    </div>
                                    <div class="col-6 mt-5" style="padding-left:80px;font-size:28px;">
                                        <a href="live-info/<?php echo ($row['event_slug']); ?>">
                                            <?php echo ($row['event_name']); ?>
                                        </a>

                                    </div>

                                </div>


                            </div>


                        </div>
                <?php
                    }
                }
                ?>
                <!-- <div class=" container">
                    <div class="d-flex justify-content-center image-bg">
                        <img src="assets/images/match_box.png">
                    </div>
                    <div class="match-box container">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center mt-2">
                                <a href="live-info"><img src="assets/images/my_match_clan02.png" alt=""></a>
                            </div>
                            <div class="col-6 mt-5" style="padding-left:80px;font-size:28px;">
                                <a href="live-info">
                                    GPL 2022
                                </a>

                            </div>

                        </div>


                    </div>


                </div> -->

            </div>
        </div>

        <!-- mobile view -->
        <div class="d-lg-none position-relative">
            <!-- Enter Code for Mobile UI here -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand p-3 pt-4" href="#"> <img src="assets/images/f_logo.png"></a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav p-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Community</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                    </ul>
                </div>
            </nav>

            <div class="container-fluid live-section1" style="padding-top:150px;padding-bottom: 100px;">
                <h2 class="text-center pb-5"><span style="color: #FFFFFF;">LIVE</span> EVENTS</h2>
                <?php
                $result = mysqli_query($link, "SELECT * FROM  `events`");
                if (mysqli_num_rows($result) != 0) {
                    while ($row = mysqli_fetch_array($result)) {




                ?>
                        <div class="container match-box-mob">


                            <div class="d-flex justify-content-center pb-5 ">
                                <a href="#"> <img src="assets/images/uploads/<?php echo ($row['logo']); ?>" alt=""></a>

                            </div>
                            <a class="d-flex justify-content-center" href="live-info/<?php echo ($row['event_slug']); ?>"><?php echo ($row['event_name']); ?></a>






                        </div>
                <?php
                    }
                }
                ?>



            </div>


        </div>


    </div>
    </div>
    <div class="footer-top footer-bg third-footer-bg">

    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        // const loader = document.querySelector('.preloader');
        // const main = document.querySelector('.main');

        // function init() {
        //     setTimeout(() => {
        //         loader.style.opacity = 0;
        //         loader.style.display = 'none';

        //         main.style.display = 'block';

        //         setTimeout(() => (main.style.opacity = 1), 50);
        //     }, 4000);

        // }

        // init();
        $(document).ready(function() {
            $(".header").load('template/header.php');
            $(".footer-top").load('template/footer.html');

            $(window).on('scroll', function() {
                var scroll = $(window).scrollTop();
                if (scroll < 245) {


                    $(".social-parent").fadeIn(1000)
                    $(".header").fadeIn(500);

                } else {

                    $(".social-parent").fadeOut(500)



                }
            });
        });
    </script>
</body>

</html>