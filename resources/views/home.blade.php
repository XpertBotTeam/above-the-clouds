@extends('fix.main')

@section ('titlee','Home')
    @section('content')
    <!DOCTYPE html>
<html>
  <head>
    <title>Slideshow Images</title>
    <style>
      * {
        box-sizing: border-box
      }
      body {
        font-family: Verdana, sans-serif;
        margin: 0
      }
      .mySlides {
        display: none
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 1000%;
        position: relative;
        margin: 0;
      }
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 20s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      /* Caption text */
      .quote {
        color: #ffffff;
        font-size: 30px;
        padding: 8px 12px;
        position: absolute;
        bottom: 600px;
        width: 100%;

      }
      .text {
        color: #ffffff;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color: #ffffff;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 20s ease;
      }
      .active,
      .dot:hover {
        background-color: #111111;
      }
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration:2s;
        animation-name: fade;
        animation-duration: 3s;
      }
      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 1000px) {
        .prev,
        .next,
        .text {
          font-size: 11px
        }
      }
    </style>
  </head>
  <body>


    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 6</div>
        <img src="images/bali.png"
        width="100%" height="80%">
        <div class="text">bali</div>
          <div class="quote">
     <!--   <h1>If not now , When?</h1>-->
    </div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 /6</div>
        <img src="images/jbeil.png"
        width="100%" height="80%">
        <div class="text">lebanon,jbeil old souk</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3/ 6</div>
        <img src="images/tahiti.png"
        width="100%" height="80%">
        <div class="text">tahiti</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">4 / 6</div>
        <img src="images/one.png"
        width="100%" height="80%">
        <div class="text"> Italy , venice</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">5 / 6</div>
        <img src="images/three.png"
        width="100%" height="80%">
        <div class="text"> czech republic</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">6 / 6</div>
        <img src="images/greece.png"
        width="100%" height="80%">
        <div class="text"> greece ,santorini</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>
    <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 8 seconds
      }
    </script>
  </body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 15%;
  padding: 10 8px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 10px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 700px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 50px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 70px;
  text-align: center;
  background-color: #f1f1f1;

}
img {
  border-radius: 5px 5px 0 0;
}

</style>
</head>
<body>

<h2>Popular places to visit </h2>


<div class="row">
  <div class="column">
    <div class="card">

        <img src="images/tahiti.png" style="width: 100%" >
         <p> tahiti</p>
    </div>
  </div>



  <div class="column">
    <div class="card">
        <img src="images/bali.png" style="width: 100%" >
        <p> bali</p>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>bali</h3>
      <p>Bali’s beauty goes way deeper than its beautiful appearances.
         The island is also home to many traditional cultural traditions
         that are still practiced. The Balinese hold many ceremonies
         and celebrations throughout the year,
          lots of which can be enjoyed by curious tourists,
           from the Omed-Omedan kissing festival to the monster parade
            before the day of silence (Nyepi). Tourists can also enjoy Bali’s
             culture through music, dance and architecture.</p>
    </div>
  </div>
  <div class="column">
    <div class="card">
        <img src="images/jbeil.png" style="width: 100%" >
        <p> jbeil</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img src="images/greece.png" style="width: 100%" >
        <p> greece</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img src="images/one.png" style="width: 100%" >
        <p> venice</p>
    </div>
  </div>


</div>

</body>
</html>

</body>

</html>
@endsection
