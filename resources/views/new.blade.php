<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Gothic+A1|Kaushan+Script|Libre+Baskerville|Lobster');
.body{
  font-family: 'Gothic A1', sans-serif;
  font-size:16px;
  }
  p{
  color:#6c6c6f;
  font-size:1em;
  }
  h1,h2,h3,h4,h5,h6{color:#323233;text-transform:uppercase;}
.navbar-brand  span{
  color: #fed136;
  font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
  color: #fff;
  font-size:25px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
  font-weight:700;
  letter-spacing:0.1em;
}

.navbar-nav .nav-item .nav-link{
  padding: 1.1em 1em!important;
  font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:#fed136;}
.navbar-expand-md .navbar-nav .dropdown-menu{
  border-top:3px solid #fed136;
}
.dropdown-item:hover{background-color:#fed136;color:#fff;}
nav{-webkit-transition: padding-top .3s,padding-bottom .3s;
    -moz-transition: padding-top .3s,padding-bottom .3s;
    transition: padding-top .3s,padding-bottom .3s;
    border: none;
  }
  
 .shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
}
.banner{
  background-image:url('http://www.hd-freewallpapers.com/latest-wallpapers/abstract-website-backgrounds.jpg');
  text-align: center;
    color: #fff;
   
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.banner-text{
  padding:200px 0 150px 0;
}
.banner-heading{
  font-family: 'Lobster', cursive;
  font-size: 75px;
    font-weight: 700;
    line-height: 100px;
    margin-bottom: 30px;
  color:#fff;
}
.banner-sub-heading{
  font-family: 'Libre Baskerville', serif;
  font-size: 30px;
    font-weight: 300;
    line-height: 30px;
    margin-bottom: 50px;
  color:#fff;
}

.btn-banner{
  padding:5px 20px;
  border-radius:10px;
  font-weight:700;
  line-height:1.5;
  text-align:center;
  color:#fff;
  text-transform:uppercase;
}
.text-intro{
  width:90%;
  margin:auto;
  text-align:center;
  padding-top:30px;
}


/* mobile view */
@media (max-width:500px)
{
  .navbar-nav{
    background-color:#000;
    border-top:3px solid #fed136;
    color:#fff;
    z-index:1;
    margin-top:5px;
    }
  .navbar-nav .nav-item .nav-link{
  padding: 0.7em 1em!important;
  font-size: 100%;
    font-weight: 500;
    }
  .banner-text{
  padding:150px 0 150px 0;
}
.banner-heading{
  font-size: 30px;
    line-height: 30px;
    margin-bottom: 20px;
}
.banner-sub-heading{
  font-size: 10px;
    font-weight: 200;
    line-height: 10px;
    margin-bottom: 40px;
}

}

@media (max-width:768px){
  .banner-text{
  padding:150px 0 150px 0;
}
  .banner-sub-heading{
  font-size: 23px;
    font-weight: 200;
    line-height: 23px;
    margin-bottom: 40px;
}
}
 

</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
  <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span>Logo</span> Here</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> 
     <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    </ul>
  </div>
  </div>
</nav>

<div class="banner">
  <div class="container">
  <div class="banner-text">
  <div class="banner-heading">
  Glad to see you here !
  </div>
  <div class="banner-sub-heading">
  Here goes the secondary heading on hero banner
  </div>
  <button type="button" class="btn btn-warning text-dark btn-banner">Get started</button>
  </div>
  </div>
</div>
<section id="about">
<div class="container">
  <div class="text-intro">
  <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
  </div>
</div>
</section>

<script type="text/javascript">
  
  $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 86){
      $("#banner").addClass("shrink");
    }
    else
    {
      $("#banner").removeClass("shrink");
    }
  });
  
</script>