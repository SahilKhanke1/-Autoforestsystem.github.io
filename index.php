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
    <title>Index</title>  

    <link href="css/style.css" rel="stylesheet">  
</head>  
<body>  
    <?php include 'menu.php'; ?>
<!-------------------------------------Carousel-------------------------------------------->
<div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.tadobanationalpark.in/images/tadoba-national-park2.jpg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item">
      <img src="https://www.tadobanationalpark.in/images/tadoba-national-park3.jpg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="https://www.tadobanationalpark.in/images/tadoba-national-park.jpg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      <!-------------Jumbotron------------------->

    <!-- Jumbotron -->
    <div class="container-fluid">
    <div class="p-4 shadow-4 rounded-3  mx-5 my-5" style="background-color: hsl(0, 0%, 94%);">
    <h2 class="text-danger text-decoration-underline" >ABOUT PARK</h2>
    <p><h5>
    Notably Maharashtra's oldest and largest National Park, the "Forest Park", also known as the "Forest Park Andhari Tiger Reserve" is one of India's 47 project tiger reserves existing in India. It lies in the Chandrapur district of Maharashtra state and is approximately 150 km from Nagpur city. The total area of the tiger reserve is 1,727 Sq.km, which includes the Tadoba National Park, created in the year 1955. The Andhari Wildlife Sanctuary was formed in the year 1986 and was amalgamated with the park in 1995 to establish the present Tadoba Andheri Tiger Reserve. The word 'Forest Park' is derived from the name of God "Tadoba" or "Taru," which is praised by local tribal people of this region and "Andhari" is derived from the name of Andhari river that flows in this area.
</h5>
    </p>

    <!------------------Cards----------------------->
    <div class="row row-cols-1 row-cols-md-4 g-5">
  <div class="col">
    <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple" style="width:17rem;">
      <img src="https://www.tadobanationalpark.in/images/tadoba-hotels.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <a href="#!"><div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2)"></div></a>
      <div class="card-body">
        <h5 class="card-title text-danger">Wildlife Resorts In Tadoba</h5>
        <p class="card-text">
            Svasara Jungle Lodge<br>
          Tiger Trails Jungle Lodge<br>
            Camp Serai Tiger<br>
           Irai Safari Retreat
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple" style="width:17rem;">
      <img src="https://www.tadobanationalpark.in/images/pkg.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <a href="#!"><div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2)"></div></a>
      <div class="card-body">
        <h5 class="card-title text-danger">Forest Tour<br> Packages</h5>
        <p class="card-text">
            The Tiger land Safari<br>
            The Jewel of Vidharbha<br>
            Wildlife and Nature Trail<br>
            Weekend Gateway to Tadob
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple" style="width:17rem;">
      <img src="https://www.tadobanationalpark.in/images/tadoba-safari.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <a href="#!"><div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2)"></div></a>
      <div class="card-body">
        <h5 class="card-title text-danger">Forest Safari Information</h5>
        <p class="card-text">
                Safari Timings of Tadoba<br>
                Safari Zones in Tadoba<br>
                Jeep Safari in Tadoba<br>
                Entry Gates for Safari in Ta</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple"style="width:17rem;">
      <img src="https://www.tadobanationalpark.in/images/tadoba-travel-info.jpg" class="card-img-top" alt="Skyscrapers"/>
      <a href="#!"><div class="mask" style="background-color: hsla(195, 83%, 58%, 0.2)"></div></a>
      <div class="card-body">
        <h5 class="card-title text-danger">Travel Information in Forest</h5>
        <p class="card-text">
        
            How to Reach Park<br>
            Best Time to Visit Forest<br>
            Climate and Weather<br>
        </p>
      </div>
    </div>
  </div>
</div>
      <!----------------------------------------->
      
    <hr class="my-4" />
    <p><h5>According to the 2010 National Census on Tigers, there are about 43 tigers in the reserve, which is one of the highest in India. Here are some highlights of the park…</h5>
        ➤ The park is open for visitors from 15th October to 30th June every season and remains full-day closed on every Tuesday.<br>
        ➤ The vegetation of Tadoba forest is of Southern tropical dry deciduous type and is spread on around 626 sq.km.<br>
        ➤ Teak is the prominent tree species in the forest and there are a few lakes, which makes sure the park has rich water resources.<br>
        ➤ Major part of this forest lies in the hilly area, thus many hillocks and terrains provide shelter to the wild animals here.<br>
        ➤ It has a dense forest area, smooth meadows, deep valleys, and a great atmosphere to stabilize more numbers of tigers.<br>
        ➤ The main attraction of the Forest Park is Jungle or Tiger Safari in an open top gypsy.<br>
        ➤ There is good chance to spot the shy Sloth Bear and Wild Dogs.<br>
        ➤ One can find some of the Central India’s best native woodland bird species in this forest.<br>
        ➤ Accommodation facilities are available and are mainly concentrated among two of its popular entrance gates i.e. Kolara Gate and Mohurli Gate.<br>

        <p><h5 my-5>
        The Forest Park is divided into three separate forest ranges, i.e. Tadoba north range, Kolsa south range, and Morhurli range, which is sandwiched in between the first two. There are two lakes and one river in the park, which gets filled every monsoon, the ‘Tadoba Lake,’ ‘Kolsa Lake,’ and ‘Tadoba River.’ These lakes and rivers provide vital ingredients needed to sustain the park’s life.</h5>
        <h5 my-5>
        The Tadoba Tiger Reserve is rich in flora and fauna. Some of the famous and wildly seen flora of this park include, Teak, Ain, Bija, Dhauda, Hald, Salai, Semal, Tendu, Beheda, Hirda, Karaya gum, Mahua Madhuca, Arjun, Bamboo, Bheria, Black Plum, and many others. Apart from this the list of animals noted in this part include, Tigers, Indian leopards, Sloth bears, Gaur, Nilgai, Dhole, Striped Hyena, Small Indian Civet, Jungle Cats, Sambar, Spotted Deer, Barking Deer, Chital, Marsh Crocodile, Indian Python, Indian Cobra, Grey-headed Fish Eagle, Crested Serpent Eagle, Peacock, Jewel Beetles, Wolf Spiders, etc.
        </h5></p>


    </p>
    <button type="button" class="btn btn-primary">
        Learn more
    </button>
    </div>
    </div>
    <!-- Jumbotron -->

    




<!-------------------------footer-------------------------->

      <footer class="text-center text-white" style="background-color: #caced1;">
        <!-- Copyright -->
        <div class="text-center p-2" style="background-color: #3B3634;">
          © 2020 Copyright:
          <a class="text-white" href="https://en.wikipedia.org/wiki/Nagpur">Nagpur.com</a>
        </div>
        <!-- Copyright -->
      </footer>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>  
</html>     

