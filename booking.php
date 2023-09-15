<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet">
    <title>Booking</title>  

    <link href="css/style.css" rel="stylesheet">  
</head>  
<body> 
  <!------------NavBar-------------------->
  <?php include 'menu.php'; ?>
  <!--------------------------------->


<div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.tadobanationalpark.in/images/tadoba-national-park7.jpg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
  </div>
</div>


<!--------------------------------->
<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mx-5 my-5" style="background-color: hsl(0, 0%, 94%);">
  <h2 class="text-danger">Enquiry Form</h2>

  <hr class="my-4" />
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <div class="row ">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5 mx-5 ">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->
                     <!--Grid column-->
                     <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="country" class="">Country</label>
                            <input type="text" id="country" name="country" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                     <!--Grid column-->
                     <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="contactno" class="">Contact No</label>
                            <input type="text" id="contactno" name="contactno" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="arrival" class="">Date of Arrival</label>
                            <input type="text" id="arrival" name="arrival" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="nopersion" class="">No. OF Persion</label>
                            <input type="text" id="email" name="persion" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->



                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left my-4">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">SUBMIT</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

       
    </div>

</section>
<!--Section: Contact v.2-->


  <hr class="my-4" />

  <p>
  <br><h5>
  We offer amiable tour packages to Tadoba National Park. Explore and avail our varied, pocket-friendly and assorted packages to this national park to enjoy a comprehensive and unforgettable wildlife tour.</h5><br>
  </p>
  
</div>
<!-- Jumbotron -->
<!---------------------------------->

<footer class="text-center text-white" style="background-color: #caced1;">
        <!-- Copyright -->
        <div class="text-center p-2" style="background-color: #3B3634;">
          © 2020 Copyright:
          <a class="text-white" href="https://en.wikipedia.org/wiki/Nagpur">Nagpur.com</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>