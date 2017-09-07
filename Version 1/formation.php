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
                    <h2>Formations</h2>
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
                    <h1>Mes Formations :</h1>

            
	<div class="center_div">

<h3>2015-2016 : IUT de Longwy à Cosnes-et-Romain, 54400</h3>

<p>Licence Professionnelle (LP) AII Systèmes Automatisés et Réseaux Industriels (SARI) : Durant ma LP j'ai approfondi les notions vues en DUT :</p>
<ul>
<li>Automatismes (Step7, Unity, PL7Pro)</li>
<li>Réseau (Réseau Ethernet, modèle OSI, TCP/IP)</li>
<li>Informatique Industrielle (Java, commande en temps réel)</li>
<li>Electronique de puissance (Variateur de vitesse)</li>
</ul>
<p>Toutefois j'ai tout de même entrevu de nouveau domaines comme l'instrumentation, la régulation et l'hydraulique.</p>

</div><br />

<div class="center_div">

<h3>2013-2015 : IUT de Rouen à Mont St-Aignan, 76130</h3>


<p>Diplôme Universitaire et Technologique (DUT) Génie Electrique et Informatique Industrielle (GEII) : Au cours de mon DUT j'ai principalement 
pratiqué les disciplines de l'électronique (Orcad) et de l'automatisme (Automgen, Codesys, Processim).<br /><br />
Grâce à l'apprentissage dispensé en DUT j'ai pu réalisé plusieurs projets :</p>
<ul>
<li> En projet tuteuré, la simulation d'une partie opérative sur le logiciel Processim ainsi que la création de la partie commande associée.</li>
<li> En stage, la création de la partie commande de "l'Isolement Salle de Commande" ainsi que de la maquette de simulation.</li>
</ul>
<P>Ces réalisations m'ont apportées divers compétences notamment la maîtrise des languages Grafcet et Ladder. Par ailleurs à l'IUT nous avons
également appris à déveloper des applications en C et à programmer des micro-controleurs en Assembleur.</p>

<div class="center_div2">
<a class="MonCV" href="Rapport.pdf">Télécharger mon Projet Tuteuré !</a>
</div>

</div><br />

<div class="center_div">

<h3>2012-2013 : Lycée Guy de Maupassant à Fécamp, 76540</h3>


<p>Baccalauréat Scientifique option et spécialité Sciences de l'Ingénieur (SI) : l'option SI m'a permis d'aborder les domaines
du génie électrique et du génie mécanique notamment à travers un projet "Formula Flowcode"</p>

<img src="Logos/LyceeFecamp.jpg" class="formula" alt="FormulaFlowcode" /></a></p>

<p>Ce dernier consistait à faire traverser au buggy
une succession d'étapes (suivi de ligne, contour d'obstacle, résolution de labyrinthe...). 
Le buggy était équipé de 3 capteurs infrarouges (gauche, devant, droite) qui renvoyaient une valeur codée sur un octet représentant la distance avec un obstacle.</p>
 
<p>Mon rôle dans ce projet a principalement été de créer un programme afin que la Formula Flowcode soit capable de traverser une chicane.
Pour cela j'ai utilisé la technique de résolution de labyrinthe la plus courante "le suivi du mur de gauche".</p>
<p>En effet si dans un labyrinthe vous suivez perpétuellement le mur à votre gauche vous arriverez nécéssairemment à a sortie.</p>

<p>J'ai donc commandé à la Formula Flowcode d'avancer en gardant une certaine distance avec le mur à sa gauche tout en rebondissant face aux obstacles qui pouvaient apparaitre devant elle (angle, cul de sac).</p><br />
<br />

<table>
   <tr>
       <th>Mur à gauche</th>
       <th>Mur à droite</th>
       <th>Mur devant</th>
       <th>Réaction</th>
   </tr>

   <tr>
       <td>0</td>
       <td>0</td>
       <td>0</td>
       <td>Tourner de 90° sur la gauche et avancer droit (INITIALISATION)</td>
   </tr>
   <tr>
       <td>0</td>
       <td>0</td>
       <td>1</td>
       <td>Tourner de 90°sur la droite puis suivre le mur de gauche</td>
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>0</td>
       <td>Ignorer (Pourrait perturber le fonctionnement notamment pendant l'initialisation)</td>
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>1</td>
       <td>Tourner sur la gauche et suivre le mur de gauche</td>
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>0</td>
       <td>	Suivre le mur de gauche</td>
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>1</td>
       <td>	Tourner de 90°sur la droite et suivre le mur désormais à gauche</td>
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>0</td>
       <td>	Suivre le mur de gauche</td>
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>1</td>
       <td>	Se retourner</td>
   </tr>
</table>


<p>Cette option est intervenu dans mon parcours comme une initiation à la programmation (Flowcode - Grafcet), aux schémas électriques, aux calculs
de forces, à la logique et aux équations booléènnes ainsi qu'aux bascules, aux calculs de puissances et d'énergies
et aux transmission de puissances mécanique. Elle m'a largement dirigé dans le choix de ma poursuite d'étude.</p>

</div>







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
