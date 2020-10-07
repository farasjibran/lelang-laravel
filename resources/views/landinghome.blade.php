<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- parcial css -->
    @extends('parcial.landingcss')

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="/">{{ config('app.name', 'Laravel') }}</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
            <div class="overlay"></div>
            <!-- <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>  -->
            <div class="display-t text-center">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="animate-box">
                                <h2>
                                    This Website Is Made For Those Of You Who Want To Auction Off Something
                                </h2>
                                <p><a href="gallery.html" class="btn btn-primary btn-lg btn-custom">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="colorlib-featured">
            <div class="row animate-box">
                <div class="featured-wrap">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="featured-entry">
                                    <img class="img-responsive" src="{{ asset('gambar/1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="featured-entry">
                                    <img class="img-responsive" src="{{ asset('gambar/2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="featured-entry">
                                    <img class="img-responsive" src="{{ asset('gambar/3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-services colorlib-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-browser"></i>
                            </span>
                            <div class="desc">
                                <h3>Create your own template</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-download"></i>
                            </span>
                            <div class="desc">
                                <h3>Automatic Backup Data</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-layers"></i>
                            </span>
                            <div class="desc">
                                <h3>Page Builder</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>This Is More About Auction</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <span class="play"><a href="https://www.youtube.com/watch?v=Nu7ei8vzkn4" class="pulse popup-vimeo"><i class="fas fa-play"></i></a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-work-featured colorlib-bg-white">
            <div class="container">
                <div class="row mobile-wrap">
                    <div class="col-md-5 animate-box">
                        <div class="mobile-img" style="background-image: url(images/mobile-2.jpg);"></div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <div class="desc">
                            <h2>Real template creation</h2>
                            <div class="features">
                                <span class="icon"><i class="icon-lightbulb"></i></span>
                                <div class="f-desc">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                            </div>
                            <div class="features">
                                <span class="icon"><i class="icon-circle-compass"></i></span>
                                <div class="f-desc">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name</p>
                                </div>
                            </div>
                            <div class="features">
                                <span class="icon"><i class="icon-beaker"></i></span>
                                <div class="f-desc">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                            </div>
                            <p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="row mobile-wrap">
                    <div class="col-md-5 col-md-push-7 animate-box">
                        <div class="mobile-img" style="background-image: url(images/mobile-1.jpg);"></div>
                    </div>
                    <div class="col-md-7 col-md-pull-5 animate-box">
                        <div class="desc">
                            <h2>Finish template creation</h2>
                            <div class="features">
                                <span class="icon"><i class="icon-lightbulb"></i></span>
                                <div class="f-desc">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                            </div>
                            <div class="features">
                                <span class="icon"><i class="icon-circle-compass"></i></span>
                                <div class="f-desc">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name</p>
                                </div>
                            </div>
                            <div class="features">
                                <span class="icon"><i class="icon-beaker"></i></span>
                                <div class="f-desc">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                            </div>
                            <p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-4 text-center animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-ribbon"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="1500" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Of customers are satisfied with our
                                        professional support</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-church"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Amazing preset options to be mixed and
                                        combined</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-dove"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="1200" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Average response time on live chat support
                                        channel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>News from our Blog</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <article>
                            <h2>Building the Mention Sales Application on Unapp</h2>
                            <p class="admin"><span>May 12, 2018</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life</p>
                            <p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person1.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
                        </article>
                    </div>
                    <div class="col-md-4 animate-box">
                        <article>
                            <h2>Building the Mention Sales Application on Unapp</h2>
                            <p class="admin"><span>May 12, 2018</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life</p>
                            <p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person2.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
                        </article>
                    </div>
                    <div class="col-md-4 animate-box">
                        <article>
                            <h2>Building the Mention Sales Application on Unapp</h2>
                            <p class="admin"><span>May 12, 2018</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life</p>
                            <p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person3.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-subscribe" class="colorlib-subscribe" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                        <h2>Already trusted by over 10,000 users</h2>
                        <p>Subscribe to receive unapp tips from instructors right to your inbox.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline qbstp-header-subscribe">
                                    <div class="col-three-forth">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-one-third">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Pricing</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center animate-box">
                        <div class="pricing">
                            <h2 class="pricing-heading">Starter</h2>
                            <div class="price"><sup class="currency">$</sup>9<small>per month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Select Plan</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <div class="pricing">
                            <h2 class="pricing-heading">Basic</h2>
                            <div class="price"><sup class="currency">$</sup>27<small>per month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Select Plan</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <div class="pricing">
                            <h2 class="pricing-heading">Pro</h2>
                            <div class="price"><sup class="currency">$</sup>74<small>per month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Select Plan</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <div class="pricing">
                            <h2 class="pricing-heading">Unlimited</h2>
                            <div class="price"><sup class="currency">$</sup>140<small>per month</small></div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Select Plan</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="colorlib-footer" style="padding-bottom: 6%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
                            Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fas fa-arrow-up"></i></a>
    </div>

    <!-- parcial css -->
    @extends('parcial.jslanding')

</body>

</html>
