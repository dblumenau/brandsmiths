<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brandsmiths</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
        <div class="title-bar-title">Menu</div>
        <img src="{{asset('img/logo.png')}}" class="logo" alt="">
    </div>
    <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text"><img src="{{asset('img/logo.png')}}" class="logo hide-for-small-only" alt=""></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text"><a href="#who-we-are">Who We Are</a></li>
                <li class="menu-text"><a href="#what-can-we-deliver">What Can We Deliver</a></li>
                <li class="menu-text"><a href="#our-work">Our Work</a></li>
                <li class="menu-text"><a href="#meet-the-team">Meet The Team</a></li>
                <li class="menu-text"><a href="#our-clients">Our Clients</a></li>
                <li class="menu-text"><a href="#get-in-touch">Get In Touch</a></li>
            </ul>
        </div>
    </div>
    <div class="first">
        <div class='container'>
            <div class='single-item'>
                <div><h3>1</h3></div>
                <div><h3>2</h3></div>
                <div><h3>3</h3></div>
                <div><h3>4</h3></div>
                <div><h3>5</h3></div>
                <div><h3>6</h3></div>
            </div>
        </div>
        <div class="row">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 class="grey" data-scroll-reveal="enter left and move 50px over 0.6s after 0.3s">fresh</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">concepts</h1>
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns text-right">
                <h1 class="grey">compelling</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">copy</h1>
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns text-right">
                <h1 class="grey">eye catching</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">design</h1>
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns text-right">
                <h1 class="grey">obsessive</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">service</h1>
            </div>
        </div>

        <div class="phantom"></div>
        <div class="row text-center">
            <div class="columns small-offset-12 "></div>
            <a href="#who-we-are"><img class="small-centered" src="{{asset('img/arrowdown.png')}}" alt=""></a>
        </div>
    </div>
    <div class="second">
        <div class="row">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 id="who-we-are" class="grey">who</h1>
            </div>
            <div class="small-6 columns">
                <h1  data-scroll-reveal="enter left move 150px, after 0.9s" id="orange" class="orange">we are</h1>
            </div>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                <div class="phantom-small"></div>
                <p class=" text-center">We are a small creative agency of deep thinkers dedicated to creating superb
                    work that is well thought through, fresh and beautifully executed. We don’t want to be another
                    agency that claims to be an expert at everything. We stick to what we know we can deliver and we
                    make sure we do it with professionalism and flair.
                    <br/></p>
                <p class=" text-center">
                    Our team is comprised of a talented mix of designers, art directors, copywriters and client service,
                    and is led by Adam Levin, who has been in the business for 17 years working at top agencies creating
                    work for many well loved brands.
                </p>
                <div class="phantom-small"></div>
            </div>
        </div>

        <div class="third">
            <div class="row">
                <div class="phantom"></div>
                <div class="small-6 columns text-right">
                    <h1 id="what-can-we-deliver" class="grey">What can</h1>
                </div>
                <div class="small-6 columns">
                    <h1 class="orange">we deliver?</h1>
                </div>
            </div>
            <div class="row">
                <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                    <div class="phantom-small"></div>
                    <ul>
                        <li>Promotional strategy</li>
                        <li>Concept creation</li>
                        <li>Advertising campaigns - across both traditional and digital platforms</li>
                        <li>Branding & logo development</li>
                        <li>Brochure and report design</li>
                        <li>Packaging design</li>
                        <li>Content creation for blogs and social media</li>
                        <li>User interface design for web and mobile</li>
                        <li>Newsletters and mailers</li>
                    </ul>
                </div>
            </div>
            <div class="phantom-small"></div>
        </div>
        <div class="fourth">
            <div class="row">
                <div class="phantom"></div>
                <div class="small-6 columns text-right">
                    <h1 id="our-work" class="grey">Our</h1>
                </div>
                <div class="small-6 columns">
                    <h1 class="orange">work</h1>
                </div>
            </div>
            <div class="phantom-small"></div>

            <div class="row portfolio">
                {{--<div class="nothing"  data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>--}}
                @foreach($portfolios as $portfolio)
                    <img src="{{asset("$portfolio->path")}}" class="" alt="">

                @endforeach
                {{--</div>--}}
            </div>
            <div class="phantom-small"></div>
            <div class="row text-center">
                <div class="columns small-offset-12 "></div>
                <div class="arrow-text">expand</div>
                <a href="#"><img class="small-centered" src="{{asset('img/arrowdown.png')}}" alt=""></a>
            </div>
            <div class="phantom"></div>
        </div>
    </div>
    <div class="fifth">
        <div class="phantom"></div>
        <div class="small-6 columns text-right">
            <h1 id="meet-the-team" class="grey">Meet</h1>
        </div>
        <div class="small-6 columns">
            <h1 class="orange">the team</h1>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                <div class="phantom-small"></div>
                <p class="text-center">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                    claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                </p>
                <div class="phantom-small"></div>
            </div>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                <img src="{{asset('img/pf1.jpg')}}" class="columns small-1" alt="">
                <img src="{{asset('img/pf2.jpg')}}" class="columns small-1" alt="">
            </div>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                <div class="bio"><span class="title">Creative Director</span><span class="name">Adam Levin</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur cumque
                        cupiditate, earum exercitationem facere incidunt laboriosam mollitia placeat possimus quasi
                        qui unde veniam veritatis voluptas! Dolorum odio odit quo.
                    </p>
                </div>
                <div class="bio"><span class="title">Creative Director</span><span class="name">Adam Levin</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur cumque
                        cupiditate, earum exercitationem facere incidunt laboriosam mollitia placeat possimus quasi
                        qui unde veniam veritatis voluptas! Dolorum odio odit quo.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                <img src="{{asset('img/pf3.jpg')}}" class="columns small-1" alt="">
                <img src="{{asset('img/pf4.jpg')}}" class="columns small-1" alt="">
            </div>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-6 small-offset-2">
                <div class="bio"><span class="title">Creative Director</span><span class="name">Adam Levin</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur cumque
                        cupiditate, earum exercitationem facere incidunt laboriosam mollitia placeat possimus quasi
                        qui unde veniam veritatis voluptas! Dolorum odio odit quo.
                    </p>
                </div>
                <div class="bio"><span class="title">Creative Director</span><span class="name">Adam Levin</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur cumque
                        cupiditate, earum exercitationem facere incidunt laboriosam mollitia placeat possimus quasi
                        qui unde veniam veritatis voluptas! Dolorum odio odit quo.
                    </p>
                </div>
            </div>
        </div>
        <div class="phantom"></div>
    </div>
    <div class="sixth">
        <div class="row">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 id="our-clients" class="grey">our</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">clients</h1>
            </div>
        </div>
        <div class="row expanded logos-row">
            <img src="{{asset('img/logos/ufo.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/chabadhouse.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/chev.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/dot.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
        </div>
        <div class="row  expanded logos-row">
            <img src="{{asset('img/logos/soul.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/nedbank.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/alfin.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/sabje.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
        </div>
        <div class="row expanded logos-row">
            <img src="{{asset('img/logos/kingdavid.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/fielli.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/riley.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
            <img src="{{asset('img/logos/kingdavid.jpg')}}" class="columns small-centered small-3 brand-logo" alt="">
        </div>
    </div>
    <div class="phantom"></div>
    </div>
    <div class="seventh">
        <div class="row expanded">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 id="get-in-touch" class="grey">Get in</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">touch</h1>
            </div>
            <div class="phantom"></div>
            <iframe src="//www.google.com/maps/embed/v1/place?q=132+Athol+St,+Highlands+North,+Johannesburg,+2192&zoom=16&key=AIzaSyAE-8UAOtqTOl_wRWL9tWM6z3on8YHLisc">
            </iframe>
            <div class="phantom-small"></div>
        </div>
        <form method="POST" action="/submit-form">
            <div class="row">
                <div class="columns small-4">
                    <label>
                        <input type="text" placeholder="YOUR NAME">
                    </label>
                </div>
                <div class="columns small-4">
                    <label>
                        <input type="text" placeholder="YOUR EMAIL">
                    </label>
                </div>
                <div class="columns small-4">
                    <label>
                        <input type="text" placeholder="YOUR PHONE">
                    </label>
                </div>
                <div class="columns small-12">
                    <label>
                        <textarea rows="5" type="text" placeholder="YOUR MESSAGE"></textarea>
                    </label>
                </div>
            </div>
            <div class="row expanded">
                <div class="columns small-centered small-6 medium-4 large-2">
                    <button class="button" type=submit>SEND THE MESSAGE</button>
                </div>
            </div>
        </form>
        <div class="phantom-small"></div>
    </div>
    <div class="eighth">
        <div class="row small-expanded text-center">
            <div class="columns small-12 medium-4">
                <span class="heading">Location</span>
                <span class="body">132 Athol Road, Waverly <br> Johannesburg - South Africa </span>
            </div>
            <div class="columns  small-12  medium-4">
                <span class="heading">Phone</span>
                <span class="body"><a href="tel:+27106011730">+27 106 011 730</a><br><a href="tel:+27834707371">+27 83 470 7371</a>
</span>
            </div>
            <div class="columns  small-12 medium-4">
                <span class="heading">Email</span>
                <span class="body"><a class="3c3c3c" href="mailto:adam@brandsmiths.co.za">adam@brandsmiths.co.za</a><br><a
                            href="mailto:paula@brandsmiths.co.za">paula@brandsmiths.co.za</a></span>
            </div>
        </div>
        <div class="phantom-small"></div>
    </div>
    <div class="ninth">
        <div class="row text-center">
            © <?php echo date("Y"); ?> Brandsmiths Creative Agency
        </div>
    </div>

    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.orange', {easing: 'cubic-bezier(0.445, 0.05, 0.55, 0.95)', duration: 2100, delay: 1000, distance: '1500px',  origin: 'left'} );
        sr.reveal('.grey', { easing: 'cubic-bezier(0.445, 0.05, 0.55, 0.95)', duration: 2100, distance: '1500px',  origin: 'right'});
        $(".nothing").slick()
    </script>

    </body>
</html>