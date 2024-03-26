<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Código fonte formulario php"/>
        <meta name="keywords" content="formulario php, bootstrap, bootstrap validator"/>
        <meta name="author" content=""/>

        <title>Cadastro de Reserva</title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
        <style>
            main, footer, .mensagem-alerta{
                text-align: center; 
            }
            form{
                max-width: 800px;
                padding-top: 30px;
                display: block;
                margin: 0 auto;
            }
            .mensagem-alerta{
                max-width: 500px;
                margin: 20px auto;
            }
        </style>

    </head>
    <body>

        <main class="container">
        <div id="contact-us" class="contact-us small-11 large-12 columns no-padding small-centered">

<div class="global-page-container">
    <div class="contact-us-title small-12 columns no-padding">
    <h3>Faça a sua reserva</h3>
    <hr></hr>
    </div>
    

    <div class="reservation-form small-12 columns no-padding">

        <form action="adm/reserva/cadastrar-reserva.php" method="post" role="form" data-toggle="">

            <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
        
                <input type="text" name="nome" class="field" placeholder="Nome completo"/>
                
                <input type="text" name="email" class="field" placeholder="E-mail"/>
                
                <textarea type="text" name="mensagem" class="field" placeholder="Mensagem"></textarea>


            </div>

            <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
                <input type="text" name="telefone" class="field" placeholder="Telefone"/>
                
                <input type="datetime-local" name="data" class="field" placeholder="Data e hora"/>

                <input type="text" name="npessoas" class="field" placeholder="Número de pessoas"/>

                <input type="submit" name="submit" value="Reservar"/>

            </div>


        </form>
    </div>

</div>
</div>
        </main>
        <footer>
            <hr>
            <div class="copyright">Desenvolvido por
                <a href="" target="_blank">SENAC</a>
            </div>  
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    </body>
</html>
