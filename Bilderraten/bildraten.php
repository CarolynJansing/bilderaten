                                 
<!doctype html>
<html lang="en">
  
<head>
<style>



.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
	background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
	background-color:#f6f6f6;
}


body {
background-image: url("wp.jpg");
background-size: cover;}
.col{
	font-size: 18px;
	padding-top: .75rem;
	padding-bottom: .75rem;
	background-color: rgba(245,245,245,0.8);
	border: 1px solid rgba(86,61,124,.2);
}

</style>
<style type="text/css">
.mycss
{
text-shadow:0px 0px 3px rgba(235,235,235,1);font-weight:normal;color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:20px;text-align:center;font-family:comic sans, comic sans ms, cursive, verdana, arial, sans-serif;line-height:1;
}
</style>
<style> .aufgedeckt { background-image: url("image.jpg");
 background-attachment: fixed;
  background-position: center; 
  color: transparent;

} 
</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  </head>
  <body>

 <?php 
/* error_reporting(E_ALL);
ini_set('display_errors', 1);*/


//Standarwerte festlegen und show auslesen 
 if(isset($_COOKIE['liste']))
 {
 	$liste = unserialize($_COOKIE['liste']);
 	
 }
 else
 {
 	$liste = []; 
 }
//ist show gesetzt ?
if(isset($_GET['show']))
{       // Ja -> speichere show
	$show = $_GET["show"] ;
	//show der angeklickte liste hinzufügen
 	array_push ($liste,$show);
 	//in einem cookie speichern
 	setcookie("liste", serialize($liste));
 	// gucken wieviele angeklickt wurden
 	$versuche= array_search($show,$liste);
 	
   }
else
{       // Nein-> Werte auf Null
	$show = NULL;
	$versuche= 0;
	
}
session_start();

if(isset($_POST['count'])){
            	if(!($_SESSION['count'])){
                	$_SESSION['count'] = 1;
               
            	} 
         
            else{
                $count = $_SESSION['count'] + 1;
                $_SESSION['count'] = $count;   }
              if ($_SESSION['count']==5)
            {
            	setcookie("liste","",time()-3600);
             	session_destroy();
           	 echo('<meta http-equiv="refresh" content="0;url=gameover.php" />');
        	}
           
         
   }
        
       
//wurde schon was eingegeben ?
if ( isset($_POST['raten']))
{
	//JA -> eingabe speichern
 	$raten=$_POST['raten'];
 	// wurde das richtige eingegeben
 	if ($raten =="Katze")
 	{	//ja -> Cookie löschen
 		setcookie("liste","",time()-3600);
 		//gewinner seite öffnen
 		session_destroy();
 		echo('<meta http-equiv="refresh" content="0;url=win.php" />');
 		
 	}
 	else 
 	{      //nein-> 
 		echo "";
 	}
 }
else
{ //nein -> raten - Leer
	$raten="";
}

       	
?>
<h1 class="mycss" style="bold;font-size:35px;text-align:center;">
<?php 
// sind versuche unter 16 
if ($versuche>16 )
{
  //ja -> Cookie löschen
  setcookie("liste","",time()-3600);
  // verlierer seite öffnen
 echo('<meta http-equiv="refresh" content="0;url=gameover.php" />');
  
}
else
{
	//nein -> übrige Versuche anzeigen
	echo '<br>Versuche:', 16-$versuche,"";
}
?>
<br>
<br>
</h1>
<div class="container">  
	<?php $counter= 1; ?>                   
 	<?php for ($row=1 ;$row<=12;$row++) {?>
		<div class="row"> 
			<?php for ($col=1 ;$col<=12;$col++)
			{?>
 				<div class="col 				
 				<?php if(in_array($counter,$liste)) 
 					{ 
 					?>aufgedeckt<?php 
 					} ?>" >
				<a href="bildraten.php?show=<?php echo $counter?>
				"<?php if(in_array($counter,$liste))
				{?>style= color:transparent <?php
				 }?>  ><?php echo $counter ; ?></a>
				</div>
			<?php $counter=$counter+1; ?> 
		<?php }  ?>
		</div>
<?php }
 ?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
<form class="mycss" action="bildraten.php" method="POST" autocomplete="off">                                 
<body style="text-align:center;" > 


<label  for="raten"><br>Was ist auf dem bild ?
<br>
<br>
<input type="text" id="raten" name="raten"  value="<?php echo $raten; ?>"  >
<br/>
<br/> 
</label>

<br>
<button class="myButton" type="submit" name="count" value="Start counting"">abschicken</button>
<br/>
<br/>
<?php
if (isset ($_POST['raten']))
{ if ( $raten!="Katze"){
echo "Leider falsch!!<br>";?>
<br>
<?php
}}

 echo "Du darfst noch   ", 5-$_SESSION['count'] ,"  mal raten !"; ?>
</form>

</body>	

</html>
