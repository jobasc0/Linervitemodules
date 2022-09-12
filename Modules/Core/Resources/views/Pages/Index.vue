<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />

    <section>
        <div class="ext-gap bluesh high-opacity">
            <div class="content-bg-wrap" style="background: url(images/resources/animated-bg2.png)"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-banner">
                            <h2>Find a perfect friend</h2>
                            <h1>Share your perfect moments </h1>
                            <nav class="breadcrumb">
                              <p style="text-align:center;"><Link :href="route('register')" class="btn1 btn2 btn-1 btn1-1b"><b>Get Started Now!</b></Link> <Link :href="route('login')" class="btn1 btn2 btn-1 btn1-1b"><b>Log in</b></Link></p>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area animated -->

    <section>
        <div class="gap100 no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-winku">
                            <h4>Welcome to Winku</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure</p>
                            <div class="fonder">
                                <h4>william gates <i>founder</i></h4>
                                <i>winku inc</i>
                            </div>  
                            <figure class="sign-author">
                                <img src="images/welcome-sign.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <figure class="about-picture">
                            <img src="images/resources/about-comapny.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="gap100">
            <div class="container">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <div class="servic-category">
                    <div class="row merged">
                        <div class="col-lg-4 col-md-6">
                            <div class="category-box">
                                <i class="fa fa-wordpress"></i>
                                <h2>WordPress Services</h2>
                                <p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
                                <a href="#" class="main-btn" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="category-box selected">
                                <i class="fa fa-html5"></i>
                                <h2>Html Services</h2>
                                <p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
                                <a href="#" class="main-btn" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="category-box">
                                <i class="fa fa-google-wallet"></i>
                                <h2>Design Services</h2>
                                <p>Met consectetur adipisicing elit dolore suscipit, inventore aliquid...</p>
                                <a href="#" class="main-btn" title="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section><!-- services section -->
    
    <section>
        <div class="gap100 pattern">
            <div class="bg-image" style="background-image:url(images/resources/newsletter-bg.jpg); background-repeat: no-repeat;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-letter">
                            <h2>Newsletter <span>Signup</span></h2>
                            <span>Shortest Way To Explore What Will Happen On Enternity</span>
                            <form method="post">
                                <input type="text" placeholder="Please Type Email Id" class="emails">
                                <button>Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- news letter -->
    
    <section>
        <div class="gap100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Our Team</h2>
                        </div>
                    </div>  
                    <div class="col-lg-3 col-sm-6">
                        <div class="our-teambox">
                            <figure><img src="images/resources/team1.jpg" alt=""></figure>
                            <div class="team-info">
                                <h4>Sara Grey</h4>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="our-teambox">
                            <figure><img src="images/resources/team4.jpg" alt=""></figure>
                            <div class="team-info">
                                <h4>Peeter Paker</h4>
                                <span>Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="our-teambox">
                            <figure><img src="images/resources/team3.jpg" alt=""></figure>
                            <div class="team-info">
                                <h4>Amy watson</h4>
                                <span>Support</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="our-teambox">
                            <figure><img src="images/resources/team2.jpg" alt=""></figure>
                            <div class="team-info">
                                <h4>Emma Watson</h4>
                                <span>Operations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- our team -->
    
    <section>
        <div class="gap100 no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="section-heading">
                                <h2>Sponsors</h2>
                            </div>
                            <ul class="sponsor-logo">
                                <li><img alt="" src="images/resources/sponsor-gray1.png"></li>
                                <li><img alt="" src="images/resources/sponsor-gray2.png"></li>
                                <li><img alt="" src="images/resources/sponsor-gray3.png"></li>
                                <li><img alt="" src="images/resources/sponsor-gray4.png"></li>
                                <li><img alt="" src="images/resources/sponsor-gray5.png"></li>
                                <li><img alt="" src="images/resources/sponsor-gray6.png"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="getquot-baner">
            <span>Get our weekly Quotaion for Porviding the best Services</span>
            <a title="" href="#">Get a Quote</a>
        </div>
    </section><!-- get a quote -->

</template>
