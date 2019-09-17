<?php include_once("header.php");?>

	<main>
		
		<section class="cd-section contact cd-selected">
			
			<div class="section section-padding-top-bottom-head">
	
				<div class="parallax-contact"></div>	
				
				<div class="container">	
					<div class="sixteen columns">
						<div class="section-head-text left">
							<h2>Contato</h2>
							<p>Fale com a Bluegg</p>
						</div>
					</div>	
				</div>
			</div>
			
			<div class="section section-padding-top-bottom-same-wrapper white-background">						
				<div class="container">	
					<div class="sixteen columns">
						<div class="section-head-text center">
							<h4>Tem algum dúvida?</h4>
							<p>Entre em contato!</p>
						</div>
					</div>
					<div class="one-third column" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.3s">							
						<div class="contact-block">																
							<div class="text">				
								<h5><span>&#xf4b8;</span> Telefone</h5>	
								<p>+55 11 3758-1117</p>
							</div>
						</div>
					</div>	
					<div class="one-third column" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.3s">							
						<div class="contact-block">							
							<div class="text">				
								<h5><span>&#xf2a6;</span> Endereço</h5>
								<p>Francisco Tramontano, 101 cj 202 - SP</p>
							</div>
						</div>
					</div>
					<div class="one-third column" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.3s">							
						<div class="contact-block">					
							<div class="text">				
								<h5><span>&#xf422;</span> E-mail</h5>
								<p>contato@bluegg.com.br</p>
							</div>
						</div>
					</div>		
				</div>	
			</div>
			
			<div class="section section-padding-bottom white-background">						
				<div class="container">	
				
					<div class="clear"></div>
						
					<form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
						<div class="eight columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
							<label for="name"> 
								<span class="error" id="err-name">Seu nome</span>
							</label>
							<input name="name" id="name" type="text"   placeholder="Nome: *"/>
						</div>
						<div class="eight columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
							<label for="email"> 
								<span class="error" id="err-email">Seu e-mail</span>
								<span class="error" id="err-emailvld">Formato de e-mail inválido</span>
							</label>
							<input name="email" id="email" type="text"  placeholder="E-mail: *"/>
						</div>
						<div class="sixteen columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
							<label for="message"></label>
							<textarea name="message" id="message" placeholder="Deixe sua mensagem!"></textarea>
						</div>
						<div class="sixteen columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
							<div id="button-con"><button class="send_message chaffle" id="send" data-lang="en">enviar</button></div>					
						</div>
						<div class="clear"></div>	
						<div class="error text-align-center" id="err-form">Tivemos um problema, por favor revise seus dados!</div>
						<div class="error text-align-center" id="err-timedout">Conexão com o servidor excedeu o limite de tempo.</div>
						<div class="error" id="err-state"></div>
					</form>	
						
					<div class="clear"></div>
					<div id="ajaxsuccess">Enviado!! Muito Obrigado ;)</div>
					<div class="clear"></div>
				
				</div>	
			</div>
			
			<div class="section">
			
				<div id="cd-google-map">
					<div id="google-container"></div>
					<div id="cd-zoom-in"></div>
					<div id="cd-zoom-out"></div>
					<address>R. Francisco Tramontano, 101 cj. 201 - 202<br>São Paulo +55 11 3758-1117</address> 
				</div>
				
			</div>
			
		</section> <!-- .cd-section -->
	</main>




<?php include_once("footer.php");?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>
	<!-- ==================
		Go to this link to activated your google map API KEY https://developers.google.com/maps/documentation/javascript/tutorial#api_key 
		your key replace in script link for google map after .../maps/api/js?key=HERE_YOUR_API_KEY
		coordinates for map you can change in custom-contact.js file 
	================== -->	
<script type="text/javascript" src="js/contact.js"></script>	
<script type="text/javascript" src="js/custom-contact.js"></script>