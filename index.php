
<!DOCTYPE html>


<html lang="en" data-bs-theme="dark">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>RARA CHECKER</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body class="vertical-layout" data-color="bg-gradient-x-purple-blue">   
    <div class="app-content content" style="background-color: #211f2a;">
      <div class="content-wrapper">
        <div class="content-wrapper-before mb-3">   
          
 	
        </div>        
  <div class="content-body">
  	<div class="mt-2"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="card" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">
				<div class="card-body text-center">
        <h1 class="mb-2 mt-2 title"><strong><center>LENG CHECKER</center></strong></h1>   
        <h6><span class="badge badge-primary carregadas">0</span> TOTAL</h6>
					<textarea rows="12" class="form-control text-center form-checker mb-2" id="lista" placeholder="PUT YOUR CARDS HERE" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;"></textarea>

					          <select name="gate" id="gate" class="form-control" style="margin-bottom: 1px;border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;" onchange="javascript: showhide();">


<option value="gate/wocsite.php">SITE CHECKER WOC</option>


<option value="gate/magensite.php">SITE CHECKER MAGEN</option>

</select>
	<br>										
					<button class="btn glow-on-hover" style="width: 49%; float: left;"><i class="fa fa-play"></i>START</button>
					<button class="btn glow-on-hovers" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i>STOP</button>


					<div class="mb-1 text-center">
                    <center><button class="btn glow-on-hoverz text-center" style="margin-top: 10px;" id="tg-show-btn">CC GEN</button></center>
                    </div>
		
	               <div style='display: none;' id="tg">
	                   
		     <div class="col-lg-12 col-md-12">
        <div class="card">
           <div class="card-body">
            <form id="ccgenForm">
                    <div class="form-group">
                        <label for="bin" class="text-light">BIN</label>
                        <input type="number" class="form-control text-light" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;" id="bin" name="bin" placeholder="123456" required>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            
                        <div class="col-6 col-lg-6">
                          <div class="form-group">
                              <center>   <small>Month</small>  <center> 
                                  <select class="selectpicker form-control text-light" id="expiryMonth" name="expiryMonth" style="padding-top: 0.375rem!important; padding-bottom: 0.375rem!important;border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">
                                  <option value="" selected="">RANDOM</option>
                                  <option  value="01">Jan (01)</option>
                                  <option  value="02">Feb (02)</option>
                                  <option  value="03">Mar (03)</option>
                                  <option  value="04">Apr (04)</option>
                                  <option  value="05">May (05)</option>
                                  <option  value="06">Jun (06)</option>
                                  <option  value="07">Jul (07)</option>
                                  <option  value="08">Aug (08)</option>
                                  <option  value="09">Sep (09)</option>
                                  <option  value="10">Oct (10)</option>
                                  <option  value="11">Nov (11)</option>
                                  <option  value="12">Dec (12)</option>
                              </select>
                          </center></center></div>
                      </div>
                      <div class="col-6 col-lg-6">
                          <div class="form-group">
                            <center> <small>Year</small>  <center> 
                              <select class="selectpicker form-control text-light" id="expiryYear" name="expiryYear" style="padding-top: 0.375rem!important; padding-bottom: 0.375rem!important;border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">
                              
                                  <option value="" selected="">RANDOM</option>
                                  <option  value="2023">2023</option>
                                  <option  value="2024">2024</option>
                                  <option  value="2025">2025</option>
                                  <option  value="2026">2026</option>
                                  <option  value="2027">2027</option>
                                  <option  value="2028">2028</option>
                                  <option  value="2029">2029</option>
                                  <option  value="2030">2030</option>
                                  <option  value="2031">2031</option>
                                  <option  value="2032">2032</option>
                              </select>
                          </center></center></div>
                      </div>
                          </div>
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <div class="form-group">
                                <center>   <small>CVV</small>  <center> 
                                <input type="number" class="form-control text-light" id="cvv" name="cvv" placeholder="Leave blank to rnd" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;" aria-describedby="defaultFormControlHelp">
                            </center></center></div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="form-group">
                              <center>  <small>Quantity</small>  <center> 
                              <input type="number" class="form-control text-light" id="quantity" name="quantity" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;" value="10" required>
                            </center></center></div>
                        </div>
                    </div>

                    <button id="gen-card" type="submit" class="btn btn-dark btn-lg" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">GENERATE</button>
                  </form>

                 </div>
              </div>
          </div>

				</div>
			</div>


     <script>
        document.getElementById('ccgenForm').addEventListener('submit', function(event) {
            event.preventDefault();
    
            var form = new FormData(event.target);
    
            fetch('card_generator.php', {
                method: 'POST',
                body: form
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('lista').value = data.cards.join("\n");
                document.getElementById('country').textContent = data.binInfo.country;
                document.getElementById('brand').textContent = data.binInfo.brand;
                document.getElementById('type').textContent = data.binInfo.type;
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
        </script>

        <script>
function showhide(){
if(document.getElementById('gate').value == 'gate/eur1CCN.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/eur1CVV.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/usd5CVV.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/eur5CCN.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/eur5CVV.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/usd1CCN.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/usd1CVV.php'){
document.getElementById('sec').style.display = 'block';
}
else if(document.getElementById('gate').value == 'gate/usd5CCN.php'){
document.getElementById('sec').style.display = 'block';
}
else{
document.getElementById('sec').style.display = 'none';
}
}
</script>


		
</section>
        </div>
      </div>
                		<div class="col-xl-4">
                      <div class="card" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">
                        <div class="card-body">
                          <div class="float-right">
                            <button class="btn btn-primary btn-sm charge">0</button>
                            <button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
                            <button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
                          </div>
                          <h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED</h4>					
                      <div id='lista_charge'></div>
                        </div>				
                      </div>
                    </div>
                                    <div class="col-xl-4">
                      <div class="card" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">
                        <div class="card-body">
                          <div class="float-right">
                          <button class="btn btn-warning btn-sm cvvs">0</button>
                            <button type="show" class="btn btn-primary btn-sm show-live"><i class="fa fa-eye-slash"></i></button>
                            <button class="btn btn-warning btn-sm btn-copy2"><i class="fa fa-copy"></i></button>					
                          </div>
                          <h4 class="card-title mb-1"><i class="fa fa-check text-warning"></i> LIVE</h4>					
                      <div id='lista_cvvs'></div>
                        </div>				
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="card" style="border: 5px solid transparent; border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); border-image-slice: 1;">
                        <div class="card-body">
                          <div class="float-right">
                          <button class="btn btn-danger btn-sm reprovadas">0</button>
                            <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
                          </div>
                          <h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED</h4>		
                            <div style='display: none;' id='lista_reprovadas'></div>
                        </div>				
                      </div>
                    </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<style>
  @import url("https://fonts.googleapis.com/css?family=Sacramento&display=swap");
  @media only screen and (min-width: 600px) {
.title {
  font-size: calc(10px + 8vh);
  line-height: calc(10px + 10vh);
}
}
.title {

/*   text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
    0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092;
  color: blue; */
  text-shadow: 0 0 5px #b827fc, 0 0 15px #b827fc, 0 0 20px #b827fc, 0 0 40px #b827fc, 0 0 60px #DA0C81, 0 0 10px #b827fc, 0 0 98px #DA0C81;
    color: #662549;
  text-align: center;
  animation: blink 12s infinite;
  -webkit-animation: blink 12s infinite;
}

@-webkit-keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: blue;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #b827fc, 0 0 15px #b827fc, 0 0 20px #b827fc, 0 0 40px #b827fc, 0 0 60px #DA0C81, 0 0 10px #b827fc, 0 0 98px #DA0C81;
    color: #662549;
  }
}

@keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: blue;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #b827fc, 0 0 15px #b827fc, 0 0 20px #b827fc, 0 0 40px #b827fc, 0 0 60px #DA0C81, 0 0 10px #b827fc, 0 0 98px #DA0C81;
    color: #662549;
  }
}
    footer {
  text-align: center;
  padding: 3px;
}
.float-right {
  float: right !important;
}
.glow-on-hoverz {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #0F0E0E;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border: 5px solid transparent;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1;
}

