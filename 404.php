<html>
<head>
    <meta name="description" content="IIMnet 404" />
    <meta property="og:description" content="IIMnet 404" />
    <meta property="og:title" content="404 | IIMnet" />
    <title>404 | IIMnet</title>
   <?php include 'includes/snippets/meta-data.php'; ?>
<style>
<?php  include 'includes/css/bootstrap.min.css' ?>
<?php  include 'includes/css/fontawesome.css' ?>
<?php  include 'includes/css/montserrat.css' ?>
    <?php  include 'includes/css/color-change-hv8-up.css' ?>
    <?php  include 'includes/css/animate.css' ?>
    <?php  include 'includes/css/header-footer-updated.css' ?>
    <?php  include 'includes/css/owl.carousel.min.css' ?>
    <?php  include 'includes/css/owl.theme.default.min.css' ?>


body {
  background: #f7fafe;
  }

.top {
  margin-top: 30px;
}

.container {
  margin: 0 auto;
  position: relative;
  width: 250px;
  height: 250px;
  
}

.ghost {
  width: 50%;
  height: 53%;
  left: 25%;
  top: 10%;
  position: absolute;
  border-radius: 50% 50% 0 0;
  /* background: #fff;
  border: 1px solid #fff; */
  border-bottom: none;
  animation: float 2s ease-out infinite;
}

.ghost-copy {
  width: 50%;
  height: 53%;
  left: 25%;
  top: 10%;
  position: absolute;
  border-radius: 50% 50% 0 0;
  background: #1b48b2;
  border: 1px solid #1b48b2;
  border-bottom: none;
  animation: float 2s ease-out infinite;
  z-index: 0;
}

.face {
  position: absolute;
  width: 100%;
  height: 60%;
  top: 20%;
}

.eye, .eye-right {
  position: absolute;
  background: #fff;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  top: 40%;
}

.eye {
  left: 25%;
}

.eye-right {
  right: 25%;
}

.mouth {
  position: absolute;
  top: 50%;
  left: 45%;
  width: 10px;
  height: 10px;
  border: 3px solid;
  border-radius: 50%;
  border-color: transparent #fff #fff transparent;
  transform: rotate(45deg);
}

.one, .two, .three, .four {
  position: absolute;
  background: #3feb98;
  top: 85%;
  width: 25%;
  height: 23%;
  border: 1px solid #3feb98;
  z-index: 0;
}

.one {
  border-radius: 0 0 100% 30%;
  left: -1px;
}

.two {
  left: 23%;
  border-radius: 0 0 50% 50%;
}

.three {
  left: 50%;
  border-radius: 0 0 50% 50%;
}

.four {
  left: 74.5%;
  border-radius: 0 0 30% 100%;
}

.shadow {
  position: absolute;
  width: 30%;
  height: 7%;
  background: #BFC0C0;
  left: 35%;
  top: 80%;
  border-radius: 50%;
  animation: scale 2s infinite;
}

@keyframes scale {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes float {
  50% {
    transform: translateY(15px);
  }
}
.bottom {
  margin-top: 10px;
}

/*text styling*/
h1 {
  
  color: #1b48b2;
  text-align: center;
  font-size: 9em;
  margin: 0;
  /* text-shadow: -1px 0 #BFC0C0, 0 1px #BFC0C0, 1px 0 #BFC0C0, 0 -1px #BFC0C0; */
}

h3 {
  
  font-size: 2em;
  /*text-transform: uppercase;*/
  text-align: center;
  color: #1b48b2;
  margin-top: -20px;
  font-weight: 600;
}

p {
  text-align: center;
  color: #1b48b2;
  font-size: 18px;
  margin-top: -20px;
font-weight:600;
  /* text-transform: uppercase; */
}

.search {
  text-align: center;
}

.buttons {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -14px;
}

/*search style*/
.search-bar {
  border: 1px solid #1b48b2;
  padding: 5px;
  height: 20px;
  margin-left: -30px;
  width: 200px;
  outline: none;
}
.search-bar:focus {
  border: 1px solid #1b48b2;
}

/* .search-btn {
  position: absolute;
  width: 30px;
  height: 32px;
  border: 1px solid #1b48b2;
  background: #1b48b2;
  text-align: center;
  color: #fff;
  cursor: pointer;
  font-size: 1em;
  outline: none;
}
.search-btn:hover {
  background: #1b48b2;
  border: 1px solid #1b48b2;
  color: #BFC0C0;
  transition: all 0.2s ease;
} */

.btn {
  background: #1b48b2;
  padding: 15px 20px;
  margin: 5px;
  color: #fff;
  /* text-transform: uppercase; */
  font-size: 14px;
  border-radius:5px;
  border: 1px solid #1b48b2;
  width:20em;
  font-weight:600;

}
.btn:hover {
  background: #1b48b2;
  transition: all 0.4s ease-out;
color:#fff;
}
.top img{ display:none;}

@media screen and(max-width: 768px)
{.top img{margin:3em auto;width:30%;display:block !important} .top{margin:20em 0 auto !important;}
}
</style>
</head>

<body>
<div id="background"></div>
<div class="top">
        <center><a href="/" aria-label="Home Page">
<h1 class="logo-head">IIMnet <span class="fs-16">(Beta)</span></h1>
        </a></center>
  <h1>404</h1>
  <h3>Page not found</h3>
</div>
<div class="container">
  <div class="ghost-copy">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>
  <div class="ghost">
    <div class="face">
      <div class="eye"></div>
      <div class="eye-right"></div>
      <div class="mouth"></div>
    </div>
  </div>
  <div class="shadow"></div>
</div>
<div class="bottom">
  <p>Oops! Looks like you have lost somewhere..</p>
<p>Go Big <strike> or</strike> and </p>
  <!-- <form class="search">
    <input type="text" class="search-bar" placeholder="Search">
    <button type="submit" class="search-btn">
      <i class="fa fa-search"></i>
    </button>
  </form> -->
  <div class="buttons">
    <!-- <button class="btn">Back</button> --> 
    <a href="https://iimnet.com"><button class="btn">Go Home ➞</button></a>
  </div>
    
</div>


</body></html>