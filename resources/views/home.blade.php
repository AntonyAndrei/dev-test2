@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <!--Formulário-->
    <div class="container" style="margin-top: 30px">
        <h1>Realize seu Pedido!</h1></br>

        <div class="row">
            <div class="col-md-2">
            <label for="cep">CEP</label>
                            <input 
                                id="cep" 
                                class="form-control" 
                                placeholder="XXXXX-XXX" 
                                type="text" required/>
            </div>
            <div class="col-md-6">
            <label for="logradouro">Logradouro</label>
                            <input 
                                id="logradouro" 
                                class="form-control" 
                                placeholder="Rua Cosme de damião"
                                type="text" required/>
            </div>
            <div class="col-md-1">
            <label for="numero">Número</label>
                            <input 
                                id="numero"
                                class="form-control" 
                                type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <label for="complemento">Complemento</label>
                            <input 
                                id="complemento"
                                class="form-control" 
                                placeholder="Perto da panificadora"
                                type="text"/>
            </div>
            <div class="col-md-2">
            <label for="localidade">Cidade</label>
                            <input 
                                id="cidade" 
                                class="form-control" 
                                placeholder="Aracaju"
                                type="text"/>
            </div>
            <div class="col-md-3">
            <label for="bairro">Bairro</label>
                            <input 
                                id="bairro" 
                                class="form-control" 
                                placeholder="Coroa do Meio"
                                type="text" required/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            <label for="uf">Estado</label>
                <select class="form-select" id="uf">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="col-md-3">
                <div class="form-check" style="margin-top: 30px">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Salvar informações
                    </label>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 30px; align:right">
                <button type="submit" onclick="enviar()" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </div>
@endsection

@section('javascript')

	<script type="text/javascript">

        function enviar(){
            alert('Pedido enviado!');
        }

		$("#cep").focusout(function(){
			$.ajax({

				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json',

				dataType: 'json',

				success: function(resposta){

					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);

					$("#numero").focus();
				}
			});
		});
        
	</script>
@endsection