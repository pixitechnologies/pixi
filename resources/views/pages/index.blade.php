
@extends('layouts.master')

@section('content')

    <div id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 animated bounceInLeft" data-wow-delay="2s">
                    <h1>CREATIVE DIGITAL AGENCY</h1>
                    <P>Pixitechnologies is a full service creative & digital solutions agency, dedicated on serving both Small,Medium and Large
                        Enterprises  all from various industries. </P>
                    <button class="btn btn-lg " ><i class="fa fa-phone"> CONTACT OUR TEAM</i></button>
                    <button class="btn btn-lg "><i class="fa fa-briefcase"> VIEW ALL PROJECTS</i></button>
                </div>
                <div class="col-md-6 col-lg-6 animated bounceInRight" data-wow-delay="2s">
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
            <P>As a Digital Agency we offer the following services to our clients</P>
            <div class="row">
                <div class="col-lg-3 col-md-3 animated bounceInLeft"  ><i class="fa fa-desktop" aria-hidden="true"></i>
                    <h4>WEB DEVELOPMENT</h4> <p>as a Web Design Company in Tanzania Our expert development team works on
                        the cutting edge of technology and best practices.</p>
                </div>

                <div class="col-lg-3 col-md-3 " ><i class="fa fa-database" aria-hidden="true"></i>
                    <h4>SOFTWARE DEVELOPMENT </h4>
                    <p>System that are going to simplify your working environment and maximize your profit,example
                    Hospital Management System,Inventory System,School Management Systems</p>
                </div>

                <div class="col-lg-3 col-md-3 " ><i class="fa fa-mobile " aria-hidden="true"></i>
                    <h4>MOBILE APP DEVELOPMENT</h4> <p>More than 80% of the total traffic in the internet is coming from mobile applications at pixitechnologies we design and develop clean and smart apps for clients</p>
                </div>

                <div class="col-lg-3 col-md-3 " ><i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <h4>DIGITAL MARKETING </h4><p>We Perform Digital Marketing tasks like SEO,Social Media Marketing,Social Engine Marketing
                    Network Marketing,Bulk SMS and Email Marketing</p>
                </div>

            </div>

        </div>
    </div>

    {{--end services section--}}
    {{--start pricing section--}}


    {{--end pricing section--}}
    {{--start team section--}}
    {{--<div id="team" class="team">--}}
        {{--<div class="container">--}}
            {{--<h2>OUR TEAM</h2>--}}
            {{--<P>Talent is our Key</P>--}}
            {{--<div class="row">--}}

                {{--<div class="col-lg-4 col-md-4">--}}
                    {{--<img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">--}}
                    {{--<h4>KASSIM RIYAMI</h4>--}}
                    {{--<h5><B>WEB DEVELOPER</B></h5>--}}

                    {{--<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
                    {{--<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
                    {{--<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
                {{--</div>--}}

                {{--<div class="col-lg-4 col-md-4">--}}
                    {{--<img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">--}}
                    {{--<h4>REUBEN WEDSON</h4>--}}
                    {{--<h5><B>MOBILE APP DEVELOPER</B></h5>--}}

                    {{--<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
                    {{--<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
                    {{--<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
                {{--</div>--}}

                {{--<div class="col-lg-4 col-md-4">--}}
                    {{--<img src="{{asset('img/LEKA.jpg')}}" class="img-circle" alt="">--}}
                    {{--<h4>JOSHUA JOHN</h4>--}}
                    {{--<h5><b>DIGITAL STRATEGIST</b></h5>--}}

                    {{--<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
                    {{--<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
                    {{--<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--end our team section--}}

    {{--customer section--}}
    <div id="customer" class="customer">
        <div class="container">
            <h2>Trusted by</h2>
            <div class="row">
                <div class="animated">
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/emjey.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/r.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/builder.png')}}" alt="">
                </div>

                    <div class="col-lg-3 col-md-3">
                        <img src="{{asset('img/mind.png')}}" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <img src="{{asset('img/edge.png')}}" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <img src="{{asset('img/gl.png')}}" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <img src="{{asset('img/emc.png')}}" alt="">
                    </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('img/spare.png')}}"  alt="">
                </div>
                </div>
            </div>
            </div>
        </div>

    <section id="contact">
        <div class="container">
            <div class="well well-sm">
                <h3><strong>Contact Us</strong></h3>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-md-5">
                    <h4><strong>Get in Touch</strong></h4>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-default" type="submit" name="button">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection