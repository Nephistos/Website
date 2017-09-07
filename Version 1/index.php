<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Lecoffre Emilien | Automatismes, Informatique</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <div id="logo">
                        
                        <h1>Lecoffre Emilien</h1>    
                    </div>
                    <h2>Index</h2>
                </div>
                
                <nav>
                    <ul>
			
                        <li><a href="index.php">Index</a></li>
                        <li><a href="cv.php">Curriculum Vitae</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Retour sur mon expérience chez Renault Sandouville...
                    <a href="experience.php" class="bouton_rouge">Voir l'article <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>
                <article>
       
                <p>Je m'apelle <strong>Emilien Lecoffre</strong>, j'habite actuellelent au <strong>Havre</strong> en Seine-maritime (76).</p>

<P>Passionné par les automatismes et l'informatique, j'ai eu l'occasion de développer mes connaissances dans ces domaines au cours de mon parcours scolaire et de mes premières expériences professionnelles.</P>

<p>Après un bac scientifique option et spécialité sciences de l'ingénieur obtenu avec la mention bien, je me suis dirigé vers un diplôme universitaire et technologique génie électrique et informatique industrielle. Par ailleurs je prépare actuellement une licence professionnelle système automatisés et réseaux industriels en alternance <em>(Major de promotion)</em>.</p>

<p>Afin de terminer mon cursus scolaire j'aimerais intégrer un master en alternance dans les domaines de l'automatisme, du génie électrique et de l'informatique.</p>

<p>Durant mon parcours scolaire j'ai connu quelques expériences en entreprise qui m'ont permis de réaliser des projets d'automatisme et d'informatique complexes et de développer mes connaissances. Vous pouvez aussi consulter mon <strong>cv</strong>, ou bien mon profil <strong>Linkedin</strong>. N'hésitez pas à me contacter si vous avez une question sur mon profil.</p>

<p>J'aime les technologies du numérique, il est donc naturel pour moi de me tenir au courant de l'actualité ou d'apprendre de nouveaux concepts, notamment en programmation, grâce au très bon site OpenClassrooms.com !</p>

<p>Si vous avez des questions vous pouvez me contacter à emilien.lecoffre@gmail.com.</p>





                </article>
                <aside>
                    <h1>À propos de l'auteur</h1>
                    <img src="Moi.jpg" class="moi" alt="Photo"/>
                    <p> Lecoffre Emilien (20 ans)<br />
    		    	30 Rue Albert Levieux – 76 540<br />
		    	Sassetot-le-Mauconduit <br />
		        Mobile : 06 52 61 93 24 <br />
		        Email : emilien.lecoffre@gmail.com <br />
		        Permis B </p>
			<p>
			<a class="FB" href="https://www.facebook.com/emilienlecoffre2" alt="facebook">
			<img src="images/facebook.png" alt="Facebook" /></a>
			<a class="Twitter" href="https://twitter.com/Nephistos318" alt="Twitter">
			<img src="images/twitter.png" alt="Twitter" /></a>
			<a class="Linkedin" href="https://fr.linkedin.com/in/emilienlecoffre" alt="Linkedin">
			<img src="images/Linkedin.png" alt="Linkedin" /></a></p>
			
                </aside>
            </section>
            
            <footer>
	    <div id="conteneur">

		<div class="center_div2">
              © 2016 Lecoffre Emilien
		</div>

		<div class="center_div3">
		
			<a class="FB" href="https://www.facebook.com/emilienlecoffre2" alt="facebook">
			<img src="images/facebook.png" alt="Facebook" /></a>
			<a class="Twitter" href="https://twitter.com/Nephistos318" alt="Twitter">
			<img src="images/twitter.png" alt="Twitter" /></a>
			<a class="Linkedin" href="https://fr.linkedin.com/in/emilienlecoffre" alt="Linkedin">
			<img src="images/Linkedin.png" alt="Linkedin" /></a>
		</div>
		
		</div>
            </footer>
        </div>
    </body>
</html>
