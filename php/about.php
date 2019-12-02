<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #A54686;
    color: #fff;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

.container{
  margin-top: 100px;
  background-color: #0A1E36;
}

 .navbar-nav{
        padding-left: 70px;
    }
    .navbar{
        padding: 15px;
        font-size: 20px;
        
    }
    .navbar-brand{
        margin-bottom: 20px;
    }
    .nav{
        margin-top: 15px;
    }

 


* {
    box-sizing: border-box;
}

body {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.container1 {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.container1::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media all and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container1 {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container1::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}



</style>
</head>
<body>

       <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="er.php">
              <img src="images/sdl.jpg">
          </a>
        </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li ><a href="er.php" >Home <span class="sr-only">(current)</span></a></li>
            <li>
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academics <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="jsc_result.php">JSC Result</a></li>
                <li><a href="ssc_result.php">SSC Result</a></li>
                <li><a href="academic.php">Academic Calender</a></li>
              </ul>
            </li>
            <li><a href="administration.php">Administration</a></li>
            
            <li><a href="notice.php">Notice</a></li>
           
            <li><a href="er.php/#contact">Contact Us</a></li>
           
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
         
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
            <li><a href="student_sign_up.php">As Student</a></li>
                <li><a href="teacher_sign_up.php">As Teacher</a></li>
            </ul>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <i class="fa fa-sign-in" aria-hidden="true"></i>
</a>
            <ul class="dropdown-menu">
            <li><a href="student_login.php">As Student</a></li>
                <li><a href="teacher_login.php">As Teacher</a></li>
            </ul>
            </li>
     
          </ul>
        </div>
    </div>

</nav>

<div class="container">
<button class="accordion">Who We Are</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<button class="accordion">Our Mission</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<button class="accordion">Timeline</button>
<div class="panel">
  
<div class="container">
  <div class="timeline">
  <div class="container1 left">
    <div class="content">
      <h2>2006</h2>
      <p>Sunnydale was established in 2006 by Mrs. Yasmeen Murshed. It was founded with a mission to provide a balanced and well-rounded education for all our students, using English as the primary medium of instruction but placing equal emphasis on Bangla. Sunnydale's mission is to build curious, knowledgeable and caring young individuals, who will be equipped to tackle head-on the challenges of our modern-day "global village".</p>
    </div>
  </div>
  <div class="container1 right">
    <div class="content">
      <h2>2008</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container1 left">
    <div class="content">
      <h2>2010</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container1 right">
    <div class="content">
      <h2>2013</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container1 left">
    <div class="content">
      <h2>2015</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="container1 right">
    <div class="content">
      <h2>2017</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
</div>



</div>

</div>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


<script type="text/javascript" src="jquery.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
