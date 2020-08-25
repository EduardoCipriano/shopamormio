@extends('principalproducto')
@section('contenido')
<!--contact-->
<br>
<br>
<div class="container">


    <div class="col-md-4 w3-agile-grid mid-w3-add">
        
        <div class="w3-address">
            <div class="w3-address-grid">
                <div class="w3-address-left">
                    <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                </div>
                <div class="w3-address-right">
                    <h6>Whatsapp</h6>
                    <a href="https://api.whatsapp.com/send?phone=50254342422" target="_blank">+(502) 54342422</a>

                </div>
                <div class="clearfix"> </div>
                
            </div>
            <br>
            <br>
            <div class="w3-address-grid">
                <div class="w3-address-left">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="w3-address-right">
                    <h6>Correo electrónico</h6>
                    <p>Email :<a href="mailto:consientemeamormio@gmail.com" target="_blank"> consientemeamormio@gmail.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <br>
            <br>
            <div class="w3-address-grid">
                <div class="w3-address-left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="w3-address-right">
                    <h6>Dirección</h6>
                    <p>Local 304, C.C. El Triángulo, zona 1, Huehuetenango, Guatemala.
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 footer-right w3-agile-grid">
        <div class="agile_footer_grid">
            <div class="fb-page" data-href="https://www.facebook.com/amormioshopgt" data-tabs="timeline,events,messages" data-width="500" data-height="420" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/amormioshopgt" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/amormioshopgt">AMOR MIO SHOP</a></blockquote></div>
        </div>
        
    </div>
    <div class="clearfix"> </div>

<div class="clearfix"></div>
<!-- contact-form-->
<div class="jarallax contact-bottom" id="contact">
	<div class="col-md-6 contact-right-w3l">
		<h3 class="title-w3layouts white-agileits">Contáctanos</h3>
		<form action="#" method="post">
			<input type="text" class="name" name="name" placeholder="Nombre" required="">
			
			<input type="email" class="name" name="name" placeholder="Email" required="">
			<input type="text" class="name" name="name" placeholder="Télefono" required="">
			<textarea placeholder="Tu Mensaje" required=""></textarea>
			<input type="submit" value="Enviar mensaje">
		</form>
	</div>
	<div class="col-md-6 agileits_w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.096439546851!2d-91.47686768563277!3d15.316993289349494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858c142f00ce039b%3A0xa01b92d943f3cc2a!2sCentro%20Comercial%20El%20Tri%C3%A1ngulo!5e0!3m2!1ses!2sgt!4v1598130888709!5m2!1ses!2sgt" height="420"></iframe>
	</div>	
	<div class="clearfix"></div>
</div>
</div>


<!-- //contact-form -->



@endsection



