<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Teste Estagio</title>

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjmdVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-toggleable-md navbar-light" id="navbar">
            <div class="navbar">
                <a class="navbar-brand text-white" href="/"> <img src="images/logo_escalar.png" alt="" width="200px"></img></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link text-white h2" href="#">Planilha de orçamento Midia Indoor por licença <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-toggleable-md navbar-light" id="subheader">
            <div class="nav-item">
                <a class="nav-link text-white">Instruções: Siga a sequência de TVs, Players, Mão de Obra, Formas de Pagamento, Quantidade de Licenças e Planos, alterando as células em verde com a quantidade e o valor adequado e será gerado o orçamento na planilha abaixo.</a>
            </div>

        </nav>
    </header>
    <form method="GET" class="table container-fluid text-center">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr class="row">
                            <div class="table-bordered col-md-12 text-white"><strong>TVs</strong></div>
                        </tr>
                        <tr scope="row">
                            <th class="col-md-3">Quant.</th>
                            <th class="col-md-3">TVs</th>
                            <th class="col-md-3">Valor Unitário</th>
                            <th class="col-md-3">Valor Total</th>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant32pol" id="typeNumber" class="form-control" value= {{ $quant32pol }} />
                            </td>
                            <td class="col-md-3">TV 32 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor32pol" id="typeNumber" class="form-control" value= {{ $valor32pol }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total32pol }}</h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant40pol" id="typeNumber" class="form-control" value= {{ $quant40pol }} />
                            </td>
                            <td class="col-md-3">TV 40 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor40pol" id="typeNumber" class="form-control" value= {{ $valor40pol }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total40pol }}</h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant43pol" id="typeNumber" class="form-control" value= {{ $quant43pol }} />
                            </td>
                            <td class="col-md-3">TV 43 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor43pol" id="typeNumber" class="form-control" value= {{ $valor43pol }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total43pol }}</h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant49pol" id="typeNumber" class="form-control" value= {{ $quant49pol }} />
                            </td>
                            <td class="col-md-3">TV 49 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor49pol" id="typeNumber" class="form-control" value= {{ $valor49pol }} />
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total49pol }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant50pol" id="typeNumber" class="form-control" value= {{ $quant50pol }}/>
                            </td>
                            <td class="col-md-3">TV 50 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor50pol" id="typeNumber" class="form-control" value= {{ $valor50pol }} />
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total50pol }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant55pol" id="typeNumber" class="form-control" value= {{ $quant55pol }}/>
                            </td>
                            <td class="col-md-3">TV 55 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor55pol" id="typeNumber" class="form-control" value= {{ $valor55pol }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total55pol }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant58pol" id="typeNumber" class="form-control" value= {{ $quant58pol }}/>
                            </td>
                            <td class="col-md-3">TV 58 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor58pol" id="typeNumber" class="form-control" value= {{ $valor58pol }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total58pol }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant65pol" id="typeNumber" class="form-control" value= {{ $quant65pol }}/>
                            </td>
                            <td class="col-md-3">TV 65 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor65pol" id="typeNumber" class="form-control" value= {{ $valor65pol }} />
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total65pol }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quant75pol" id="typeNumber" class="form-control" value= {{ $quant75pol }}/>
                            </td>
                            <td class="col-md-3">TV 75 Polegadas</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valor75pol" id="typeNumber" class="form-control" value= {{ $valor75pol }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $total75pol }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="monitorLED" id="typeNumber" class="form-control" value= {{ $monitorLED }}/>
                            </td>
                            <td class="col-md-3">Monitor LED (tamanho definido por projeto)</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valorLED" id="typeNumber" class="form-control" value= {{ $valorLED }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $totalLED }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="monitorVideo" id="typeNumber" class="form-control" value= {{ $monitorVideo }}/>
                            </td>
                            <td class="col-md-3">Monitor Video Wall</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valorVideo" id="typeNumber" class="form-control" value= {{ $valorVideo }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $totalVideo }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">

                            </td>
                            <td class="col-md-3"></td>
                            <td class="col-md-3 text-white">
                                <h4> Valor Total </h4>
                            </td>
                            <td class="col-md-3 text-white">
                                <h4> R$ {{ $custoTotalTv }} </h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr class="row">
                            <div class="table-bordered col-md-12 text-white"><strong>Players</strong></div>
                        </tr>
                        <tr scope="row">
                            <th class="col-md-3">Quant.</th>
                            <th class="col-md-3">Players</th>
                            <th class="col-md-3">Valor Unitário</th>
                            <th class="col-md-3">Valor Total</th>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quantAlpha" id="typeNumber" class="form-control" value= {{ $quantAlpha }}/>
                            </td>
                            <td class="col-md-3">Player Alphasignage</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valorAlpha" id="typeNumber" class="form-control" value= {{ $valorAlpha }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $totalAlpha }}</h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quantAlpha2" id="typeNumber" class="form-control" value= {{ $quantAlpha2 }}/>
                            </td>
                            <td class="col-md-3">Player Alphasignage Segundãrio</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valorAlpha2" id="typeNumber" class="form-control" value= {{ $valorAlpha }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $totalAlpha2 }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quantTvBox" id="typeNumber" class="form-control" value= {{ $quantTvBox}}/>
                            </td>
                            <td class="col-md-3">TV Box</td>
                            <td class="col-md-3">
                                <input type="number" step="0.01" min="0.01" name="valorTvBox" id="typeNumber" class="form-control" value= {{ $valorTvBox }}/>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $totalTvBox }} </h4>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3"></td>
                            <td class="col-md-3"></td>
                            <td class="col-md-3 text-white">
                                <h4>Valor Total</h4>
                            </td>
                            <td class="col-md-3 text-white">
                                <h4> R$ {{ $custoTotalPlayers }} </h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <tbody>
                        <tr class="row">
                            <div class="table-bordered col-md-12 text-white"><strong>Mão de Obra de Instalação</strong></div>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-12">
                                <input type="number" step="0.01" min="0.01" name="valorMaoObra" id="typeNumber" class="form-control" value= {{ $valorMaoObra }} />
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <tbody>
                        <tr class="row">
                            <div class="table-bordered col-md-12 text-white"><strong>Planos</strong></div>
                        </tr>
                        <tr scope="row">
                            <th class="col-md-3">Quant.</th>
                            <th class="col-md-3">Planos</th>
                            <th class="col-md-3">Valor Unitário</th>
                            <th class="col-md-3">Valor Total</th>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-3">
                                <input type="number" name="quantPlanos" id="typeNumber" class="form-control" value= {{ $quantPlanos }}/>
                            </td>
                            <td class="col-md-3">
                                <select class="form-select" aria-label="Default select example" name="valorPlano">
                                    <option selected value="0">Selecione um Plano</option>
                                    <option value="39">Plano Bronze - R$39</option>
                                    <option value="49">Plano Prata - R$49</option>
                                    <option value="59">Plano Ouro - R$59</option>
                                    <option value="69">Plano Diamante - R$69</option>
                                </select>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $valorPlano }}</h4>
                            </td>
                            <td class="col-md-3">
                                <h4> R$ {{ $totalPlanos }}</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered container">
                    <tbody>
                        <tr scope="row">
                            <div class="table-bordered col-md-12 text-white"><strong>Orçamento</strong></div>
                        </tr>
                        <tr scope="row">
                            <th class="col-md-6 text-white">Investimento Inicial</th>
                            <th class="col-md-6 text-white">Mensalidade</th>
                        </tr>
                        <tr scope="row">
                            <td class="col-md-6">
                                <h4> R$ {{ $totalOrcamento }}</h4>
                            </td>
                            <td class="col-md-6">
                                <h4> R$ {{ $totalPlanos }}</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <input type="submit" value="Calcular Orçamento" class="btn btn-primary btn-lg">
            </div>
        </div>
    </form>
</body>

<script>
    alert("Ao colocar os dados, clique em CALCULAR ORÇAMENTO");
</script>

</html>