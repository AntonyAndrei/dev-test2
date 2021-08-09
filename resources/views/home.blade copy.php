<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\bootstrap.css">
    <title>DevTest2</title>
</head>

<body>

	<!--Formulário-->
    <div class="container">
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
                x
            </div>
            <div class="col-md-3">
                x
            </div>
        </div>

    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script type="text/javascript">
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
</body>
</html>
