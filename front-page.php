<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>


<?php get_header(); 
?>


<main>


    <div class="img-banner">
        <div class="banner-container">
            <h3>Because we care </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam cupiditate saepe voluptate consequatur
                blanditiis nostrum soluta, architecto odit! Ipsum maxime velit repellendus voluptatibus et quibusdam
                pariatur delectus commodi aliquid. Nam.</p>
            <button class="bannerbtn">Make Appointment <i class="fas fa-chevron-right"></i></button>
        </div>
    </div>



    <!-- Our Service -->
    <div class="ourservice container-fluid">
        <h2 class="ourservicehead">Our Service</h2>
        <h6 class="text-center text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima saepe veniam
            iste labore voluptatum.
            Corporis corrupti sed eaque fuga. Reprehenderit ipsam officia vel perferendis! Voluptatibus, architecto!
            Facilis illo nisi labore?</h6>
        <div class="row">
            <div class="col-sm-3">
                <div class="therapy">
                    <img class="img-fluid mx-auto"
                        src="<?php echo get_stylesheet_directory_uri();?>/icons/cross_paw.svg" width="80" height="80"
                        alt="therapy">
                </div>
                <h3 class="servicetxt">Therapy</h3>
                <p class="servicebodytxt">Our clinic provide a special therapy for your pets may require</p>
            </div>
            <div class="col-sm-3">
                <div class="care">
                    <img class="img-fluid mx-auto" src="<?php echo get_stylesheet_directory_uri();?>/icons/heart.svg"
                        width="80" height="80" alt="care">
                </div>
                <h3 class="servicetxt">24 hour care</h3>
                <p class="servicebodytxt">Our clinic provide a 24/7 service for your pets</p>
            </div>
            <div class="col-sm-3">
                <div class="vaccine">
                    <img class="img-fluid mx-auto"
                        src="<?php echo get_stylesheet_directory_uri();?>/icons/cross_paw.svg" width="80" height="80"
                        alt="vaccine">
                </div>
                <h3 class="servicetxt">Vaccinations</h3>
                <p class="servicebodytxt">Our clinic provide a complete vaccinations for you per may require</p>
            </div>
            <div class="col-sm-3">
                <div class="surgery">
                    <img class="img-fluid mx-auto" src="<?php echo get_stylesheet_directory_uri();?>/icons/heart.svg"
                        width="80" height="80" alt="surgery">
                </div>
                <h3 class="servicetxt">Surgery</h3>
                <p class="servicebodytxt">Our clinic provide the best surgeries for your pets</p>
            </div>
        </div>
    </div>

    <!-- end our service -->

    <!-- team -->

    <div class="team-container container">
        <div class="row">
            <div class="col">
                <div class="teamtxt">
                    <h4>Meet Our Vet</h4>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, facilis deleniti. Excepturi, eum.
                        Error dolores nam quaerat voluptatem recusandae provident voluptas animi corporis, deserunt
                        corrupti repellendus, eum, quasi ratione dolorem.</h5>
                </div>
            </div>
        </div>


        <div class="row ml-auto">
            <div class="col">
                <div class="team-img">

                    <div class="col-md ml-auto d-flex flex-row flex-wrap justify-content-end">
                        <div class="teamimg-box-1 p-2">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/pets/vet.jpg" alt=""
                                class="img-thumbnail border img-fluid" width="200" height="200">
                            <h5 class="text-center">Dr. Jon Doe</h5>
                            <h6 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                                dicta et laboriosam
                                voluptates ipsum, consequatur nam, dolor, iure perspiciatis consequuntur ad debitis
                                quia!
                                Qui aperiam corrupti, quia porro eum quaerat?</h6>
                        </div>

                        <div class="teamimg-box-2 p-2">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/pets/vet.jpg" alt=""
                                class="img-thumbnail border img-fluid" width="200" height="200">
                            <h5 class="text-center">Dr. Jane Doe</h5>
                            <h6 class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Voluptates, quisquam ex!
                                Tempora,
                                quaerat cumque. Quas numquam, ullam quae voluptatibus similique quisquam, amet quis,
                                ex
                                repellat officia molestiae recusandae. Eveniet, neque.</h6>
                        </div>

                        <div class="teamimg-box-3 p-2">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/pets/vet.jpg" alt=""
                                class="img-thumbnail border img-fluid" width="200" height="200">
                            <h5 class="text-center">Dr. Jhon Doe</h5>
                            <h6 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eos
                                architecto
                                voluptatum.
                                Quaerat atque sed labore eos autem quidem, in dolor omnis ab asperiores tempore
                                illum.
                                Fugiat fugit facilis ullam.</h6>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- end of team -->


    <!-- why us -->
    <div class="whyus container-fluid">
        <h2 class="whyushead">Why Us</h2>
        <h6 class="text-center text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos non aspernatur
            quis cumque harum, ipsa
            mollitia, consequatur blanditiis qui, voluptas dolore repellat necessitatibus perferendis? Aut qui delectus
            mollitia blanditiis odio!</h6>

        <div class="row">
            <div class="col-sm-3">
                <div class="home-consult">
                    <img class="img-fluid mx-auto"
                        src="<?php echo get_stylesheet_directory_uri();?>/icons/cross_paw.svg" width="80" height="80"
                        alt="home-consult">
                </div>
                <h3 class="whyusbody">In-Home Consult</h3>
                <p class="whyusbodytxt">Our clinic provide a special therapy for your pets may require</p>
            </div>
            <div class="col-sm-3">
                <div class="booking">
                    <img class="img-fluid mx-auto" src="<?php echo get_stylesheet_directory_uri();?>/icons/heart.svg"
                        width="80" height="80" alt="booking">
                </div>
                <h3 class="whyusbody">Book Service 24/7</h3>
                <p class="whyusbodytxt">Our clinic provide a 24/7 service for your pets</p>
            </div>
            <div class="col-sm-3">
                <div class="staff">
                    <img class="img-fluid mx-auto"
                        src="<?php echo get_stylesheet_directory_uri();?>/icons/cross_paw.svg" width="80" height="80"
                        alt="staff">
                </div>
                <h3 class="whyusbody">Professional and Experienced staff</h3>
                <p class="whyusbodytxt">Our clinic provide a complete vaccinations for you per may require
                </p>
            </div>
            <div class="col-sm-3">
                <div class="emergency">
                    <img class="img-fluid mx-auto" src="<?php echo get_stylesheet_directory_uri();?>/icons/heart.svg"
                        width="80" height="80" alt="emergency">
                </div>
                <h3 class="whyusbody">Emergency</h3>
                <p class="whyusbodytxt">Our clinic provide the best emergency care 24/7 for your pets</p>
            </div>
        </div>
    </div>


    <!-- Appoinment form -->

    <div class="appointment container-fluid">
        <div class="row">
            <div class="col">

                <div class="form-container">
                    <h2 class="appointmenthead">Get An Appointment</h2><br>
                    <form>
                        <h3 class="appointmenttxt text-light">Date and Time</h3>
                        <input type="datetime-local"><br>
                        <h3 class="appointmenttxt text-light">Name</h3>
                        <input type="text" class="form-control"><br>
                        <h3 class="appointmenttxt text-light">Email</h3>
                        <input type="email" class="form-control"><br>
                        <h3 class="appointmenttxt text-light">Phone</h3>
                        <input type="text" class="form-control"><br>
                        <h3 class="appointmenttxt text-light">Additional Note</h3>
                        <textarea class="form-control" type="text"></textarea><br>

                        <input type="submit" value="Submit" class="button">
                    </form>
                </div>




                <!-- End of apoinment form -->

                <!-- testimony  -->

                <div class="col">
                    <div class="testimony-container container-fluid">
                        <div class="row">
                            <div class="col-sm-4 ml-auto">
                                <h2 class="text-center title text-light"><strong> Testimonials</strong></h2>
                                <div class="carousel slide" id="my-carousel" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#my-carousel" data-slide-to="0"></li>
                                        <li data-target="#my-carousel" data-slide-to="1" class="active">
                                        </li>
                                        <li data-target="#my-carousel" data-slide-to="2"></li>

                                    </ol>

                                    <div class="carousel-inner">
                                        <!-- CAROUSEL 1 -->
                                        <div class="carousel-item text-center">
                                            <div class="img-box m-auto">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/pets/2.jpg"
                                                    alt="" class="d-block w-100 rounded-circle">

                                                <h5 class="py-1 my-1"><strong class="text-warning text-uppercase">Jon
                                                        Doe</strong>
                                                </h5>
                                                <h6 class="text-light m-1">Customer</h6>
                                                <p class="pt-3 text-white">Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing
                                                    elit.
                                                    Voluptatum eligendi magnam quo eius, dicta rem aperiam
                                                    molestias
                                                    fugit, at
                                                    saepe
                                                    delectus ducimus repellendus voluptates unde
                                                    voluptatibus
                                                    magni!
                                                    Necessitatibus,
                                                    voluptatum illum.</p>
                                            </div>
                                        </div>
                                        <!-- CAROUSEL 2 -->
                                        <div class="carousel-item text-center active">
                                            <div class="img-box m-auto">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/pets/2.jpg"
                                                    alt="" class="d-block w-100 rounded-circle">

                                                <h5 class="py-1 my-1"><strong class="text-warning text-uppercase">Marie
                                                        The
                                                        Cat</strong>
                                                </h5>
                                                <h6 class="text-light m-1">Customer</h6>
                                                <p class="pt-3 text-white">Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing
                                                    elit.
                                                    Voluptatum eligendi magnam quo eius, dicta rem aperiam
                                                    molestias
                                                    fugit, at
                                                    saepe
                                                    delectus ducimus repellendus voluptates unde
                                                    voluptatibus
                                                    magni!
                                                    Necessitatibus,
                                                    voluptatum illum.</p>
                                            </div>
                                        </div>
                                        <!-- CAROUSEL 3 -->
                                        <div class="carousel-item text-center">
                                            <div class="img-box m-auto">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/pets/2.jpg"
                                                    alt="" class="d-block w-100 rounded-circle">

                                                <h5 class="py-1 my-1"><strong class="text-warning text-uppercase">Nora
                                                        the
                                                        Dog</strong>
                                                </h5>
                                                <h6 class="text-light m-1">Customer</h6>
                                                <p class="pt-3 text-white">Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing
                                                    elit.
                                                    Voluptatum eligendi magnam quo eius, dicta rem aperiam
                                                    molestias
                                                    fugit, at
                                                    saepe
                                                    delectus ducimus repellendus voluptates unde
                                                    voluptatibus
                                                    magni!
                                                    Necessitatibus,
                                                    voluptatum illum.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- end of testimony -->





</main>


<?php get_footer();?>