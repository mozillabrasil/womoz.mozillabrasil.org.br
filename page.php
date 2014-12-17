<?php
/*
Template Name: Home
*/
?>

 <?php get_header(); ?>


     <div id="related">
         <div class="container">
             <div class="col-md-3">
                 <h4>Alguns projetos relacionados: </h4>
             </div>
             <div class="col-md-9">
                 <ul>
                     <li><img src="img/webmaker.png" alt="Wemaker"></li>
                     <li><img src="img/firefox.png" alt="Firefox"></li>
                     <li><img src="img/mdn.png" alt="MDN"></li>
                 </ul>
             </div>
         </div>
         <hr>
     </div>
     <div id="about" class="container">
         <div class="col-md-6">
            <div class="row">
				<h2 class="wow">O que é WoMoz?</h2>
				<p class="wow">WoMoz (Women & Mozilla) é uma comunidade composta por entusiastas da web aberta com foco em aumentar o envolvimento de mulheres na tecnologia.</p>
				<p class="wow">Nosso objetivo principal é dar maior visibilidade e incentivar o trabalho das mulheres dentro do mundo Open Source.</p>
				<p class="wow">O WoMoz existe desde 2009 e tem passado por reformulações de objetivos. No Brasil o movimento foi iniciado em outubro de 2014 por um grupo de voluntárias da comunidade brasileira.</p>
				<p class="wow">O futuro da web está em nossas mãos - venha lutar com a gente :)</p>
				<a class="dribbble-follow-button" href="#">Faça parte</a>
             </div>
         </div>
         <div class="col-md-6">
             <img src="img/user.png" alt="We can do it!">
         </div>
     </div>
    <hr>
	
    <div id="project" class="container">
        <div class="sectionhead  row">
            <h3>Projetos do WoMoz</h3>
            <hr class="separetor">
        </div>
		
        <div class="row">
               <div class="col-md-6 col-lg-4">
                   <img src="img/s1.png" alt="">
                   <h4>Projeto</h4>
                   <p>Infos do projeto</p>
                </div>
        </div>
    </div>

    <div id="news">
        <div class="sectionhead">
           <h3>Novidades e eventos no Brasil</h3>
           <hr class="separetor">            
        </div>

        <div class="portfolioitems container">
            <ul id="shotsByPlayerId">
				<li>
					<a href="#">
					<img src="http://wam.mozillabrasil.org.br/assets/images/events/BRh9Ednyo9.jpg" width="323" height="243" alt="#"></a>
					<h3><a href="#">Futurecom 2014</a></h3>
					<div class="likecount">
						<a href="#"><span class="icon-heart"></span> 71</a>
					</div>
					<div class="commentcount">
						<a href="#"><span class="icon-bubbles"></span> 15</a>
					</div>
				</li>
			</ul>
        </div>
    </div>

    <div id="team" class="container">
        <div class="sectionhead">
           <h3>O Grupo</h3>
           <h4>Conheça algumas voluntárias do WoMoz</h4>
           <hr class="separetor">            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="clientsphoto">
                    <img src="img/s1.png" alt="Fulana">
                </div>
                <div class="quote">
                    <blockquote>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.</p>                        
                    </blockquote>
                    <h5>Fulana X</h5>
                    <p>@fulana_x</p>
                </div>                
            </div>
        </div>        
    </div>
	
    <div id="join" class="container">
        <div class="sectionhead">
           <h3>Faca parte do WoMoz</h3>
           <h4>Juntos, vamos contruir uma web aberta e para todos!</h4>
           <hr class="separetor">            
        </div>
        
        <div class="row">
            <div class="col-md-6" >
                quer ajudar
            </div>
            <div class="col-md-6">
                inscreva-se 
            </div>
        </div>        
    </div>

<?php get_footer(); ?>