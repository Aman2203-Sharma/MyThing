<!DOCTYPE html>
<?php
include 'db.php';

$name = "";
session_start();


$img1 = ""; $cat1 = ""; $title1 = ""; $content1 = ""; $id1 = "";
$img2 = ""; $cat2 = ""; $title2 = ""; $content2 = ""; $id2 = "";
$img3 = ""; $cat3 = ""; $title3 = ""; $content3 = ""; $id3 = "";

$query = mysqli_query($conn, "SELECT * FROM all_contents");
if (mysqli_num_rows($query) > 0) {
    while ($r = mysqli_fetch_assoc($query)) {
        if ($r['role'] == "slider1") {
            $id1 = $r['content_id'];
            $img1 = $r['picture'];
            $cat1 = $r['category'];
            $title1 = $r['title'];
            $content1 = $r['content'];
        } else if ($r['role'] == "slider2") {
            $id2 = $r['content_id'];
            $img2 = $r['picture'];
            $cat2 = $r['category'];
            $title2 = $r['title'];
            $content2 = $r['content'];
        } else if ($r['role'] == "slider3") {
            $id3 = $r['content_id'];
            $img3 = $r['picture'];
            $cat3 = $r['category'];
            $title3 = $r['title'];
            $content3 = $r['content'];
        }
    }
}

?>

