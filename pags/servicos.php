<script type="text/javascript" src="img/menu-scroll-fixo-jquery/jquery-1.11.1.min.js"></script>
<script type='text/javascript'>
$(document).ready(function()
{
$(".mostrar").hide();
$(".ocultar").click(function()
{
$(this).next(".mostrar").slideToggle(600);
});
});
</script>	

<!--INICIO DO SLIDE DE SERVIÇOS-->
<script type="text/javascript" src="img/slide-servico/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript">
function slide1(){
document.getElementById('id-servico').src="img/slide-servico/img/agende.png";
setTimeout("slide2()", 4000)
}
 
function slide2(){
document.getElementById('id-servico').src="img/slide-servico/img/oficinas_rino_2.jpg";
setTimeout("slide3()", 3500)
}
 
function slide3(){
document.getElementById('id-servico').src="img/slide-servico/img/oficina.jpg";
setTimeout("slide4()", 3500)
}
function slide4(){
document.getElementById('id-servico').src="img/slide-servico/img/oficina3.jpg";
setTimeout("slide1()", 3500)
}
$(document).ready(function(){
	    slide1(); 
});
</script>

	<div id="clear"></div>
		<div id="corpo-servico">
		
			<div class="esq-servicos">
            	
                <h5>Para mais informações clique sobre o
                serviço desejado.</h5>
                
                 <div class='ocultar'>
                	<h4>
                    <img src="img/seta.gif">
                    
                   AGENDE SEU SERVIÇO</h4></div>
				                
                 <div class='ocultar'>
                	<h4>
                    <img src="img/seta.gif">
                    DIAGNÓSTICOS</h4></div>
				<div class='mostrar'>
                	<p>Este setor foi especialmente criado e equipado para proporcionar maior segurança e confiabilidade no diagnóstico do seu veículo. Antes de realizar qualquer reparo, faça gratuitamente um diagnóstico do seu carro através da nossa conveniada Milocar, e tenha a certeza e a garantia dos serviços que precisarão ser realizados.</p>
				</div>
                
                 <div class='ocultar'>
                	<h4>
                    <img src="img/seta.gif">
                   MECÂNICA E ELÉTRICA</h4></div>
				<div class='mostrar'>
                	<p>Pelo nosso convênio com a Milocar, também autorizada da Fiat, você encontrará os mais variados serviços de mecânica e elétrica para o seu carro. Tudo de acordo com o padrão Fiat de qualidade, pois seus funcionários são treinados na fábrica.</p>
				</div>
                
                 <div class='ocultar'>
                	<h4>
                    <img src="img/seta.gif">
                    CAPOTARIA</h4></div>
				<div class='mostrar'>
                		<p>Pelo nosso convênio com a Milocar, também autorizada da Fiat, você encontrará os mais variados serviços de capotaria para o seu carro. Tudo de acordo com o padrão Fiat de qualidade, pois seus funcionários são treinados na fábrica.</p>
				</div>
                
                 <div class='ocultar'>
                	<h4>
                    <img src="img/seta.gif">
                   LANTERNAGEM E PINTURA</h4></div>
				<div class='mostrar'>
                	<p>A nossa conveniada, dispõe dos equipamentos e técnicas mais modernos existentes no mercado para oferecer sempre o melhor aos seus clientes. Todos os serviços são prestados em conformidade com o alto padrão de qualidade Fiat.</p>
				</div>
            
            </div>
			
			
<div class="dir-servicos">
		<div id="slide-servico">
        	   	<img id="id-servico">
         </div>
          	  <div class="texto-dir">
                    Fazemos sempre o possivel para melhor atende-ló,
                    atráves do nosso formulário ou telefone você encontrará o serviço necessário para seu veículo.
                    
                    
                    <br><br><br>
                    <h3>MILOCAR</h3>
                    <br>
                    <ul>
                    	<li>A Milocar também é uma autorizada da Fiat, trabalha conosco dando
                        suporte para a oficina e a loja de venda de peças genuínas da Fiat. Para
                        conhecer melhor nossa conveniada, clique no <b>link</b> abaixo:<br/></li>
                        
                    	<li><a href="http://www.milocar.com.br/">Conheça a Milocar</a></li>
                    </ul>
               </div>			
				
</div>		
		
		
		</div>	
    <div id="clear"></div>
	<div id="rodape">
  			<img src="img/15.png">
            <span><b>HORÁRIO DE ATENDIMENTO:</b>
            <br>Vendas - Segunda a Sexta: 8h às 18h | Sábados: 8h às 15h | Domingos: 8h às 13h 
            <br>Demais departamentos: 8h às 12h
            <br><br>
            <i> © 2015 Todos os direitos reservados por <b>Fiat SmartCar</b></i></span>        
    </div>
