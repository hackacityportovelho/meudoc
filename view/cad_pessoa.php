<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<html>
    <body class="bg-light">
        <div class="container">
            
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Identificação</h4>
                <form class="needs-validation" novalidate="">

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="tipodepessoa">Tipo de Pessoa</label>
                            <select class="custom-select d-block w-100" id="tipodepessoa" required="">
                            <option value="">Selecionar...</option>
                            <option>Pessoa Física</option>
                            <option>Pessoa Jurídica</option>
                            </select>
                            <div class="invalid-feedback">
                            Por favor selecione o tipo de pessoa.
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nomecompleto">Nome Completo</label>
                            <input class="form-control" id="nome_completo" placeholder="João da Silva Sauro" value="" required="" type="text">
                            <div class="invalid-feedback">
                            Por favor insira o nome completo.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="datadenascimento">Data de Nascimento</label>
                            <input class="form-control" id="data_de_nascimento" placeholder="00/00/0000" value="" required="" type="text">
                            <div class="invalid-feedback">
                            Por favor informe sua data de nascimento.
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefone">Telefone</label>
                            <input class="form-control" id="telefone" placeholder="(00)00000-0000" value="" required="" type="text">
                            <div class="invalid-feedback">
                            Por favor insira o número de telefone.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input class="form-control" id="email" placeholder="voce@exemplo.com" type="email">
                            <div class="invalid-feedback">
                            Por favor insira seu endereço de email.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <label for="cpfoucnpj">CPF ou CNPJ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input class="form-control" id="cpfoucnpj" placeholder="000.000.000-00 ou 00.000.000/0001-91" required="" type="text">
                                <div class="invalid-feedback" style="width: 100%;">
                                Por favor insira seu CPF.
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="rg">RG</label>
                                <input class="form-control" id="rg" placeholder="000000-0" value="" required="" type="text">
                                <div class="invalid-feedback">
                                Por favor informe seu RG.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="órgãoexpedidor">Órgão Expedidor</label>
                                <input class="form-control" id="órgão_expedidor" placeholder="SSP-RO ou SESDEC-RO" value="" required="" type="text">
                                <div class="invalid-feedback">
                                Por favor insira o órgão expedidor do seu documento.
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="títulodeeleitor">Título de Eleitor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input class="form-control" id="título_de_eleitor" placeholder="0000 0000 0000 00" required="" type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nomedamãe">Nome Da Mãe </label>
                                <input class="form-control" id="nome_da_mãe" placeholder="Josefa da Silva Sauro" value="" required="" type="text">
                                <div class="invalid-feedback">
                                Por favor informe o nome da sua mãe.
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="nomedopai">Nome do Pai</label>
                                <input class="form-control" id="nome_do_pai" placeholder="Josué da Silva Sauro" value="" required="" type="text">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="observação">Observação</label>
                                <input class="form-control" id="observação" placeholder="Responsavel legal" value="" required="" type="text">
                            </div>
                        </div>

                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Endereço</h4>
                            <form class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cep">CEP </label>
                                        <input class="form-control" id="cep" placeholder="00.000-000" value="" required="" type="text">
                                        <div class="invalid-feedback">
                                        Por favor informe o CEP da sua residência ou estabelecimento.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="rua">Rua </label>
                                        <input class="form-control" id="cep" placeholder="Salgado filho/Av. Sete de setembro" value="" required="" type="text">
                                        <div class="invalid-feedback">
                                        Por favor informe a rua/avenida em que está localizada sua residência ou estabelecimento.
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="número">Número </label>
                                        <input class="form-control" id="número" placeholder="0000" value="" required="" type="text">
                                        <div class="invalid-feedback">
                                        Por favor informe o número da sua residência ou estabelecimento.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="bairro">Bairro </label>
                                        <input class="form-control" id="bairro" placeholder="Agenor de Carvalho" value="" required="" type="text">
                                        <div class="invalid-feedback">
                                        Por favor informe o bairro em que está localizada a sua residência ou estabelecimento.
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="complemento">Complemento</label>
                                        <input class="form-control" id="complemento" placeholder="Ex:Próximo ao posto de saúde do triângulo" required="" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="país">País</label>
                                        <input class="form-control" id="país" placeholder="Ex:Brasil" required="" type="text">
                                        <div class="invalid-feedback">
                                        Requer a identificação do seu país.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="uf">UF</label>
                                        <input class="form-control" id="uf" placeholder="Ex:Rondônia" required="" type="text">
                                        <div class="invalid-feedback">
                                        Requer a identificação da unidade federativa.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cidade">Cidade</label>
                                        <input class="form-control" id="cidade" placeholder="Ex:Porto Velho" required="" type="text">
                                        <div class="invalid-feedback">
                                        Requer a identificação da sua cidade.
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar dados</button>
                </form>
            </div>
        </div>
    </body>
</html>