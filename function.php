<?php

function head($Name,$Profession) {
    ?>
    <header id="header" class="alt">
    <h1><?php  echo$Name;?><br>
    <?php echo$Profession ?></h1>            
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

										<span class="image main"><img src="images/coralie.png" alt="" /></span>
										<section>
												<h2>Séance sur RDV<br>en cabinet ou à domicile</h2>
										</section>
									</section>
								</section><?php
}

function presentation(){?>
    <section id="first" class="main special">
            <header class="major">
                <h2>Présentation
                        <br><img src="images/0.jpg" alt="" />
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
        
        <p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
        <footer class="major">
            <ul class="actions special">
            </ul>
        </footer>
    </section>    
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
?>
