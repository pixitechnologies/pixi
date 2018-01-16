
@extends('layouts.master')

@section('content')

    <div id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <h1>CREATIVE DIGITAL AGENCY</h1>
                    <P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                        rhoncus ut, </P>
                    <button class="btn btn-lg btn-danger" ><i class="fa fa-phone"> CONTACT OUR TEAM</i></button>
                    <button class="btn btn-lg btn-warning"><i class="fa fa-briefcase"> VIEW ALL PROJECTS</i></button>
                </div>
                <div class="col-md-6 col-lg-6">
                    <img src="{{asset('img/icon2.png')}}"  alt="">
                </div>
            </div>
        </div>
    </div>

    {{--end header kassimriyami pixitechnologies web developer--}}



    {{--start services section--}}

    <div id="services" class="services">
        <div class="container">
            <h1>OUR SERVICES</h1>
            <P>Donec quam felis, ultricies nec, pellentesque eu, pretium quisDonec
                quam felis, ultricies nec, pellentesque eu, pretium quis</P>
            <div class="row">
                <div class="col-lg-3 col-md-3"><i class="fa fa-desktop" aria-hidden="true"></i>
                    <h4>WEB DEVELOPMENT</h4> <p>as a Web Design Company in Tanzania Our expert development team works on
                        the cutting edge of technology and best practices.</p></div>
                <div class="col-lg-3 col-md-3"><i class="fa fa-database" aria-hidden="true"></i>
                    <h4>SOFTWARE DEVELOPMENT </h4><ul><li>Hospital Management Systems</li><li>POS</li><li>Inventory Systems</li></ul><li>School Management Systems</li></div>
                <div class="col-lg-3 col-md-3"><i class="fa fa-mobile" aria-hidden="true"></i>
                    <h4>MOBILE APP DEVELOPMENT</h4> <p>More than 80% of the total traffic in the internet is coming from mobile applications at pixitechnologies we design and develop clean and smart apps for clients</p></div>
                <div class="col-lg-3 col-md-3"><i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <h4>DIGITAL MARKETING </h4><p>Donec quam felis, ultricies nec, pellentesque eu, pretium quisDonec</p></div>

            </div>

        </div>
    </div>

    {{--end services section--}}
    {{--start pricing section--}}


    {{--end pricing section--}}
    {{--start team section--}}
    <div id="team" class="team">
        <div class="container">
            <h2>OUR TEAM</h2>
            <P>Talent is our Key</P>
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">
                    <h4>KASSIM RIYAMI</h4>
                    <B>WEB DEVELOPER</B>
                    <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">
                    <h4>REUBEN WEDSON</h4>
                    <B>MOBILE APP DEVELOPER</B>
                    <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">
                    <h4>JOSHUA JOHN</h4>
                    <b>DIGITAL STRATEGIST</b>
                    <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">
                    <h4>NOBERT NICHOLAUS</h4>
                    <b>MARKETER</b>
                    <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </div>
    {{--end our team section--}}

    {{--customer section--}}

    <div id="customer" class="customer">
        <div class="container">
            <h2>Trusted by</h2>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/p.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/j.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/icon.png')}}" alt="">
                </div>

                <div class="col-lg-3 col-md-3" class="img1">
                    <img src="{{asset('img/dell.png')}}" class="img-responsive" alt="">
                </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/p.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/j.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/icon.png')}}" alt="">
                </div>

                <div class="col-lg-3 col-md-3" class="img1">
                    <img src="{{asset('img/torrent.png')}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection