<x-header />
<x-navbar />

<div class="our-skill-area fix hidden-sm" style='margin-top: 60px'>
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
        <div class="container">
            <div class="row">
                <div class="skill-text">

                    <div class="col-xs-12 col-sm-12 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <h3 class="progress-h4" style="font-family: Verdana">CONTACTEZ-NOUS</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Appels: +242 06 828 9050<br>
                                <span>Lundi-vendredi (9h-17h)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email: contact@drumnetinnov.cg<br>
                                <span>Web: www.drumnetinnov.cg</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Localisation: A108, Avenue Adam<br>
                                <span>NY 535022, Brazzaville</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="{{ asset('img/logotype.png') }}" width='90%' alt="">
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">

                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button class='btn btn-primary btn-lg' type="submit"><i
                                        class='fa fa-refresh'></i> Envoyer Message</button></div>
                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Footer bottom Area -->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <h2>DRUMNET INNOV</h2>
                            </div>

                            <p>
                                DRUMNET INNOV est une start-up congolaise qui œuvre dans le secteur du numérique et de
                                la gestion d’entreprise. Grâce à notre gamme de services adaptée, nous accompagnons nos
                                clients dans leur transformation digitale et dans la gestion efficiente de leurs
                                activités. Notre équipe, jeune, passionnée et professionnelle saura vous guider vers la
                                réussite de tous vos projets.
                            </p>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>information</h4>
                            <p>
                                Contactez notre service client pour votre prise en charge. 
                            </p>
                            <div class="footer-contacts">
                                <p><span> <i class='fa fa-phone'></i> Tel:</span> +242 06 828 9050</p>
                                <p><span><i class='fa fa-envelope'></i> Email:</span> contact@drumnetinnov.cg</p>
                                <p><span> <i class='fa fa-time'></i> Heures de travail:</span> 9h-17h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Votre guide vers le nouveau monde</h4>
                            <div class="footer-contacts">
                                <p><span> Vision:</span> +242 06 828 9050</p>
                                <p><span></i> Dévise:</span> contact@drumnetinnov.cg</p>
                                <p><span> Objectifs:</span> 9h-17h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<x-footer />
