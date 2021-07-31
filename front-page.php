<?php


    get_header();
    

?>

    <div class="banner-background">
        <div id="greetings"></div>
        <div class="philosophy">
            <p>Philosophy will change your lifestyle if you don't insist it</p>
        </div>
    </div>
    
     <div class="social-media">
        <div class="color whatsapp">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="color facebook">
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="color twitter">
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="color google">
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <div class="color pinterest">
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </div>
    

<div class="page-description"> 
    <main>
        <div class="heading" >
            <h1><?php the_title(); ?></h1>
        <?php
            if( have_posts() ){
                while( have_posts() ){

                    the_post();
                    the_content();
                }
            }

        ?>
           
        </div>
        <div class="recent-blogs">
            <p>Recent Blogs</p>
        </div>
        <div class="content-box">
            
            <div class="box">
                <div class="thumb">
                    <img src="assests/img/garden.jpg" alt="home garden" >
                </div>
                <div class="box-text">
                    <a href="pages/blog.html">n diaries of high school</a>
                    <p>Got a small plot of land my mother turn it into a garden...</p>
                </div>
            </div>
            <div class="box">
                <div class="thumb">
                    <img src="assests/img/workplace.jpg" alt="work table">
                </div>
                <div class="box-text">
                    <a href="#">My first Job </a>
                    <p>Morbitincidunt maurisque eros molest nunc anteget sed vel... </p>
                </div>
            </div>
            <div class="box">
                <div class="thumb">
                    <img src="assests/img/tour.jpg" alt="school tour picture" >
                </div>
                <div class="box-text">
                    <a href="#">2019 School Tour</a>
                    <p>Rental parking was founded in 2018 by cruiser. He came up... </p>
                </div>
            </div>
        </div> 
    </main>
    <aside class="">
        <div class="thanks">
            <div class="search-div">
                <p id="search-title">Search</p>
                <form>
                    <input type="text" placeholder="enter your search..." title="enter your search" id="search">
                    <input type="submit" value="GO" id="go">
                </form>
            </div>
            <div class="special-thanks">
                <h2>Special Thanks</h2>
                <ul>
                    <li>Adamantinus Corais</li> 
                    <li>Alexis Pierron</li> 
                    <li>Stoic Philosophy</li> 
                    <li>Cato M. Uticensis</li>
                    <li>Adamantinus Corais</li> 
                    <li>Alexis Pierron</li> 
                </ul>
            </div>
         </div>
        <div class="ad-section">
           
        </div>
    </aside>
</div>
 
<?php
    get_footer();
    
?>