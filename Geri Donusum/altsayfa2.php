<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
     <script src="js/jquery-3.6.0.min.js" ></script> 
     <script type="text/javascript" src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js" ></script>
     <link rel="stylesheet" type="text/css" href="css/stillerim.css">
     <style>
        	.card {
   				 min-height: 150px;
				}
				.card1 {
   				 min-height: 100px;
				}
        </style>
</head>
<body>
<div class="container">
	<div class="row mt-3">             
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand fw-bold" href="#">KURT METAL</a>
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
                                  <li><a class="dropdown-item" href="#">Temiz Kağıt</a>
                                  </li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Kirli Kağıt</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  KROM
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Demir</a>
                                  </li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Sarı Demir</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Bakır</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Alüminyum</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled"></a>
                              </li>
                            </ul>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Aranacak metin" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Ara</button>
                            </form>
                          </div>
                        </div>
                      </nav>
        </div>
     </div>
	<div class="row mt-2">
        <?php
         $db=new mysqli("localhost","root","","webproje1");
         mysqli_set_charset($db,"utf8");
         
         $sorgu="select * from altSayfa2";
         
         $sonuc=$db->query($sorgu);
         $kayitSayisi=$sonuc->num_rows;
         for($i=0; $i<$kayitSayisi; $i++) {
             $kayit=$sonuc->fetch_assoc(); 
        
		echo '<div class="col-6 card1">';
			echo '<div class="card mb-3" style="max-width: 540px;">';
			  echo '<div class="row g-0">';
			    echo '<div class="col-md-4">';
			        echo   '<img src="'.$kayit["cardResim"].'" class="img-fluid " alt="...">';
			     echo '</div>';
			         echo '<div class="col-md-8">';
			             echo '<div class="card-body">';
			            echo '<h5 class="card-title">'.$kayit["cardBaslik"].'</h5>';
			            echo '<p class="card-text">';
				        echo	''.$kayit["cardAciklama"].' </p>';
			          echo '<p class="card-text"><small class="text-muted">'.$kayit["cardFiyat"].'</small></p>';
			            echo '</div>';
			         echo '</div>';
			        echo '</div>';
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
</body>
</html>