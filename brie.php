<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
?>

<!-- Created by Brie Yoe
  -- Contributers:
  -- Charles Yost-->

<!doctype html>
  <html>
  <head>
      <title>Template Ace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <style type="text/css">
      
      html { width: 100%; height:100%; overflow:hidden; }
body {
	width: 100%;
	height:100%;
	font-family: 'Roboto', sans-serif;
	background: #092756;
	background-image: url(bckgrnd.jpg);
    background-size: cover;
    background-position: 50% 50%
}
#top {
	background: url(bckgrndtop.jpg) center; 
	background-size: 100% 100%;
	width:100%;
	max-width: 710px;
	margin:0 auto;
	padding: 10% 5%;
}
		
a{
 text-decoration:none;
 color:#cc0000;
}
a.button,div.container{
 float:none;
}
      .button:hover{
           background:#606060;
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                fill: #eeeeee;
                cursor:pointer;
      }
a.button{
 background-color:#0D3036;
 border-radius:2px;
 color:#fff;
 margin-right:10px;
 padding:10px 10px 10px 10px;
}
      div.container{
 width:100%;
 clear:both;
}
	  
  </style>
    
    
  <body>
      <?php include_once("analyticstracking.php") ?>
      <div id="top"></div>
  <div align="center" class="container">	 <br /><br /><br /><br /><br /><br /> 
<a href="https://templateace.xyz/nt.php" class="button">Official Note Template</a>
     <a href="https://templateace.xyz/final.php" class="button">Final Incident</a>
     <a href="https://templateace.xyz/mm.php" class="button">Mentor Machine 2.0</a>
    <a href="https://templateace.xyz/history/home/" class="button">Note Template; A History [Blog]</a>
</div>
	  
	
    
  </body>
  </html>

