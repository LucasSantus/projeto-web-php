 <!DOCTYPE html>
<html lang="pt-br">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="static/css/styles.css"/>
        <script type="text/javascript" src="static/js/index.js" defer></script>
        <title>Development WebSite</title>
    </head>

    <body>
        <header>
            <a href="#" class="logo">Development WebSite</a>
            <div class="header-right">
                <div class="container">
                    <a class="active" href="#">Home</a>
                    <a href="#">Contact</a>
                    <a href="#">About</a>
                </div>
            </div>
        </header>

        <main>
            <div class="content">
                <div id="div-form">
                    <h2>Cadastrar</h2>
                        <form method="POST" action="processar.php">
                            <div>
                                <label style="padding-top: 5px">Nome: </label>
                                <input id="nome" class="form-input" type="text" name="nome" placeholder=" Insira o nome: " style="width:80%;" required/>
                            </div>
                            <div>
                                <label style="padding-top: 5px">E-mail: </label>
                                <input id="email" class="form-input" type="email" name="email" placeholder=" Insira o e-mail:" style="width:80%;" required/>
                            </div>
                            <div>
                                <label style="padding-top: 5px">Telefone: </label>
                                <input id="telefone" class="form-input" type="text" name="telefone" placeholder=" Insira o telefone:" style="width:80%;" required/>
                            </div>
                            <div>
                                <label style=" padding-top: 5px">Mensagem</label>
                                <textarea name="mensagem" placeholder="Digite a mensagem..." style="width:80%;"></textarea>
                            </div>
                            <button type="submit" value="Adicionar" name="submit">SEND</button>
                        </form>
                    <!-- <table>
                        <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Telefone
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tabela-pessoa"></tbody>
                    </table> -->
                </div>
            </div>
        </main>
        
        <footer>
            <h5>Copyright © 2021 Development WebSite</h5>
        </footer>
    </body>
</html>

<!--<form method="POST" action="processar.php">
                    <div>
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome..." />
                    </div>
                    <div>
                        <label>Telefone</label>
                        <input type="text" name="telefone" placeholder="Digite seu telefone..." />
                    </div>
                    <div>
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu email..." />
                    </div>
                    <div>
                        <label>Mensagem</label>
                        <textarea name="mensagem" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                </form>-->