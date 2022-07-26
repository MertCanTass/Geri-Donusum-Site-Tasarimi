<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/jquery-3.6.0.min.js" ></script> 
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <link rel="stylesheet" type="text/css" href="css/stillerim.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <style>
        	.card {
   				 min-height: 200px;
				}
				.card1 {
   				 min-height: 100px;
				}
        </style>
    </head>
</head>
<body>
<div class="container">
	<div class="row">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">KURT METAL</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">PLASTİK</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">NAYLON</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">AKÜ</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">MOTOR</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            BEYAZ KAĞIT
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="#">Temiz Kağıt</a></li>
		            <li><a class="dropdown-item" href="#">Kirli Kağıt</a></li>
		          </ul>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            KROM
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="#">Demir</a></li>
		            <li><a class="dropdown-item" href="#">Sarı Demir</a></li>
		            <li><a class="dropdown-item" href="#">Bakır</a></li>
		            <li><a class="dropdown-item" href="#">Alüminyum</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Aranacak Metin" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Ara</button>
		      </form>
		    </div>
		  </div>
		</nav>
	</div>
	<div class="row p-2">
		<img src="resimler/burcukurtbanner.jpg" class="img-fluid">
	</div>
	<div class="row mt-2 card-footer  card-body card-header">
    <?php
                $db=new mysqli("localhost","root","","webproje1");
                mysqli_set_charset($db,"utf8");
                
                $sorgu="SELECT * FROM altsayfa3 WHERE cardsId BETWEEN 1 and 19";
                
                $sonuc=$db->query($sorgu);
                $kayitSayisi=$sonuc->num_rows;
                for($i=0; $i<$kayitSayisi; $i++) {
                    $kayit=$sonuc->fetch_assoc();
                    echo '<div class="col-6 align-self-center">';
                    echo '<div class="card mb-3" style="max-width: 1080px;">';
                      echo '<div class="row ">';
                        echo '<div class="col-md-12">';
                          echo '<img src="'.$kayit["resim"].'"class="img-fluid rounded-start " alt="...">';
                        echo '</div>';
                        echo '<div class="col-md-12">';
                          echo '<div class="card-body text-center">';
                            echo '<p class="card-text card">'.$kayit["cardAcıklama"].'</p>';
                          echo '</div>';
                       echo '</div>';
                     echo '</div>';
                   echo '</div>';
               echo '</div>';
                }
                ?>
		
		
	</div>

		<div class="row text-center"><h3>DÖNÜŞTÜRÜLMÜŞ ÜRÜNLER</h3></div>
		<div class="row mt-2">
        <?php
						$db=new mysqli("localhost","root","","webproje1");
						mysqli_set_charset($db,"utf8");
						
						$sorgu="SELECT * FROM altsayfa3 WHERE cardsId BETWEEN 20 and 22; ";
						
						$sonuc=$db->query($sorgu);
						$kayitSayisi=$sonuc->num_rows;
						for($i=0; $i<$kayitSayisi; $i++) {
							$kayit=$sonuc->fetch_assoc();
							echo '<div class="col-4">';
								echo '<div class="card" style="width: 18rem;">';
								echo '<img src="'.$kayit["resim"].'"class="card-img-top" alt="...">';
								echo '<div class="card-body">';
									echo '<h5 class="card-title">'.$kayit["cardBaslik"].'</h5>';
									echo '<p class="card-text"> '.$kayit["cardAcıklama"].' </p>';
														
									
									echo '<a href="#" class="btn btn-primary ">satın al</a>';
								echo ' </div>';
								echo '</div>';
							echo '</div>';
					}
            ?>
			
		</div>
		<div class="row mt-3 te xt-center border border-dark"> 
                <div class="col-12 bg-light">
                <div class="row ">
                  <div class="col-4 mt-2">
                    <h5>ADRES</h5>
                    <p>Yakuplu Mermerciler Sanayi Sitesi 228.sokak No:19 Beylikdüzü/İstanbul </p>
                    <h5>Sosyal Medya</h5>
      
                  </div>
                   <div class="col-4 mt-2">
                    <h5>İLETİŞİM</h5>
                    <p>05332018675 AZİZ KURT</p>
                    <p>05373242905 ETHEM KURT</p>
                    <p>05376119350 ALİ KURT</p>
                  </div>
                   <div class="col-4 mt-2">
                    <h5>EPOSTA</h5>
                    <p>aziz1@gmail.com</p>
                  </div>
                </div>
            </div>
        </div>
	</div>
	
</div>
</body>
</html>