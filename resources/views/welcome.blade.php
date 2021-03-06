@extends('layout')
@section('content')
    <style>
        video {
            width: 100% !important;
            height: auto !important;
        }
    </style>
    <div class="first" id="banner">
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
                <h1 class="grey darker" data-scroll-reveal="enter left and move 50px over 0.6s after 0.3s">fresh</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange darker">concepts</h1>
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns text-right">
                <h1 class="grey darker">compelling</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange darker">copy</h1>
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns text-right">
                <h1 class="grey darker">eye catching</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange darker">design</h1>
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns text-right">
                <h1 class="grey darker">obsessive</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange darker">service</h1>
            </div>
        </div>
        <div class="phantom"></div>
    </div>
    <div class="second" id="who-we-are">
        <div class="row">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 class="grey">who</h1>
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
        <div class="third" id="what-can-we-deliver">
            <div class="row">
                <div class="phantom"></div>
                <div class="small-6 columns text-right">
                    <h1 class="grey">What can</h1>
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
        <div class="fourth" id="our-work">
            <div class="row">
                <div class="phantom"></div>
                <div class="small-6 columns text-right">
                    <h1 class="grey">Our</h1>
                </div>
                <div class="small-6 columns">
                    <h1 class="orange">work</h1>
                </div>
            </div>
            <div class="phantom-small"></div>
            <div class="row collapse portfolio">
                @foreach($portfolios as $portfolio)
                    <div class="columns small-3">
                        <a id="modal-link" href="modal/{{$portfolio->id}}" data-featherlight="ajax"><img
                                    class="portfolio-thumbnail" src="{{asset("$portfolio->thumbnail")}}" class="" alt=""
                                    id="portfolio_item_{{$portfolio->id}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="phantom-small"></div>
        <div class="phantom"></div>
    </div>
    </div>
    <div class="fifth" id="meet-the-team">
        <div class="phantom"></div>
        <div class="small-6 columns text-right">
            <h1 class="grey">Meet</h1>
        </div>
        <div class="small-6 columns">
            <h1 class="orange">the team</h1>
        </div>
        <div class="row">
            <div class="columns small-centered small-12 medium-10 large-10 small-offset-2">
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
                    <div class="bio"><span class="title">Copywriter</span><span class="name">Paula Levin</span>
                        <p>First a thinker, then a writer, Paula has a background in journalism, magazine editing
                            and
                            has authored 2 books. She has landed a cushy job working as a copywriter for her husband
                            Adam, and no longer needs permission slips to dash to gym, coffee and school lifts. </p>
                    </div>
                </div>
                <div class="small-12 large-3 medium-6 columns">
                    <img src="{{asset('profile-images/tshepo.jpg')}}" alt="">
                    <div class="bio"><span class="title">Designer</span><span class="name">Tshepo Molise</span>
                        <p>Tshepo’s career as a designer began with a horrible advert - not his own! But one so foul
                            that this young, ambitious creative decided to make the world a far prettier place. And that
                            he has - both with his design,
                            as well as his warm smile and easy-going attitude. Tshepo has a passion for typography and
                            illustration and admits to being obsessed with video. On weekends he prefers a quiet picnic
                            with his fiancé and family to
                            wild parties.</p>
                    </div>
                </div>
                <div class="small-12 large-3 medium-6 columns">
                    <img src="{{asset('profile-images/ronit.jpg')}}" alt="">
                    <div class="bio" ><span class="title">Traffic Manager</span><span class="name">Ronit Mograbi</span>
                        <p>The newest member of our team is blue-eyed dynamo Ronit Mograbi who brings 20 years of agency and marketing experience to Brandsmiths. With roots in big agencies like Saachi & Saachi, Hunt Lascaris, Jupiter Drawing Room and Black Khaki, Ronit has worked on the client service side of major brands but she also spent several years in marketing. Combining both perspectives allows Ronit to think big and add value to our clients while retaining a meticulous attention to detail on every brief. In her free time, Ronit loves exploring museums, wine tasting and travel. </p>
                    </div>
                </div>
                <div class="small-12 large-3 small-pull-6 large-pull-6 medium-6 columns">
                    <img src="{{asset('profile-images/megan.jpg')}}" alt="">
                    <div class="bio" ><span class="title">Designer</span><span class="name">Megan Smanjak-Downer</span>
                        <p>
                            Megan has always had a flair for art and studied it in high school. Since graduating from
                            the Greenside Design Centre, she has invested her heart and soul into perfecting her craft
                            and learning new skills in graphic design. "I love teaching myself new things, and I'm
                            obsessed with efficiency." Megan is very close to her large and extended family and is
                            proudly Yugoslavian, right down to the beautiful tattoos adorning her hands and fingers,
                            which reflect her family's faith and heritage. In her spare time, Megan can either be found
                            running or cycling out in nature, or working on content for her own design brand, the
                            Wondery.
                        </p>
                    </div>
                </div>
                <div class="small-12 large-3 large-pull-6  medium-6 columns">
                    <img src="{{asset('profile-images/chris.jpg')}}" alt="">
                    <div class="bio" ><span class="title">Junior Designer</span><span class="name">Chris Sibanda</span>
                        <p>
                            Chris is the youngest member of our team. Born in Bulawayo, he got interested in design when
                            creating the cover for his rap album - "The Come-up". Rapping, mixing and mastering didn't
                            end that well, "we got
                            booed", but opened up a whole new career and it sure beats his other options: agriculture or
                            electronics! Chris started watching Photoshop tutorials online, spending hours honing his
                            craft. His grit, focus
                            and raw creative talent should take him far.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="phantom"></div>
    </div>
    <div class="sixth" id="our-clients">
        <div class="row">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 class="grey">our</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">clients</h1>
            </div>
        </div>
        <div class="row logos-row">
            <div class="small-12 columns centered">
                <div class="row">
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/Aquazania.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/BalwinProperties.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/ChabadHouse.jpg')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/ChevrahKadisha.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/DOTSafetyFootwear.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/KingDavidSchools.jpg')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/Lulaway.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/Nandos.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/new-logos/UFO.jpg')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/logos/atlas.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/logos/credit.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/logos/delish.jpg')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/logos/encore.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/logos/global.jpg')}}" alt="">
                    </div>
                    <div class="small-4 columns">
                        <img src="{{secure_asset('/img/logos/sodastream.jpg')}}" alt="">
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
    <div class="seventh" id="get-in-touch">
        <div class="row expanded">
            <div class="phantom"></div>
            <div class="small-6 columns text-right">
                <h1 class="grey">Get in</h1>
            </div>
            <div class="small-6 columns">
                <h1 class="orange">touch</h1>
            </div>
            <div class="phantom"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.4714896794703!2d28.094471315028784!3d-26.14876998346256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950d9c6e471f13%3A0x6d8a1190da2fd18b!2s43+Durham+St%2C+Fairmount%2C+Johannesburg%2C+2192!5e0!3m2!1sen!2sza!4v1565959008451!5m2!1sen!2sza"></iframe>
            <div class="phantom-small"></div>
        </div>
        <form method="POST" action="/contact-us" id="contact_us_form">
            {{csrf_field()}}
            <div class="row">
                <a id="acontact">
                    @if(Session::has('success_message'))

                        <div data-alert class="alert-box success radius">
                            {{Session::get('success_message')}}
                        </div>

                    @endif
                </a>
                <div class="columns small-4">
                    <label>
                        <input type="text" name="name" placeholder="YOUR NAME"
                               data-parsley-error-message="Please enter a name" required>
                    </label>
                </div>
                <div class="columns small-4">
                    <label>
                        <input name="email" placeholder="YOUR EMAIL" type="email" data-parsley-type="email"
                               data-parsley-error-message="Please enter a valid email" required>
                    </label>
                </div>
                <div class="columns small-4">
                    <label>
                        <input type="text" name="phone" placeholder="YOUR PHONE"
                               data-parsley-error-message="Please enter a phone number" required>
                    </label>
                </div>
                <div class="columns small-12">
                    <label>
                        <textarea rows="5" type="text" name="message" placeholder="YOUR MESSAGE"></textarea>
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
                <span class="body">43 Durham Street, Fairmount<br> Johannesburg - South Africa </span>
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
@endsection
@section('custom-scripts')
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        window.sr = ScrollReveal({mobile: false});
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const widthy = getWidth();

        }, false);

        function getWidth() {
            return document.documentElement.clientWidth;
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
    <script>
        $('#contact_us_form').parsley();
    </script>
    <script>
    </script>
@endsection
@section('modals')

@endsection()
