<?php

function head($Name,$Profession) {
    ?>
    <header id="header" class="alt">
    <span class="image main logo"><img src="images/logo.png" alt="" /></span>
    <div>
    <h1><?php  echo$Name;?><br>
    <?php echo$Profession ?></h1>
    <h2>coralie.andrietti@gmail.com<br>06.64.43.62.60</h2>  
    <!--span-- class="image main"><img src="images/coralie.png" alt="" /></!--span-->
    
    <section>
            <p>Séance sur RDV<br>en cabinet ou à domicile</>
    </section>         
    </header>
    <?php
}

function nav($Name,$Profession,$adress,$mail,$phone){?>
    <nav id="nav">
							<h6><?php  echo$Name;?> <?php echo$Profession ?></h6>
							<h6><?php  echo$adress;?>
							<br><a href="mailto:<?php echo$mail;?>"><?php  echo$mail;?></a>  <?php echo$phone;?>
							</h6>
						<ul>
							<li><a href="#first">Présentation</a></li>
							<li><a href="#second">Pourquoi?</a></li>
							<li><a href="#third">Séances</a></li>
							<li><a href="#fourth">Honoraires</a></li>
							<li><a href="#fifth">Localisation</a></li>
						</ul>
					</nav><?php
}

function introduction(){
    ?><section id="intro" class="main">
								
										<section id="content" class="main">

										
									</section>
								</section><?php
}

function presentation(){?>
    <section id="first" class="main special">
            <header class="major">
                <h2>Présentation
                        <br><img class="photo" src="images/0.jpeg" alt="" />
                </h2>
                
            </header>
            <ul class="features">
                <li>
                
                    <h3>Diplômes et Formatrions </h3>
                    <h6>Institut de Formation en Ergothérapie de Montpellier
                    <br>formation à l’Analyse Appliquée du Comportement
                    <br>Attestation de formation Gestes et Soins D’urgence
                    <br>Attestation d’acteur d’Éducation Thérapeutique du Patient
                    <br>Formation méthode de rééducation intensive pour les troubles neurologiques, validé pour les personnes atteintes par la maladie de Parkinson
                    </h6>
                </li>
                <li>
                    <h3>Experiences notable</h3>
                    <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                </li>
            </ul>
            <footer class="major">
                <ul class="actions special">
                </ul>
        </footer>
    </section>
    <?php
}

function why(){
    ?>
    <section id="second" class="main special">
        <header class="major">
            <h2>Pourquoi consulter un ergothérapeute ?</h2>
            <blockquote>L'ergothérapie est une profession paramédicale dont l'objectif est de maintenir, de restaurer et de permettre les activités de manière sécurisée, autonome et efficace.</blockquote>
        </header>
        
        
		<section>									
        <p>La mission de l'ergothérapeute est de permettre aux personnes de continuer à pratiquer les activités du quotidien:<br></p>
        </section>
		<p class="main">									
        - efectuer les soins personnels.<br>
        - se déplacer, comuniquer, se divertire.<br>
        - acceder à la scolarité, aux étude, au travail.<br>
        - efectuer des tâches personelles.<br>
		</p>										
        
        
        <p> l'ergothérapie peut être solicité à tous les âges de la vie. il intervient dès lors qu'un enfant, un adulte ou une perosnne âgée rencontre des dificultés à réaliser des gestes du qutidien. Ces difficultés oeuvent être liées à un handicap de naissance, à un trouble dévelopemental, à un handicap soudain 9suite à un accident par exemple), à des maladies ou au vieillissement normal des personnes</p>
        <!--p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p-->
        </section>
        </footer>
        
    <?php
}

function seances(){
    ?>
    <section id="third" class="main special">
        <header class="major">
            <h2>Les séances</h2>
            </header>
        
        <p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
        <footer class="major">
            <ul class="actions special">
            </ul>
        </footer>
    </section>
    <?php
}

function honoraires(){
    ?>
    <section id="fourth" class="main special">
        <header class="major">
            <h2>Honoraires
            </h2>
            
        </header>
        <ul class="major">
            
                <h3>Bilan: 180 euros </h3>
                <h3>Séance cabinet : 45 euros </h3>
                <h3>Séance déplacement : 55 euros </h3>
                <br>
                <h4>Paiement chèque ou espèces</h4>
                
            
            
        </ul>
        <footer class="major">
            <ul class="actions special">
            </ul>
        </footer>
    </section>

    <section id="content" class="main ">
            <span class="image main"><img src="images/office.png" alt="" /></span>
    </section>
    <?php
}

function location(){
    ?>
    <section id="fifth" class="main special">
        <header class="major">
            <h2>Localisation</h2>
            <section id="content" class="main ">
                    <span class="image main"><a href="https://www.google.com/maps/place/Coralie+ANDRIETTI+Ergoth%C3%A9rapeute/data=!3m1!4b1!4m2!3m1!1s0x12cdd58e043b1ed1:0x51932fb1d3a7312e" target="_blank"><img src="images/map.png" alt="" /></a></span>
            </section>
        </header>
        <footer class="major">
            <ul class="actions special">
            </ul>
        </footer>
    </section>
    <?php
}
function footer($Name,$adress,$phone,$mail){
    ?>
    <footer id="footer">
        <section>
            <h2>MENTIONS LÉGALES</h2>
            <p>
                Propriétaire du site <br>
                Mme <?php  echo$Name;?> <br>
                Adresse : <?php  echo$adress;?><br>
                Tel : <?php  echo$phone;?><br>
                Email : <?php  echo$mail;?><br>
                <br>
                Créateur du site <br>
                Site réalisé et géré par Kevin Saffioti <br>
                Hébergement chez </p>
            <!--ul class="actions">
                <li><a href="generic.html" class="button">Learn More</a></li>
            </ul-->
        </section>
        <section>
            <h2>Contact</h2>
            <dl class="alt">
                <dt>Address</dt>
                <dd><?php  echo$adress;?>, France</dd>
                <dt>Phone</dt>
                <dd><?php  echo$phone;?></dd>
                <dt>Email</dt>
                <dd><a href="mailto:<?php  echo$mail;?>"><?php  echo$mail;?></a></dd>
            </dl>
            <!--ul class="icons">
                <li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
            </ul-->
        </section>
    
    </footer>
<?php
}
?>