<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyThing</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="mt.png">
    <link rel="icon" type="image/png" sizes="32x32" href="mt.png">
    <link rel="icon" type="image/png" sizes="16x16" href="mt.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="index.php" rel="home">MyThing.</a>
                </p>
            </div>

            <div class="row s-header__navigation">

                <nav class="s-header__nav-wrap">
    
                    <h3 class="s-header__nav-heading">Navigate to</h3>
    
                    <?php 
                    if(!isset($_SESSION['uname'])){   //not login
                    ?>


                    <ul class="s-header__nav">
                        <li class="current-menu-item"><a href="index.php" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="" class="">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="category.php?category=Design">Design</a></li>
                                <li><a href="category.php?category=Lifestyle">Lifestyle</a></li>
                                <li><a href="category.php?category=Inspiration">Inspiration</a></li>
                                <li><a href="category.php?category=Work">Work</a></li>
                                <li><a href="category.php?category=Health">Health</a></li>
                                <li><a href="category.php?category=Photography">Photography</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php" title="">Contact</a></li>
                        <li><a href="auth-login.php" title="">Log In</a></li>
                        
                    </ul> <!-- end s-header__nav -->

                    <?php
                    } else{
                        $username = $_SESSION['uname'];
                        $query = mysqli_query($conn, "SELECT * FROM user_details WHERE uname='$username';");
                        if (mysqli_num_rows($query) > 0) {
                          while ($r = mysqli_fetch_assoc($query)) {
                              $fname = $r['firstname']." ".$r['lastname'];
                          }
                      }
                      
                    ?>


                    <ul class="s-header__nav">
                        <li class="current-menu-item"><a href="index.php" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="" class="">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="category.php?category=Design">Design</a></li>
                                <li><a href="category.php?category=Lifestyle">Lifestyle</a></li>
                                <li><a href="category.php?category=Inspiration">Inspiration</a></li>
                                <li><a href="category.php?category=Work">Work</a></li>
                                <li><a href="category.php?category=Health">Health</a></li>
                                <li><a href="category.php?category=Photography">Photography</a></li>
                            </ul>
                        </li>
                        <li><a href="myblog.php" title=""> MyBlogs</a></li>
                        <li><a href="contact.php" title="">Contact</a></li>
                        <li><a href="features-profile.php" title="">Welcome, <?php echo $fname ?></a></li>
                        
                    </ul> <!-- end s-header__nav -->



                    <?php
                    }
                    ?>





                </nav> <!-- end s-header__nav-wrap -->
    
            </div> <!-- end s-header__navigation -->

            <div class="s-header__search">

                <div class="s-header__search-inner">
                    <div class="row">
    
                        <form role="search" method="get" class="s-header__search-form" action="search-result.php?s=<?php if(isset($_GET['s'])){echo $_GET['s'];}?>">
                            <label>
                                <span class="u-screen-reader-text">Search for:</span>
                                <input type="search" class="s-header__search-field" placeholder="Search for..." value="" name="s" title="Search for:" autocomplete="off">
                            </label>
                            <input type="submit" class="s-header__search-submit" value="Search"> 
                        </form>
    
                        <a href="" title="Close Search" class="s-header__search-close">Close</a>
    
                    </div> <!-- end row -->
                </div> <!-- s-header__search-inner -->
    
            </div> <!-- end s-header__search -->

            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            <a class="s-header__search-trigger" href="#">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                </svg>
            </a>
            

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- hero -->
            <div class="hero">

                <div class="hero__slider swiper-container">

                    <div class="swiper-wrapper">
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('<?php echo $img1; ?>"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                            <a href="category.php?category=<?php echo $cat1; ?>"><?php echo $cat1; ?></a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="single-standard.php?content_id=<?php echo $id1; ?>">
                                            <?php echo $title1; ?>
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                        <?php 
                                        $string=strip_tags($content1);
                                        if(strlen($string)>200){
                                            $stringCut= substr($string,0,200);
                                            $endPoint=strrpos($stringCut,' ');
                                            $string=$endPoint?substr($stringCut,0,$endPoint):substr($stringCut,0);
                                            $string.='...';
                                        }
                                        echo $string;
                                        ?> 
                                    </p>
                                    <a class="hero__more-link" href="single-standard.php?content_id=<?php echo $id1; ?>">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('<?php echo $img2; ?>');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                            <a href="category.php?category=<?php echo $cat2; ?>"><?php echo $cat2; ?></a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="single-standard.php?content_id=<?php echo $id2; ?>">
                                            <?php echo $title2; ?>
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                        <?php 
                                        $string=strip_tags($content2);
                                        if(strlen($string)>200){
                                            $stringCut= substr($string,0,200);
                                            $endPoint=strrpos($stringCut,' ');
                                            $string=$endPoint?substr($stringCut,0,$endPoint):substr($stringCut,0);
                                            $string.='...';
                                        }
                                        echo $string; 
                                        ?>
                                    </p>
                                    <a class="hero__more-link" href="single-standard.php?content_id=<?php echo $id2; ?>">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('<?php echo $img3; ?>');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                            <a href="category.php?category=<?php echo $cat3; ?>"><?php echo $cat3; ?></a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="single-standard.php?content_id=<?php echo $id3; ?>">
                                            <?php echo $title3; ?>
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                        <?php 
                                        $string=strip_tags($content3);
                                        if(strlen($string)>200){
                                            $stringCut= substr($string,0,200);
                                            $endPoint=strrpos($stringCut,' ');
                                            $string=$endPoint?substr($stringCut,0,$endPoint):substr($stringCut,0);
                                            $string.='...';
                                        }
                                        echo $string;
                                        ?>
                                    </p>
                                    <a class="hero__more-link" href="single-standard.php?content_id=<?php echo $id3; ?>">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div> <!-- swiper-wrapper -->

                    <div class="swiper-pagination"></div>
    
                </div> <!-- end hero slider -->

                <a href="#bricks" class="hero__scroll-down smoothscroll">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                    </svg>
                    <span>Scroll</span>
                </a>

            </div> <!-- end hero -->


            <!--  masonry -->
            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" data-animate-block>

                        <div class="grid-sizer"></div>

                        <?php
                        $i = 1;

                        $limit = 6;

                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }else{
                            $page = 1;
                        }
                        $offset = ($page - 1) * $limit;

                        $query = mysqli_query($conn,"SELECT * FROM all_contents WHERE role='' ORDER BY content_id DESC LIMIT {$offset}, {$limit};");
                        if(mysqli_num_rows($query)>0){
                          while($r = mysqli_fetch_assoc($query)){
                        ?>

                        <article id="here" class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="single-standard.php?content_id=<?php echo $r['content_id'] ?>" class="thumb-link">
                                    <img src="<?php echo $r['picture']; ?>" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a href="category.php?category=<?php echo $r['category']; ?>"><?php echo $r['category']; ?></a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a href="auth-profile.php?author=<?php echo $r['author']; ?>"><?php echo $r['author']; ?></a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="single-standard.php?content_id=<?php echo $r['content_id'] ?>"><?php echo $r['title']; ?></a></h1>
                                 </div>
                                <div class="entry__excerpt">
                                    <p>
                                        
                                        <?php
                                        $string=strip_tags($r['content']);
                                        if(strlen($string)>200){
                                            $stringCut= substr($string,0,200);
                                            $endPoint=strrpos($stringCut,' ');
                                            $string=$endPoint?substr($stringCut,0,$endPoint):substr($stringCut,0);
                                            $string.='...';
                                        }
                                        echo $string;
                                        ?> 
                                    
                                    </p>
                                </div>
                                <a class="entry__more-link" href="single-standard.php?content_id=<?php echo $r['content_id'] ?>">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->

                        <?php 
                        $i++;
                        }}
                        ?>
                    

                    </div> <!-- end bricks-wrapper -->

                </div> <!-- end masonry-->


                <!-- pagination -->
                <div class="row pagination">
                    <div class="column lg-12">
                        <nav class="pgn">


                        <?php
                            $sql = "SELECT * FROM all_contents WHERE role='';";
                            $result = mysqli_query($conn, $sql) or die("Query Failed.");

                            if(mysqli_num_rows($result) > 0){

                                $total_records = mysqli_num_rows($result);
                                $limit = 6;
                                $total_page = ceil($total_records / $limit);

                                echo '<ul>';
                                if($page > 1){
                                    echo '
                                    <li>
                                        <a class="pgn__prev" href="index.php?page='.($page - 1).'">
                                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    ';
                                }

                                for($p = 1; $p <= $total_page; $p++){
                                    if($p == $page){
                                        $active = "current";
                                    }else{
                                        $active = "";
                                    }
                                   echo '<li><a class="pgn__num '.$active.'" href="index.php?page='.$p.'">'.$p.'</a></li>';
                                }
                                if($total_page > $page){
                                echo '
                                <li>
                                    <a class="pgn__next" href="index.php?page='.($page + 1).'">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>
                                        </svg>
                                    </a>
                                </li>
                                ';
                                }
                                echo '</ul>';
                            }
                        ?>




                        </nav> <!-- end pgn -->
                    </div> <!-- end column -->
                </div> <!-- end pagination -->

            </div> <!-- end bricks -->

        </section> <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer">


            <div class="row s-footer__main">

                <div class="column lg-5 md-6 tab-12 s-footer__about">
                    <h4>MyThing</h4>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo 
                    </p>
                </div> <!-- end s-footer__about -->

                <div class="column lg-5 md-6 tab-12">
                    <div class="row">
                        <div class="column lg-6">
                            <h4>Categories</h4>
                            <ul class="link-list">
                                <li><a href="category.php?category=Design">Design</a></li>
                                <li><a href="category.php?category=Lifestyle">Lifestyle</a></li>
                                <li><a href="category.php?category=Inspiration">Inspiration</a></li>
                                <li><a href="category.php?category=Work">Work</a></li>
                                <li><a href="category.php?category=Health">Health</a></li>
                                <li><a href="category.php?category=Photography">Photography</a></li>
                            </ul>
                        </div>
                        <div class="column lg-6">
                            <h4>Site Links</h4>

                            <?php 
                                if(!isset($_SESSION['uname'])){   //not login
                            ?>

                            <ul class="link-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="#0">Terms & Policy</a></li>
                            </ul>
                            
                            <?php 
                                }else{
                            ?>


                            <ul class="link-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="myblog.php">My Blog</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="#0">Terms & Policy</a></li>
                            </ul>


                            <?php 
                                }
                            ?>

                            
                        </div>
                    </div>
                </div>

            </div> <!-- end s-footer__main -->

            <div class="row s-footer__bottom">

                <div class="column lg-7 md-6 tab-12">
                    <ul class="s-footer__social">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; "><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform: msFilter; "><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform: msFilter; "><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; "><path d="M11.99 2C6.472 2 2 6.473 2 11.99c0 4.232 2.633 7.85 6.35 9.306-.088-.79-.166-2.006.034-2.868.182-.78 1.172-4.966 1.172-4.966s-.299-.599-.299-1.484c0-1.388.805-2.425 1.808-2.425.853 0 1.264.64 1.264 1.407 0 .858-.546 2.139-.827 3.327-.235.994.499 1.805 1.479 1.805 1.775 0 3.141-1.872 3.141-4.575 0-2.392-1.719-4.064-4.173-4.064-2.843 0-4.512 2.132-4.512 4.335 0 .858.331 1.779.744 2.28a.3.3 0 0 1 .069.286c-.076.315-.245.994-.277 1.133-.044.183-.145.222-.335.134-1.247-.581-2.027-2.405-2.027-3.871 0-3.151 2.289-6.045 6.601-6.045 3.466 0 6.159 2.469 6.159 5.77 0 3.444-2.171 6.213-5.184 6.213-1.013 0-1.964-.525-2.29-1.146l-.623 2.374c-.225.868-.834 1.956-1.241 2.62a10 10 0 0 0 2.958.445c5.517 0 9.99-4.473 9.99-9.99S17.507 2 11.99 2"></path></svg>
                                <span class="u-screen-reader-text">Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column lg-5 md-6 tab-12">
                    <div class="ss-copyright">
                        <span>© Copyright MyThing 2024</span> 
                        <span>Design by Aman</span>
                    </div>
                </div>

            </div> <!-- end s-footer__bottom -->
           
            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"/>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer><!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>