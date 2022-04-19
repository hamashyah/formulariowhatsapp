# Utilizando variaveis de laravel pra criar o formulario, porem pode substituir pelas suas
   									<div class="form-group">
											<input type="text" name="name" class="form-control" required="required" id="name" placeholder="{{ __("Nome") }}">
										</div>
									</li>
									<li class="search_area">
										<div class="form-group">
											<textarea id="msg" name="message" class="form-control" rows="5" required="required" placeholder="{{ __("Sua mensagem") }}"></textarea>
										</div>
										 
  <button onclick="send_handle()" class="fa fa-whatsapp btn btn-block btn-thm h55" ><span class="text">  Enviar por WhatsApp </span></button>
<script>
 function send_handle(){

    let msg= document.getElementById("msg").value;

    let name= document.getElementById("name").value;
  
  var win = window.open(`https://wa.me/55{{ $row->phone }}?text=Ol%C3%A1+meu+nome+%C3%A9+${name}%2C%20${msg}`, '_blank');
 // win.focus();
}
</script>
