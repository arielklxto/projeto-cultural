<?php
    include_once("templates/header.php");       
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Projeto Devaneio</title>
    
    <!-- CSS inline -->
    <style>

        /* Containers */

        #main-container {
        display: flex;
        }

        /* FORM CONTAINER */

        #main-container #form-container {
        flex: 1 1 0;
        height: 100%; 
        text-align: center;
        }

        #main-container #form-container #contact-form h2 {
        color: #000;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px 0px;
        font-size: 30px;
        text-align: center;
        }

        #main-container #form-container #contact-form {
        height: 100%;    
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
        }

        #main-container #form-container #contact-form input {
            background-color: #FFF;
        }

        #main-container #form-container #contact-form input,
        #main-container #form-container #contact-form label,
        #main-container #form-container #contact-form select,
        #main-container #form-container #contact-form p {
        display: block;
        padding: 10px;
        border: 1px solid #EEE;
        width: 100%;
        color: #AAA;
        margin-bottom: 10px;
        font-size: 20px;
        }

        #main-container #form-container #contact-form label {
        color: #4f4f4f;
        font-weight: 600;
        border: none;
        }

        #main-container #form-container #contact-form input::placeholder {
        color: #CCC;
        }

        /* SUBMIT */

        #main-container #form-container #contact-form #contact-form-submit {
            width: 100%;
            margin: auto;
        }

        #main-container #form-container #contact-form #contact-form-submit input[type="submit"] {
            
        background-color: #350244fd;
        color: #FFF;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        width: 100%;
        margin: auto;
        border: 2px solid transparent;
        border-radius: 8px;
        transition: .5s;
        }

        #main-container #form-container #contact-form #contact-form-submit input:hover {
        border-color: #350244fd;
        color: #350244fd;
        background-color: #FFF;
        }

        #main-container #form-container #checkbox-submit {
        display: block;
        padding: 10px;
        border: 1px solid #EEE;
        width: 100%;
        color: #AAA;
        margin-bottom: 10px;
        font-size: 20px;
        }

        /* Responsive */

        @media screen and (max-width: 768px) {
            #main-container #form-container #contact-form {    
                width: 80%;
            }

            #main-container #form-container #contact-form input,
            #main-container #form-container #contact-form label,
            #main-container #form-container #contact-form select {
            padding: 5px;
            font-size: 18px;
            }

            .container #msg {
            font-size: 18px;
            }

        }

        #main-container #form-container #contact-form #school-options option {
            font-size: 15px;
        }

        @media screen and (max-width: 320px) {

            #main-container #form-container #checkbox-submit p {
                font-size: 18px;
            }
        }     

    </style>

</head>

    <body class="student">
        <main>

        <div class="container">
                <?php if(isset($printMsg) && $printMsg != ''): ?>
                    <p id="msg"><?= $printMsg ?></p>
                <?php endif; ?>
        </div>
            <div id="main-container">
                    
                <div id="form-container">

                   <!-- Formulário aqui -->

                   <form action="<?= $BASE_URL ?>config/process.php" method="POST" enctype="multipart/form-data" id="contact-form">

                        <input type="hidden" name="type" value="create">

                        <h2>Nos mande a sua história!</h2>

                        <label for="name">Nome Completo:</label>
                        <input type="text" name="name" placeholder="Digite seu nome" required oninvalid="this.setCustomValidity('Por favor, digite seu nome.')" oninput="this.setCustomValidity('')">

                        <label for="enrollment">Matrícula:</label>
                        <input type="number" name="enrollment" placeholder="Nº da matrícula" required oninvalid="this.setCustomValidity('Por favor, insira sua matrícula.')" oninput="this.setCustomValidity('')">

                        <label for="school">Escola:</label>
                        <select id="school-options" name="school" required oninvalid="this.setCustomValidity('Por favor, selecione uma opção.')" oninput="this.setCustomValidity('')">
                                <option value="" disabled selected hidden>Selecione uma opção</option>
                                <option value="escola1">Escola 1</option>
                                <option value="escola2">Escola 2</option>
                                <option value="escola3">Escola 3</option>
                                <option value="escola4">Escola 4</option>
                                <option value="escola5">Escola 5</option>
                                <option value="escola6">Escola 6</option>
                                <option value="escola7">Escola 7</option>
                                <option value="escola8">Escola 8</option>
                                <option value="escola9">Escola 9</option>
                                <option value="escola10">Escola 10</option>
                                <option value="escola11">Escola 11</option>
                                <option value="escola12">Escola 12</option>
                                <option value="escola13">Escola 13</option>
                                <option value="escola14">Escola 14</option>
                                <option value="escola15">Escola 15</option>
                                <option value="escola16">Escola 16</option>
                                <option value="escola17">Escola 17</option>
                                <option value="escola18">Escola 18</option>
                                <option value="escola19">Escola 19</option>
                                <option value="escola20">Escola 20</option>
                        </select>

                        <label for="file">Sua história (apenas PDF):</label>
                        <input type="file" name="file" required oninvalid="this.setCustomValidity('Por favor, selecione um arquivo pdf')" oninput="this.setCustomValidity('')">

                        <div id="checkbox-submit">
                        <input type="checkbox" name="terms" required oninvalid="this.setCustomValidity('Por favor, aceite os termos')" oninput="this.setCustomValidity('')"><p>Eu declaro que as informações acima são verdadeiras e que a produção textual enviada é de minha autoria.</p>
                        </div>

                        <div id="contact-form-submit">
                            <input type="submit" value="Enviar">
                        </div>

                    </form>

                </div>    
            </div>  
                   

        </main>
    








<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<?php
    include_once("templates/footer.php");  
?>