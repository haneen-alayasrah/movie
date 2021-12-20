
   
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Netflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/netflix.css" />
  <script src="main.js"></script>
</head>
<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="/img/logo.PNG" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="#home">Home</a>
        <a href="#tvShows">TV Shows</a>
        <a href="#movies">Movies</a>
        <a href="#originals">Originals</a>
        <a href="#recentlyAdded">Recently Added</a>
        <a href="#myList">My List</a> 
        <a href="{{ route('movies.create') }}" class="btn btn-info" role="button">Create</a>       
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>        
      </nav>      
    </header>
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Popular on Netflix</h1>
          <div class="box">
          <div class="row">
          @foreach($movie as $movies)

  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/lights.jpg">
        <img src="/img/p1.PNG" alt="Lights" style="width:100%">
        <div class="caption">
          <a>{{$movies->movie_name}}</a>
        </div>
      </a>
    </div>
  </div>
  <a class="btn btn-primary btn-xs" href="{{ route('movies.show',$movies->id)}}" >Show</a> 

  @endforeach

      

      <h1 id="myList">Trending Now</h1>
      <div class="box">
        <a href=""><img src="/img/t1.PNG" alt=""></a>
        <a href=""><img src="/img/t2.PNG" alt=""></a>
        <a href=""><img src="/img/t3.PNG" alt=""></a>
        <a href=""><img src="/img/t4.PNG" alt=""></a>
        <a href=""><img src="/img/t5.PNG" alt=""></a>
        <a href=""><img src="/img/t6.PNG" alt=""></a>                  
      </div>
      
      <h1 id="tvShows">TV Shows</h1>
      <div class="box">
        <a href=""><img src="/img/tv1.PNG" alt=""></a>
        <a href=""><img src="/img/tv2.PNG" alt=""></a>
        <a href=""><img src="/img/tv3.PNG" alt=""></a>
        <a href=""><img src="/img/tv4.PNG" alt=""></a>
        <a href=""><img src="/img/tv5.PNG" alt=""></a>
        <a href=""><img src="/img/tv6.PNG" alt=""></a>

        <a href=""><img src="/img/tv7.PNG" alt=""></a>
        <a href=""><img src="/img/tv8.PNG" alt=""></a>
        <a href=""><img src="/img/tv9.PNG" alt=""></a>
        <a href=""><img src="/img/tv10.PNG" alt=""></a>
        <a href=""><img src="/img/tv11.PNG" alt=""></a>
        <a href=""><img src="/img/tv12.PNG" alt=""></a>              
      </div>
      

      <h1 id="movies">Blockbuster Action & Adventure</h1>
      <div class="box">
        <a href=""><img src="/img/m1.PNG" alt=""></a>
        <a href=""><img src="/img/m2.PNG" alt=""></a>
        <a href=""><img src="/img/m3.PNG" alt=""></a>
        <a href=""><img src="/img/m4.PNG" alt=""></a>
        <a href=""><img src="/img/m5.PNG" alt=""></a>
        <a href=""><img src="/img/m6.PNG" alt=""></a>                
      </div>

      <h1 id="originals">Netflix Originals</h1>
      <div class="box">
        <a href=""><img src="/img/o1.PNG" alt=""></a>
        <a href=""><img src="/img/o2.PNG" alt=""></a>
        <a href=""><img src="/img/o3.PNG" alt=""></a>
        <a href=""><img src="/img/o4.PNG" alt=""></a>
        <a href=""><img src="/img/o5.PNG" alt=""></a>
        <a href=""><img src="/img/o6.PNG" alt=""></a>                
      </div>

      <h1 id="recentlyAdded">Recently Added</h1>
      <div class="box">
        <a href=""><img src="/img/r1.PNG" alt=""></a>
        <a href=""><img src="/img/r2.PNG" alt=""></a>
        <a href=""><img src="/img/r3.PNG" alt=""></a>
        <a href=""><img src="/img/r4.PNG" alt=""></a>
        <a href=""><img src="/img/r5.PNG" alt=""></a>
        <a href=""><img src="/img/r6.PNG" alt=""></a>                
      </div>
    </section>
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Carlos Avila &copy 2018</p>
    </footer>
  </div>
</body>
</html>