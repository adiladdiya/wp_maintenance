<?php
/**
 * Afficher une page de maintenance pour le blogue reseauiq.
 *
 * @package   ng-maintenance-mode
 * @copyright Copyright (c) 2015, Adil Addiya
 * @license   GPL2+
 *
 */

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <title>Site web en maintenance </title>
  <style>

  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
  }
.main{

width: 100%;
float: left;
box-sizing: border-box;
}

.main .top{
background-image: url(https://s3.amazonaws.com/riq-website/maintenance/blogue/banner.png);
background-repeat: no-repeat;
background-size: cover;
background-position: left bottom;;
width: 100%;
float: left;
box-sizing: border-box;
}

.logo{
width: 450px;
margin: 0px 0px 0px 5%;
}

.logo img{
width: 100%;
}

.text{
width: 80%;
  margin: 10% 0 0 10%;
float: left;
-webkit-transition: all 320ms;
-moz-transition: all 320ms;
transition: all 320ms;
}

.text img{
width: 100%;
max-width: 815px;
}

h1{
  font-size: 36px;
  font-weight: 300;
  line-height: 36px;
  margin-top: 10px;
}
p{
  font-size: 24px;
  font-weight: 300;
  line-height: 36px;
  margin-top: 10px;
}

p.small_texte{
  font-size: 14px;
  float: left;
  line-height: 18px;
  font-weight: 500;
  width: 100%;
}


a{
  color: #F15B22;
  -webkit-transition: all 320ms;
  -moz-transition: all 320ms;
  transition: all 320ms;
}

a:hover{
  text-decoration: none;
  color: #4d4d55;
}



.pop_video{
background-color: rgba(0, 0, 0, 0.5);
position:fixed;
top:0px;
left:0px;
width:100%;
height:100%;
z-index: 1000;
opacity : 0;
visibility : hidden;
}

.pop_video:target{
display:block;
opacity : 1;
visibility : visible;
}

.pop_video_content {
   background-color: #fff;
   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);
   width: 800px;
   margin-left: -400px;
   left: 50%;
   top: 50px;
   position: relative;
    height: calc(100% - 100px);
}

.pop_video_content iframe {
   width: 100% ;
   height: 100% ;
   margin-top: -30px;
   margin-bottom: -5px;
}

.pop_video_close {
   height: 40px;
   width: 40px;
   display: block;
   background-color: #F15B22;
   background-image: URL(https://riq-website.s3.amazonaws.com/website/images/misc/btnClose.png);
   background-repeat: no-repeat;
   background-position: center center;
   position: relative;
   float: right;
   margin: -20px -20px 10px 0;
   font-size: 0;
   z-index: 1001;
   overflow: auto;
   color: #fff;
   padding: 5px 0 0 10px;
   box-sizing: border-box;
   border-radius: 20px;
}


.pop_video_close:hover {
    color: #fff;
}


@media screen and (max-width: 640px) {
.pop_video_content{
width:100%;
margin-left : 0px;
   left: 0;
   top:50px;
}
.videoTexte{
width: calc(100% - 10px);
 margin-bottom: 20px;

}



  .main{
  width: 100%;
   }
   .logo{
   width: 240px;
   }
 .text{
   width: 85%;
   margin: 5% 0 0 5%;
   float: left;
  }

  h1{
    font-size: 30px;
    line-height: 32px;
  }

  p{
    font-size: 20px;
    line-height: 20px;
  }
  p.small_texte {
    margin-top: 20px;
}

}


  </style>
</head>

<body style="height: 100%;">
  <div class="main">
    <div class="top">
      <div class="logo">
      <img src="https://s3.amazonaws.com/riq-website/maintenance/blogue/logoBlog.png" alt="logo Réseau des ingénieurs du quéebec"></div>
</div>
<div class="text">
      <h1>Nous réalisons actuellement des travaux de maintenance pour améliorer le blogue.</h1>
      <p>Vous pouvez soumettre vos candidatures au concours <em> Inventer le monde de demain</em> jusqu’au 22 août en cliquant   <a href="#formconcours" class="link_cadre">ici</a>.
</p>
<img src="https://s3.amazonaws.com/riq-website/maintenance/blogue/IMDD_landingPage_V1a-2.jpg" alt="">

      <p class="small_texte">Au besoin, n’hésitez pas à nous contacter<br/>à <a href="mailto:info@reseauiq.qc.ca"> info@reseauiq.qc.ca</a> ou 514&nbsp;845-9664.</p>
</div>


<div class="pop_video" id="formconcours">
<div class="pop_video_content" id="pop_video_content"><a class="pop_video_close" href="#"><aa></aa></a><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.tfaforms.com/435861"></iframe></div>
</div>

  </div>

</body>
</html>