.glow-on-hoverz:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
}

.glow-on-hoverz:active {
    color: #000
}

.glow-on-hoverz:active:after {
    background: transparent;
}

.glow-on-hoverz:hover:before {
    opacity: 1;
}

.glow-on-hoverz:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #0F0E0E;
    left: 0;
    top: 0;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}


.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #0C134F;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border: 5px solid transparent;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #0C134F;
    left: 0;
    top: 0;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}



.glow-on-hovers {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #662549;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border: 5px solid transparent;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1;
}

.glow-on-hovers:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
}

.glow-on-hovers:active {
    color: #000
}

.glow-on-hovers:active:after {
    background: transparent;
}

.glow-on-hovers:hover:before {
    opacity: 1;
}

.glow-on-hovers:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #662549;
    left: 0;
    top: 0;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
<footer>
  <p>Join for more Updates <a href="https://vpnhub.cafe">Click Here!</a></p>
</footer>
<script>







$(document).ready(function(){


const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

    
$("#tg-show-btn").click(function() {
$("#tg").slideToggle();
});
$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#lista_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-live').click(function(){
var type = $('.show-live').attr('type');
$('#lista_cvvs').slideToggle();
if(type == 'show'){
$('.show-live').html('<i class="fa fa-eye"></i>');
$('.show-live').attr('type', 'hidden');
}else{
$('.show-live').html('<i class="fa fa-eye-slash"></i>');
$('.show-live').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#lista_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#lista_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVED DEAD', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#lista_reprovadas').text('');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'COPIED APPROVED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_charge = document.getElementById('lista_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy2').click(function(){
	Swal.fire({title: 'COPIED CVV', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_live = document.getElementById('lista_cvvs').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_live;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy').click(function(){
	Swal.fire({title: 'COPIED CCN', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_lives = document.getElementById('lista_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.glow-on-hover').click(function(){
var sec = $("#sec").val();
var cst = $("#cst").val();
var e = document.getElementById("gate");
var gate = e.options[e.selectedIndex].value;
var lista = $('.form-checker').val().trim();
var array = lista.split('\n');
var charge = 0, live = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!lista){
	Swal.fire({title: 'You did not provide a card :(', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

Swal.fire({title: 'Your cards are being checked...', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
// ảo ma hả, đừng lấy code chứ !!
if(total > 30000){
  Swal.fire({title: 'YOU CAN NOT PERFORM THAT ACTION: REDUCE NUMBER OF CARDS TO < 1000', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.glow-on-hover').attr('disabled', true);
$('.glow-on-hovers').attr('disabled', false);

line.forEach(function(data){
var callBack = $.ajax({
	url: gate + '?lista=' + data + '&sec=' + sec + '&cst=' + cst,
	success: function(retorno){
		if(retorno.indexOf("CHARGED") >= 0){
			$('#lista_charge').append(retorno);
			removelinha();
			charge = charge +1;
			}
			else if(retorno.indexOf("LIVE") >= 0){
			$('#lista_cvvs').append(retorno);
			removelinha();
			live = live +1;
		    }
		    else{
			$('#lista_reprovadas').append(retorno);
			removelinha();
			dies = dies +1;
		}
		testadas = charge + live + lives + dies;
	    $('.charge').text(charge);
	    $('.cvvs').text(live);
		$('.aprovadas').text(lives);
		$('.reprovadas').text(dies);
		$('.testadas').text(testadas);
		
		if(testadas == total){
			Swal.fire({title: 'ALL CARDS HAS BEEN CHECKED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.glow-on-hovery').attr('disabled', false);
			$('.glow-on-hovers').attr('disabled', true);
		}
        }
      });
      $('.glow-on-hovers').click(function(){
      Swal.fire({title: 'PAUSED', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.glow-on-hover').attr('disabled', false);
      $('.glow-on-hovers').attr('disabled', true);      
      	callBack.abort();
      	return false;
      });
    });
  });
});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}


  
	
</script>

  </body>
</html>