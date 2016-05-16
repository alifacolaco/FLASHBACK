<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flashback :: Photo Gallery</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Bodo - Simple One Page Personal" name="description">
    <meta content="BdgPixel" name="author">
    <!--Fav-->
    <link href="<?=  base_url("images/favicon.ico");?>" rel="shortcut icon">
    
    <!--styles-->
    <link href="<?=  base_url("css/bootstrap.min.css");?>" rel="stylesheet">
    <link href="<?=  base_url("css/owl.carousel.css");?>" rel="stylesheet">
    <link href="<?=  base_url("css/owl.theme.css");?>" rel="stylesheet">
    <link href="<?=  base_url("css/magnific-popup.css");?>" rel="stylesheet">
    <link href="<?=  base_url("css/style.css");?>" rel="stylesheet">
    <link href="<?=  base_url("css/responsive.css");?>" rel="stylesheet">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
       <script type="text/javascript" src="<?=  base_url("js/html5shiv.min.js");?>"></script>
    <![endif]-->
	
	<style>
.form input, textarea {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 20px;
}

	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
   
}

li {
    float: left;
	width:20%;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.button {
margin-top:20px;
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 50%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.flot
{
float:left;
}
.number{
display:inline;
border: solid 1px blue;
width:40px;
height:38px;
border-radius:20px;
}

.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 30%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;

}

.activepg
{
background-color: #B0B0B0;
}
	</style>
  </head>
  <body>
    

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="flot"><a href="<?= site_url('Upload/home') ?>"><img alt="logo" style="width:300px" src="<?=  base_url("images/iicon.png");?>"></a></div>
		
		<div class="s-bar flot" style="margin-top:10px;margin-left:80px;">
	   <form id="fid" method="post" action="<?= site_url('AController/search') ?>">
               <input type="text" size="60" value=""  placeholder="Search Album/Image " name="albumname" class="pad">
		<input size="40" type="submit" value="Search" class="pad" />
           </form>
          
	</div>
	
	
	
	<div class="flot" style="margin-top:15px;margin-left:150px;text-transform: capitalize;font-weight:bolder;font-size:20px;"><?php echo $this->session->userdata['fname']; ?></div>
        <div><a href="<?= site_url('user/logout') ?>"><img src="<?=  base_url("images/logout.png");?>" style="width:40px;height:40px;float:right;margin-top:10px"></a></div>
        </div>
		 <div class="for-sticky1">
	  <ul>
	  <li class="activepg">Album Description<img alt="logo" style="height:40px;float:right" src="<?=  base_url("images/nextt.png");?>"></li>
	  <li>Upload Images<img alt="logo" style="height:40px;float:right" src="<?=  base_url("images/nextt.png");?>"></li>
	  <li>Additional Details<img alt="logo" style="height:40px;float:right" src="<?=  base_url("images/nextt.png");?>"></li>
	  <li>Select Template<img alt="logo" style="height:40px;float:right" src="<?=  base_url("images/nextt.png");?>"></li>
	  <li>Finish<img alt="logo" style="height:40px;float:right" src="<?=  base_url("images/nextt.png");?>"></li>
	  </ul>
	  </div>
        <!--/.LOGO END-->
      </div>
	  
	 
      
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
			<div style="width:100%; background-color:white; margin-top:130px;padding:40px;text-align:center;margin-bottom:130px;"><h1>CREATE NEW ALBUM</h1>
			<hr/>
			<form class="form" action="<?= site_url('Upload/albuminfo') ?>" method="post">
                            
			<input type="text" name="album_name"  placeholder="Album Name" value="<?php echo set_value('album_name'); ?>"></br>
                         <?php echo form_error('album_name'); ?>
			<textarea name="album_description"  placeholder="Album Description" rows="4"></textarea>
			
												 <button>Next</button>
			</form>
			</div>
			 
          </div>
        </section>
        <!--/.HOME END-->

        

    <script src="<?=  base_url("js/main.js");?>" type="text/javascript"></script>
  </body>
</html>