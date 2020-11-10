<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Gas Booking System</title>
    <link rel="icon" href="image/si.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="style/bootstrap.css">
    
<script src="https://use.fontawesome.com/80bfde5610.js"></script>

</head>
<body>
   <style>

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

        .parallax {
            /* The image used */
            background-image: url("image/bg2.jpg");

            /* Set a specific height */
            min-height: 500px; 

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
     
        .abc{
            height: 1000px;
            width: 100%;
            background-color: black;
            margin-top: -70px;
        }

        a{
            font-size: 20px;
        }

        li:hover{
           color: black;
           padding: 5px;
        }

        .center {
            margin: 0;
            position: absolute;
            top: 30%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
    <nav class="navbar fixed-top navbar-expand lg navbar-dark ">
        <a href="index.php" class="navbar-brand nav"><link rel="icon" src="image/logo.jpg" alt=""></a>
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item"><a href="" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="admin/login.php" target="_blank" class="nav-link text-light">Admin Login</a></li>
            <li class="nav-item"><a href="user/login.php" target="_blank" class="nav-link text-light">User login</a></li>
        </ul>
    </nav>
    <div class="abc ">
        <div class=" container-fluid  h-100 w-100  parallax" style="background-color:rgba(0, 0, 0, 0.62);  padding-top:230px;;">
            <div class="card col-lg-2 mx-auto p-0 col-sm-3 col-md-2 center" style="background-color:rgba(0, 0, 0, 0);">
                <a href="" class="btn btn-outline-light btn-block py-3" style="font-size: 30px;">Book Now</a>
            </div>
        </div>
   </div>

      <!-- Site footer -->
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About Us</h6>
            <p class="text-justify">"OGBS” is a 100% subsidiary of one of the World’s Leading LPG Company SHV Energy N.V., a Dutch Multinational Company. OGBS operates in India under the brand name LPG Gas vitran kendra. We are the first and only private LPG player with pan India presence, having earned the reputation of being a reliable provider of efficient energy solutions. From our inception in 1996 until now, we have transformed the Indian LPG sector and journeyed ahead to become a leading LPG player across customer segments including Industrial, Commercial, Domestic and Auto LPG.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Agencies</h6>
            <ul class="footer-links">
              <li><a href="">HP</a></li>
              <li><a href="">Reliance</a></li>
              <li><a href="">Indane</a></li>
              <li><a href="">Adani</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="">About Us</a></li>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Contribute</a></li>
              <li><a href="">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">OGBS</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

</body>
</html>