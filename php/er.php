<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Sunnydale High School</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
<style type="text/css">
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
    .col-md-6{
        text-align: center;
        background-color: #A54686;

    }
    #here,#there {
        font-size: 17px;
        color: #ffffff;
        margin-bottom: 12px;
    }
    .first{
        border-right: 2px white solid;
    }
    a{
        color: #ffffff;

    }
    .head{
        text-align: center;
        color: #ffffff;
        background-color: #A54686;

    }
    #announce{
        border:1.5px solid black;
        margin-top: 25px;
    }
    #welcome{
        margin-top: 25px;
    }
    body {
      margin: 0px;
    padding: 0px;
    background-color:#FFFFFF;
    font-family: 'Open Sans', sans-serif;
    font-weight:100;
      text-align: left;
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    
}
 
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
    
.image{
    text-align: center;
    color: #ffffff;

}
.imj{
    background-color: #A54686;
    margin-top: 10px;
    margin-bottom: 10px;
}

#div2{
    display: none;
}

iframe{
    float: right;

}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
</style>


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

           <li><a href="about.php">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
           
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
                <li><a href="admin.php">As Admin</a></li>
            </ul>
            </li>
     
          </ul>
        </div>
    </div>

</nav>



<div class="container-fluid">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <img src="images/slider1.jpg" alt="Sunnydale" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/slider2.jpg" alt="Sunnydale" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/slider3.jpg" alt="Sunnydale" style="width:100%;">
      </div>
       <div class="item">
        <img src="images/slider4.jpg" alt="Sunnydale" style="width:100%;">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
            
<div class="container-fluid">
    <div class="row">
  <div class="col-md-6 first">
      <h2 id="here"><a href="#welcome"> Welcome to Sunnydale</a></h2>
  </div>
  <div class="col-md-6">
      <h2 id="there"><a href="#announce"> Announcement</a></h2>
  </div>

</div>
    
</div>


<div class="container " id="welcome">
<h2>Welcome to Sunnydale</h2>
<div style="font-size: 16px">
<p >Sunnydale was established in 2006 by Mrs. Yasmeen Murshed. It was founded with a mission to provide a balanced and well-rounded education for all our students, using English as the primary medium of instruction but placing equal emphasis on Bangla. Sunnydale's mission is to build curious, knowledgeable and caring young individuals, who will be equipped to tackle head-on the challenges of our modern-day "global village". They will aspire to become responsible citizens, who will embrace and respect people from other cultures and walks of life.

Sunnydale has built a reputation as a pioneer in education in Bangladesh being one of the first local private schools to...
    <ul>
        <li>offer English-medium instruction</li>
        <li>provide science labs for secondary school students</li>
        <li>forge international connections through sports and trips abroad</li>
        <li>develop a custom-built campus with numerous facilities, including auditoriums, a swimming pool and numerous hard courts</li>
        <li>hire foreign experts to develop curriculum</li>
        <li>provide mandatory, international-standard training for teachers and management</li>
        <li>introduce sophisticated technology to manage data and information systems</li>
        <li>launch an internship program</li>
        <li>introduce multimedia technology in classrooms</li>
    </ul>
    
All these firsts have been achieved through the vision, hard work, passion and dedication of the faculty and management of Sunnydale.</p>
</div>
    
</div>

<div class="container " id="announce">
    <h2 class="head">Announcement</h2>
    <div style="font-size: 14px">
    <p><strong>November 21:</strong>7 students received Outstanding Cambridge Learner Awards for their outstanding achievements in 9 subjects in the O, AS & A Level Examination of May/June 2017. </p>
    <p><strong>November 23:</strong>11 students from Senior campus, Mirpur received awards in "Shagoto" and "Shuvechcha" categories at the Book Reading Competition 2018 organized by Biswa Shahittya Kendra.  </p>
    <p><strong>December 30:</strong>A team of students from Senior campus Uttara achieved several awards in the Dhaka Summit Model United Nations organized by Lighthouse Imperium Foundation. </p>
    </div>
</div>


<div class="imj">
    <h2 class="image">Our Campus</h2>
</div>
 <div class="container-fluid">



    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="images/c1.jpg">
        </div>
      </div>
      
      
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="images/c2.jpg">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="images/c3.jpg">
        </div>
      </div>
    
  </div>
</div>








<div  class="footer clearfix" id="contact"style="background-color: #363A3D ; color: #ffffff; font-size: 10px; padding:10px;margin-top: 5px">
 
        <h4>Central Office:</h4>

        <iframe src="http://free.timeanddate.com/clock/i636kyu3/n73/tlbd43/fn11/tt0/tw0/tm1/ts1/tb4" frameborder="0" width="111" height="40"></iframe>
        
            <p>Ascent Group Tele: 8860147,8860132,8819500,</p>
            <p>8815222,8856019-20 & 9887277 </p>
            <p>Fax: (+88 02) 8813141 Email: info@scholasticabd.com</p>


<div align="center"><a href="http://www.simplehitcounter.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=2337051&f=16711680&b=0" border="0" height="18" width="83" alt="web counter"></a><br><a href="http://www.simplehitcounter.com" target="_blank" style="text-decoration:none;">Total Visitor</a></div>


            <p>Contact us</p>
        
    
       
            <p><strong>Associate School of:</strong>  University of Cambridge</p>
            <p><strong>Member of:</strong>            Dhaka International Schools Association (DISA)</p>
                                  <p>Bangladesh Private English Medium Schools Forum </p>

        
  






</div>

<div id="googleMap" style="width:100%;height:400px;"></div>





<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>




<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

t
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(23.810332,90.412518),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCbtaiLOCcOrxcQl92Aq76abGjV0lw40Sg &callback=myMap"></script>


<script type="text/javascript" src="jquery.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
