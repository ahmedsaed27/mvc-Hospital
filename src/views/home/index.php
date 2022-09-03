<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Hospital Website Design Tutorial</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!--bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap-grid.min.css" />
    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/css/style.css">

</head>

<body>
    <!-- heder section starts -->
    <header>
        <div class="container">
            <a href="<?= home() ?>" class="logo"><span>H</span>ealth<span>C</span>are.</a>

            <nav class="nav">
                <ul>
                    <li><a href="<?= home() ?>">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#facility">facility</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="<?= url('login/logout') ?>" > logout</a></li>
                    
                </ul>
            </nav>
            <div class="fas fa-bars"></div>
        </div>
    </header>

    <!-- heder section ends -->
    <!-- home section starts -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center  text-center  text-md-left">
                <div class="col-md-6  pr-md-5" data-aos="zoom-in">
                    <img src="https://media.istockphoto.com/vectors/doctors-team-vector-id846455730?k=6&m=846455730&s=170667a&w=0&h=0tuUN-D_r8tf1RHo_tuMzMxRr_d6Izc9ov7b4YIWa5Y=" width="100%" alt="doctors photo" />
                </div>

                <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
                    <h1><span>stay</span> safe, <span>stay</span> healthy. </h1>
                    <h3>caring for you.</h3>
                    <a href="#"><button class="button">learn More </button></a>
                </div>
            </div>
    </section>
    <!-- home section ends -->
    <!-- about section starts -->
    <section class="about" id="about">

        <div class="container">
            <div class="row  min-vh-100 align-items-center">
                <div class="col-md-6 content " data-aos="fade-right">
                    <div class="box">
                        <h3><i class="fas fa-ambulance"> ambulance services </i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nobis explicabo eos sint hic quasi harum repellendus autem. Minima fugiat obcaecati explicabo consequatur quidem reprehenderit adipisci quo? Odio, natus veniam?</p>
                    </div>

                    <div class="box">
                        <h3><i class="fas fa-procedures"> emergancy rooms </i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nobis explicabo eos sint hic quasi harum repellendus autem. Minima fugiat obcaecati explicabo consequatur quidem reprehenderit adipisci quo? Odio, natus veniam?</p>
                    </div>

                    <div class="box">
                        <h3><i class="fas fa-stethoscope"> free check-ups </i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nobis explicabo eos sint hic quasi harum repellendus autem. Minima fugiat obcaecati explicabo consequatur quidem reprehenderit adipisci quo? Odio, natus veniam?</p>
                    </div>
                </div>


                <div class="col-md-6 d-none d-md-block " data-aos="fade-left">
                    <img src="../layout/images/about-section.png" width="100%" alt="doctorphoto" />
                </div>
    </section>
    <!-- about section ends-->
    <!-- facility section starts -->
    <section class="facility" id="facility">

        <div class="container">

            <h1 class="heading"><span>'</span> our facilities <span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-1208116440-612x612.jpg" title="our team">
                        <img src="../layout/images/istockphoto-1208116440-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-1215565992-612x612.jpg" title="our lab">
                        <img src="../layout/images/istockphoto-1215565992-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/operation-1807543__340.jpg" title="emergency rooms">
                        <img src="../layout/images/operation-1807543__340.jpg" alt="">
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-1204436253-612x612.jpg" title="expert doctors">
                        <img src="../layout/images/istockphoto-1204436253-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-1189303763-612x612.jpg" title="expert doctors">
                        <img src="../layout/images/istockphoto-1189303763-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-916245482-612x612.jpg" title="emergency rooms">
                        <img src="../layout/images/istockphoto-916245482-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-1189304032-612x612.jpg" title="expert doctors">
                        <img src="../layout/images/istockphoto-1189304032-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-465194019-612x612.jpg" title="emergency rooms">
                        <img src="../layout/images/istockphoto-465194019-612x612.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="../layout/images/istockphoto-1214357163-612x612.jpg" title="enough beds">
                        <img src="../layout/images/istockphoto-1214357163-612x612.jpg" alt="">
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- facility section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <div class="container">

            <h1 class="heading"><span>'</span> people's review <span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="fade-right">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
                    <h3>someone's name</h3>
                    <span>jan 5, 2021</span>
                    <img src="../layout/images/pic4.jpg" alt="">
                </div>

                <div class="box" data-aos="fade-up">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
                    <h3>someone's name</h3>
                    <span>jan 7, 2021</span>
                    <img src="../layout/images/pic5.jpg" alt="">
                </div>

                <div class="box" data-aos="fade-left">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
                    <h3>someone's name</h3>
                    <span>jan 10, 2021</span>
                    <img src="../layout/images/pic6.jpg" alt="">
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends  -->
    <!-- counter section starts -->
    <section class="counter">

        <div class="container">

            <div class="box-container">

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-hospital"></i>
                    <span>120+</span>
                    <h3>Hospitals</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-user"></i>
                    <span>100+</span>
                    <h3>Staff</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-smile"></i>
                    <span>1200+</span>
                    <h3>happy patients</h3>
                </div>

                <div class="box" data-aos="fade-up">

                    <i class="fas fa-procedures"></i>
                    <span>130+</span>
                    <h3>bed facility</h3>
                </div>

            </div>

        </div>

    </section>
    <!-- counter section ends -->
    <!-- contact section starts  -->

    <!-- <section class="contact" id="contact">

        <div class="container min-vh-100">
            <div class="row justify-content-center">

                <h1 class="heading"><span>'</span> Add Patient <span>'</span></h1>

                <div class="col-md-10" data-aos="flip-down">

                    <form action="">

                        <div class="inputBox">
                            <input type="text" placeholder="رقم المسلسل" id="idNumber">
                            <input type="text" placeholder="التاريخ" id="date">
                            <input type="text" placeholder="اسم المريض " id="pateintName">
                            <input type="text" placeholder="العمر" id="age">
                            <input type="text" placeholder="الصناعه" id="Job">
                            <input type="text" placeholder="محل الاقامه" id="address">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="مرسل بمعرفه" id="sendby">
                            <input type="text" placeholder="وقت الوصول " id="arrivalTime">
                            <input type="text" placeholder="العنبر " id="roomNum">
                            <input type="text" placeholder="وقت الارسال الي العنبر " id="roomArrivalTime">
                            <input type="text" placeholder="ملاحظات " id="Notics">
                        </div>

                        <textarea name="" id="" cols="30" rows="10" placeholder="message ( optional ) "> 

                        </textarea>
                        <a id="add" class="btn btn-primary btn-lg active button" role="button" aria-pressed="true">Add</a>
                       
                       

                    </form>

                </div>

            </div>
        </div>
    </section> -->

    <!-- contact section ends  -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nemo porro quasi minima consequuntur dolorum, quas amet in autem id?</p>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-up">
                    <h3>links</h3>
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">facility</a>
                    <a href="#">review</a>
                    <a href="#">add patient</a>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-left">
                    <h3>share</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">github</a>
                </div>

            </div>
        </div>
    </section>

    <!-- footer section ends -->

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- magnific popup js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- custom js link  -->
    <script src="../layout/js/main.js"></script>
    <script src="../layout/js/script.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            delay: 400
        });
    </script>
</body>

</html>