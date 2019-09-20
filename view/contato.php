<?php  include_once("header.php"); ?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pH1">
                <h1>contatos</h1>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bgEmpresa01">
    <div class="container">
        <div class="row mTop3">

            <div class="col-lg-6">
                <img src="images/contato.png" class="img-responsive center-block" alt="">
            </div>

            <div class="col-lg-6 mTop3">
                <div class="row">

                	<div class="col-lg-12">
                    	<p class="txtFooter01">fale conosco!</p>
                	</div>

                	<div class="col-lg-12">
                    	<p class="txtFooter02">Escreva ou mande um e-mail para:</p>
                    	<p class="txtFooter02"><a href="mailto:sales@onestationmedia.com">sales@onestationmedia.com</a></p>     
                	</div>

                	<div class="col-lg-12 mSocial">
                    	<p class="txtFooter03">Nos acompanhe</p>
                	</div>

                	<div class="col-lg-2 col-xs-4">
                    	<a href="#"><img src="images/face.png" class="img-responsive" alt=""></a>                  
                	</div>

                	<div class="col-lg-2 col-xs-4">
                    	<a href="#"><img src="images/linkedin.png" class="img-responsive" alt=""></a>
                	</div>

                	<div class="col-lg-2 col-xs-4">
                   		<a href="#"><img src="images/insta.png" class="img-responsive" alt=""></a>
                	</div>

				</div>
				
				<div class="row mTop3">
						<div class="col-lg-12">
								<div class="form">
									<form name="form-gohotsale" id="form-gohotsale" method="POST" action="https://gohotsale.com.br/leads">
										<input type="hidden" name="hotsite" id="hotsite" value="one-station-media-hotsite">
										<input type="hidden" name="company" id="company" value="one-station-media">
										<div id="my_name_wrap" style="display:none;">
											<input name="my_name" type="text" value="" id="my_name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="nome" name="name" required="required" placeholder="NOME">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" required="required" placeholder="E-MAIL">
										</div>
										<div class="form-group">
											<textarea class="form-control" rows="5" id="mensagem" name="custom_param_1" placeholder="MENSAGEM"></textarea>
										</div>
										<div class="btnAlign">
											<button type="submit" class="btn btn-primary">Enviar</button>
										</div>
									</form>
								</div>
							</div>
				</div>


        	</div>

        </div>
    </div>
</section>


<section class="container-fluid bgMobileBlockGray">
    <div class="container">
        <div class="row mTop02">





        </div>
    </div>
</section>

<?php  include_once("footer.php"); ?>     