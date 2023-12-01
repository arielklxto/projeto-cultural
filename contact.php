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
        margin-bottom: 30px;
        }

        /* FORM CONTAINER */

        #main-container #contact-container {
        flex: 1 1 0;
        height: 100%; 
        text-align: center;
        }

        #main-container #contact-container #contact h1 {
        color: #000;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px 0px;
        font-size: 30px;
        text-align: center;
        }

        #main-container #contact-container #contact {
        height: 100%;    
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
        }

        #main-container #contact-container #contact .contact-info {
        display: block;
        padding: 10px;
        border: 1px solid #EEE;
        width: 100%;
        }

        #main-container #contact-container #contact .contact-title h2 {
        color: #CCC;
        letter-spacing: 3px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px 0px;
        font-size: 25px;
        font-weight: 600;
        text-align: center;
        }

        #main-container #contact-container #contact .contact-info p {
        color: #4f4f4f;
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 10px 0px;
        font-size: 20px;
        text-align: center;
        font-weight: 600;
        }

        /* Responsive */

        @media screen and (max-width: 768px) {

            #main-container #contact-container {
                height: 100%; 
            }

            #main-container #contact-container #contact h1 {
                margin-top: 10px;
                margin-bottom: 5px;
                padding: 5px 0px;
                font-size: 30px;
            }
            #main-container #contact-container #contact .contact-info {
                padding: 0px;
            }

            #main-container #contact-container #contact .contact-title h2 {
                letter-spacing: 1px;
                margin-top: 5px;
                margin-bottom: 5px;
                padding: 5px 0px;
                font-size: 23px;
            }

            #main-container #contact-container #contact .contact-info p {
                margin-top: 15px;
                margin-bottom: 15px;
                padding: 0px;
                font-size: 15px;
            }
            
        }

        @media screen and (max-width: 425px) {

            #main-container #contact-container {
                height: 100%; 
            }

            #main-container #contact-container #contact {
                width: 80%;
            }
        }

        @media screen and (max-width: 375px) {

            #main-container #contact-container {
                height: 100%; 
            }

            #main-container #contact-container #contact {
                width: 80%;
            }

            #main-container #contact-container #contact h1 {
                margin-top: 10px;
                margin-bottom: 5px;
                padding: 5px 0px;
                font-size: 25px;
            }

            #main-container #contact-container #contact .contact-info p {
                margin-top: 15px;
                margin-bottom: 15px;
                padding: 5px 0px;
                font-size: 11px;
            }

        }


    </style>

</head>
<body class="contact">
    <main>

        <div id="main-container">

            <!-- Formulário  -->  
            <div id="contact-container">

                <div id="contact">

                    <h1>Entre em contato conosco!</h1>

                    <div class="contact-title">
                        <h2>Telefone</h2>
                    </div>
                    <div class="contact-info">
                        <p>(21) 98764-7468</p>
                    </div>
                    
                    <div class="contact-title">
                        <h2>Instagram</h2>
                    </div>
                    <div class="contact-info">
                        <p>@alvaro_roux_rosa_oficial</p>
                    </div>

                    <div class="contact-title">
                        <h2>Email</h2>
                    </div>
                    <div class="contact-info">
                        <p>maiacalonio@gmail.com <br>
                        alfredo.b.sampaio@gmail.com</p>
                    </div>

                </div>
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