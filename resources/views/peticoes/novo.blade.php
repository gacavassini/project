@extends('layout.site')

@section('conteudo')
	<div style="clear: both;"></div> 

		<div class="conteudo">
			<div class="menuLateral">
				<div class="global-div">

					<ul class="abas">
					    <li><a href="#Base">Base</a></li>
					    <li><a href="#Pedidos">Pedidos</a></li>
					 </ul>
					
					<div id="todo"></div>

						<div id="conteudoMenuL">

							<div id="Base">
								<br />
								<form action="#">						 
					 				<div class="select-box">						    
					    				<label for="select-box1" class="label select-box1"><span class="label-desc">Selecionar Item</span> </label>
					   						<select id="select-box1" class="select">
					    						@foreach($empresas as $empresa)
						    						<option value="{{$empresa->nome}}">{{$empresa->nome}}</option>
					     						@endforeach
				    						</select>						    
		  							</div>			   
								</form> 
								<!-- se selecionar o endereçamento -->
								<form action="#">						 
					 				<div class="select-box">						    
					    				<label for="select-box1" class="label select-box1"><span class="label-desc">Selecionar Endereçamento</span> </label>
					   						<select id="select-box1" class="select">
					    						<option value="Choice 1">Endereçamento 1</option>
					     						<option value="Choice 2">Endereçamento 2</option>
					     						<option value="Choice 2">Endereçamento 3</option>
				    						</select>						    
		  							</div>			   
								</form> 


								<button  id="savePed" type="button" name="insereBase">Inserir</button>  	
							</div>

							<div id="Pedidos"> <br />
							    <h2>Selecione os Pedidos</h2>
									<div class="checkBoxContainer">
										<div class="checkbox"> 
											<form class="cb">
											<INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op1"> opção1 <br />
											</form>
										</div>
									</div>			        
							<button  id="savePed" type="button" name="inserePedido">Inserir</button> 	
							</div>	

						</div>
				</div>
			</div>

			<div class="peticao">
				<h2>
					Montar Petição 
				</h2>
				<br>
   
       				<!-- (2): textarea will replace by CKEditor -->
        			<form action="" method="post">
 
      				 <textarea class="ckeditor" name="editor1" cols="80" rows="30" style="height: 90%">
       
          			           
      				 </textarea>
         
        		<!-- (3): Javascript code to replace textarea with id='editor1' by CKEditor -->

             
    			</form>
    					<button class="myButton" name="btnSaveP">Salvar</button>
    					<button class="myButton" id="cancel" name="btnCancelP">Cancelar</button>
    			  		
				
			</div>
		
		</div>


		<div style="clear: both;"></div> 

@endsection