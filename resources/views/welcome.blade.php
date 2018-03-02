@extends('layout')
@section('content')
    <div class="first">
        {{--<div class='container'>--}}
        {{--<div class='single-item'>--}}
        {{--<div><h3>1</h3></div>--}}
        {{--<div><h3>2</h3></div>--}}
        {{--<div><h3>3</h3></div>--}}
        {{--<div><h3>4</h3></div>--}}
        {{--<div><h3>5</h3></div>--}}
        {{--<div><h3>6</h3></div>--}}
        {{--</div>--}}
        {{--</div>--}}
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
                <h1 data-scroll-reveal="enter left move 150px, after 0.9s" id="orange" class="orange">we are</h1>
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
                    work for many well loved brands. </p>
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
            <div class="row collapse portfolio">
                @foreach($portfolios as $portfolio)
                    <div class="columns small-3">
                        <a href="modal/{{$portfolio->id}}" data-featherlight="ajax"><img class="portfolio-thumbnail" src="{{asset("$portfolio->thumbnail")}}" class="" alt="" id="portfolio_item_{{$portfolio->id}}"></a>
                    </div>
                @endforeach
            </div>
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
            <div class="columns small-centered small-12 medium-10 large-10 small-offset-2">
                <div class="phantom-small"></div>
                <p class="text-center">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                    claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
                <div class="phantom-small"></div>
            </div>
        </div>
        <div class="expanded row">
            <div class="row">
                <div class="small-12 large-3 medium-6 columns">
                    <img class="th" src="{{asset('profile-images/AdamLevin.jpg')}}" alt="">
                    <div class="bio">
                        <span class="title">Creative Director</span><span class="name">Adam Levin</span>
                        <p>With 17 years in the advertising business, Adam's work has included creative direction on
                            some of the SA’s most loved brands as well as experience on the marketing side of
                            business. </p>
                    </div>
                </div>
                <div class="small-12 large-3 medium-6 columns">
                    <img src="{{asset('profile-images/PaulaLevin.jpg')}}" alt="">
                    <div class="bio"><span class="title">Copyriter</span><span class="name">Paula Levin</span>
                        <p>First a thinker, then a writer, Paula has a background in Journalism, magazine editing
                            and
                            has authored 2 books. She has landed a cushy job working as a copywriter for her husband
                            Adam, and no longer needs permission slips to dash to gym, coffee and school lifts. </p>
                    </div>
                </div>
                <div class="small-12 large-3 medium-6 columns">
                    <img src="{{asset('profile-images/DarrelBeukes.jpg')}}" alt="">
                    <div class="bio"><span class="title">Designer</span><span class="name">Darrel Beukes</span>
                        <p>Darrel was born and raised in Windhoek, Namibia and became interested in design while
                            still
                            in high-school. A total perfectionist with a keen eye for detail, Darrel creates
                            Photoshop
                            wizardry while pumping Metallica. Back home in Pretoria, he can be found applying that
                            same
                            focus to conquering the video game universes of Batman or Assasin’s Creed or dabbling
                            with
                            Autodesk Maya. </p>
                    </div>
                </div>
                <div class="small-12 large-3 medium-6 columns">
                    <img src="{{asset('profile-images/MabuthoMsimanga.jpg')}}" alt="">
                    <div class="bio"><span class="title">Designer</span><span class="name">Mabutho Msimanga</span>
                        <p>A creative maverick and self-taught graphic designer, Mabutho started out his career as a
                            mime artist. Ambitious and hard-working, he enjoys experimenting with animation. Mabutho
                            is
                            a devoted family man and also happens to have impeccable dress sense. </p>
                    </div>
                </div>
            </div>
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
        <div class="row logos-row">
            <div class="small-12 columns centered">
                <div class="row">
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/public/img/new-logos/Aquazania.jpg'}}" alt="">
                    </div>
                    <div class="small-4 columns">
                    <img src="/public/img/new-logos/BalwinProperties.jpg" alt="">
                    </div>
                        <div class="small-4 columns">
                    <img src="/public/img/new-logos/ChabadHouse.jpg" alt="">
                        </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <img src="/public/img/new-logos/ChevrahKadisha.jpg" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="/public/img/new-logos/DOTSafetyFootwear.jpg" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="/public/img/new-logos/KingDavidSchools.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <img src="/public/img/new-logos/Lulaway.jpg" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="/public/img/new-logos/Nandos.jpg" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="/public/img/new-logos/UFO.jpg" alt="">
                    </div>
                </div>
               
            </div>
            {{--<div class="small-12 centered columns">--}}
            {{--<table class="table-center">--}}
            {{--<tbody>--}}
            {{--<tr>--}}
            {{--<td>--}}
            {{--<img src="{{asset('img/logos/nandos.png')}}" class="columns  small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--<td>--}}
            {{--<img src="{{asset('img/logos/balwin.png')}}" class="columns small-centered small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--<td>--}}
            {{--<img src="{{asset('img/logos/ufo-furniture.png')}}" class="columns  small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td><img src="{{asset('img/logos/dot.png')}}" class="columns  small-4 brand-logo" alt=""></td>--}}
            {{--<td>--}}
            {{--<img src="{{asset('img/logos/king-david.png')}}" class="columns  small-centered small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--<td><img src="{{asset('img/logos/aquazania.png')}}" class="columns  small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>--}}
            {{--<img src="{{asset('img/logos/chabad-house.png')}}" class="columns  small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--<td>--}}
            {{--<img src="{{asset('img/logos/genesis-capital.png')}}" class="columns  small-centered small-4 brand-logo" alt="">--}}
            {{--</td>--}}
            {{--<td><img src="{{asset('img/logos/chev.png')}}" class="columns  small-4 brand-logo" alt=""></td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
            {{--</table>--}}
            {{--</div>--}}
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
            <iframe src="//www.google.com/maps/embed/v1/place?q=132+Athol+St,+Highlands+North,+Johannesburg,+2192&zoom=16&key=AIzaSyAE-8UAOtqTOl_wRWL9tWM6z3on8YHLisc"></iframe>
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
                <span class="body"><a class="3c3c3c" href="mailto:adam@brandsmiths.co.za">adam@brandsmiths.co.za</a><br><a href="mailto:paula@brandsmiths.co.za">paula@brandsmiths.co.za</a></span>
            </div>
        </div>
        <div class="phantom-small"></div>
    </div>
@endsection
@section('custom-scripts')
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.orange', {
            easing: 'cubic-bezier(0.445, 0.05, 0.55, 0.95)',
            duration: 2100,
            delay: 1000,
            distance: '1500px',
            origin: 'left'
        });
        sr.reveal('.grey', {
            easing: 'cubic-bezier(0.445, 0.05, 0.55, 0.95)',
            duration: 2100,
            distance: '1500px',
            origin: 'right'
        });
    </script>
    <script>
        $('#mylightbox').featherlight();
    </script>
@endsection
@section('modals')

@endsection()
