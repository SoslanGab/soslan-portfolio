<!DOCTYPE html>
<html lang="en">

  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
      <?php
      
      include 'menu-nav.php'
    
    
    
    ?>
    <div id="colorlib-page">
	<header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.php"><span class="logo-img" style="background-image: url(images/photo.jpg);"></span>Soslan Gabaraev</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>

      <section class="ftco-section">
	      <div class="container mt-5">
	      	<div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Cette page est un blog personnel où je publierai des récits variés sur ce qui se passe dans ma vie, tant sur le plan professionnel que personnel.</span>
            </div>
          </div>
	        <div class="row">
	          <div class="col-md-4 ftco-animate">
	            <div class="blog-entry">
	              <a href="" class="block-20" style="background-image: url('images/about/photo.jpg');">
	              </a>
	              <div class="text p-4 d-block">
	                <div class="meta mb-3">
	                  <div><a href="#">Juillet, 2023</a></div>
	                  <div><a href="#">POO</a></div>
	                </div>
	                <h3 class="heading text-center">Je me lance dans la programmation orientée objet. J'ai quelques difficultés à comprendre certaines notions, mais je m'en sors plutôt bien. J'ai hâte de partir en vacances en août ;)</h3>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 ftco-animate">
	            <div class="blog-entry" data-aos-delay="100">
	              <a href="" class="block-20" style="background-image: url('images/about/Framework-Symfony.png');">
	              </a>
	              <div class="text p-4">
	                <div class="meta mb-3">
	                  <div><a href="#">Septembre, 2023</a></div>
	                  <div><a href="#">Symfony</a></div>
	                </div>
	                <h3 class="heading text-center">Les vacances m'ont fait du bien. J'apprécie beaucoup le framework Symfony, il simplifie grandement la tâche, que ce soit en backend ou même en frontend, particulièrement avec l'utilisation d'EasyAdmin</h3>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 ftco-animate">
	            <div class="blog-entry" data-aos-delay="200">
	              <a href="" class="block-20" style="background-image: url('images/about/react.png');">
	              </a>
	              <div class="text p-4">
	                <div class="meta mb-3">
	                  <div><a href="#">Décembre, 2023</a></div>
	                  <div><a href="#">React</a></div>
	                </div>
	                <h3 class="heading text-center">Le moment que je redoutais le plus est arrivé : "React JS". Je ne suis pas un grand fan de JavaScript, pourtant React a réussi à changer mon point de vue. Je suis surpris par la puissance de ce framework et j'ai hâte de pouvoir l'utiliser dans des cas concrets en entreprise.</h3>
	              </div>
	            </div>
	          </div>

	          <div class="col-md-4 ftco-animate">
	            <div class="blog-entry" data-aos-delay="200">
	              <a href="" class="block-20" style="background-image: url('images/about/boxe-thai.jpg');">
	              </a>
	              <div class="text p-4">
	                <div class="meta mb-3">
	                  <div><a href="#">Octobre, 2023</a></div>
	                  <div><a href="#">Sport</a></div>
	                </div>
	                <h3 class="heading text-center">Récemment, j'ai découvert la lutte libre et le Muay Thai, et je suis ravi de la façon dont ces disciplines me permettent de décompresser après le travail. Passant la journée assis sur une chaise, il est essentiel pour moi de pratiquer ces sports pour maintenir ma forme physique et obtenir une nouvelle perspective sur la vie.</h3>
	              </div>
	            </div>
	          </div>
	        </div>
	        <!-- <div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div> -->
	      </div>
	    </section>
      
      <?php
	 	include 'footer.php'; 
	  ?>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>
<script>
		let pageTitle = "Portfolio Soslan";
        
		window.addEventListener("blur", function() {
			document.title = "Revenez svp  🥺🥺 ";
		});
		window.addEventListener("focus", function() {
			document.title = pageTitle;
		});
</script>

    
  </body>
</html>