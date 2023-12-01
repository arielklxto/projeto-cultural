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
        /* PARALLAX */
        .content {
            color: #777;
            background-color: #FFF;
            text-align: justify;
            padding: 20px 80px;
        }

        .content h3 {
            padding: 10px;
            color: #111;
            text-align: center;
        }

        .box-1, .box-2, .box-3, .box-4, .box-5, .box-6, .box-7, .box-8 {
            height: 100%;
            border: 2px solid #B9B9B9;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
            background-attachment: fixed;
        }

        .box-1 {
            background-image: url(./img/livros.jpg);
        }

        .box-2 {
           background-image: url(./img/plateia.jpg);
        }

        .box-3 {
           background-image: url(./img/equipe.png);
           width: 100%;
           background-size: contain;
           background-position: bottom;
        }

        .box-4 {
           background-image: url(./img/alfredo-entrevista.jpg);
        }
        .box-5 {
           background-image: url(./img/joão-luiz-entrevista.jpg);
        }
        .box-6 {
           background-image: url(./img/bernardo-entrevista.jpg);
        }

        .box-7 {
           background-image: url(./img/luciana.jpg);
           background-size: contain;
        }

        .box-8 {
           background-image: url(./img/wagner.jpg);
           background-position: top center;
        }

        /* Responsive */

        @media screen and (max-width: 425px) {
             /* PARALLAX */
        .content {
            padding: 10px 30px;
        }

        .content h3 {
            padding: 5px;
        }

        .box-3 {
           background-image: url(./img/equipe.png);
           width: 100%;
           background-size: contain;
        }

        .box-4 {
           background-image: url(./img/alfredo-entrevista.jpg);
           background-position: right center;
        }
        .box-5 {
           background-image: url(./img/joão-luiz-entrevista.jpg);
           background-position: right center;
        }
        .box-6 {
           background-image: url(./img/bernardo-entrevista.jpg);
           background-position: center;
        }

    }

    </style>

</head>    

<body class="home">
    
    <main>

        <div class="content">
            <h3>O Projeto</h3>
            <p>O projeto..., sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, tenetur! Nam molestias corporis sapiente repellendus eos, voluptatibus dolore est rem ab ipsa quaerat fugiat provident aperiam reiciendis error deleniti beatae!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quas quibusdam quia ut commodi placeat! Doloremque at pariatur repellendus? Nihil excepturi obcaecati harum dolorum. Commodi nemo quod similique necessitatibus dolore.</p>
        </div>
        <!-- FOTO DO LIVRO -->

        <div class="box-1">
            
        </div>

        <div class="content">
            <p>O livro foi lançado...Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>O concurso literário... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, tenetur! Nam molestias corporis sapiente repellendus eos, voluptatibus dolore est rem ab ipsa quaerat fugiat provident aperiam reiciendis error deleniti beatae!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quas quibusdam quia ut commodi placeat! Doloremque at pariatur repellendus? Nihil excepturi obcaecati harum dolorum. Commodi nemo quod similique necessitatibus dolore.</p>
        </div>

        <!-- FOTO DA PLATEIA -->

        <div class="box-2">
            
        </div>

        <div class="content">
            <h3>A Equipe</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia molestiae fugiat, veniam eius quo assumenda animi cupiditate sunt corrupti rerum explicabo obcaecati sed provident maiores dolor aliquam doloremque ipsam tenetur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure exercitationem impedit, soluta animi totam expedita veritatis neque temporibus saepe tempore iste necessitatibus, illum harum culpa libero, repellat ab consectetur? Saepe.</p>
        </div>

        <!-- FOTO DA EQUIPE -->
        <div class="box-3">
            
        </div>

        <div class="content">
            <h3>Alfredo Barreto Sampaio</h3>
            <p>Curriculo do Alfredo..., sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, sunt perspiciatis assumenda aliquid sequi fugiat minima non iure illo voluptatibus. Earum cupiditate, omnis porro in veritatis maxime ipsa rerum nostrum!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ipsa quas natus molestias et ad omnis nulla atque voluptate ullam cupiditate, quod nobis facere alias aliquam aliquid, voluptates odit consectetur.</p>
        </div>
        <!-- FOTO DO ALFREDO -->

        <div class="box-4">
            
        </div>

        <div class="content">
            <h3>João Luiz Calonio</h3>
            <p>Curriculo do João..., sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, sunt perspiciatis assumenda aliquid sequi fugiat minima non iure illo voluptatibus. Earum cupiditate, omnis porro in veritatis maxime ipsa rerum nostrum!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ipsa quas natus molestias et ad omnis nulla atque voluptate ullam cupiditate, quod nobis facere alias aliquam aliquid, voluptates odit consectetur.</p>
        </div>

        <!-- FOTO DO JOÃO -->

        <div class="box-5">
            
        </div>

        <div class="content">
            <h3>Bernardo Marinho Sampaio</h3>
            <p>Curriculo do Bernardo..., sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, sunt perspiciatis assumenda aliquid sequi fugiat minima non iure illo voluptatibus. Earum cupiditate, omnis porro in veritatis maxime ipsa rerum nostrum!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ipsa quas natus molestias et ad omnis nulla atque voluptate ullam cupiditate, quod nobis facere alias aliquam aliquid, voluptates odit consectetur.</p>
        </div>

        <!-- FOTO DO BERNARDO -->

        <div class="box-6">
            
        </div>

        <div class="content">
            <h3>Luciana Gilles</h3>
            <p>O livro foi lançado...Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>O concurso literário... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, tenetur! Nam molestias corporis sapiente repellendus eos, voluptatibus dolore est rem ab ipsa quaerat fugiat provident aperiam reiciendis error deleniti beatae!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quas quibusdam quia ut commodi placeat! Doloremque at pariatur repellendus? Nihil excepturi obcaecati harum dolorum. Commodi nemo quod similique necessitatibus dolore.</p>
        </div>

        <!-- FOTO DA LUCIANA -->

        <div class="box-7">
            
        </div>

        <div class="content">
            <h3>Wagner Uchôa</h3>
            <p>O livro foi lançado...Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum accusantium ex ipsa similique repudiandae, suscipit dolor, provident atque quod magni reprehenderit? Exercitationem atque expedita numquam esse voluptatem quos quasi ipsa?</p>
            <p>O concurso literário... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, tenetur! Nam molestias corporis sapiente repellendus eos, voluptatibus dolore est rem ab ipsa quaerat fugiat provident aperiam reiciendis error deleniti beatae!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quas quibusdam quia ut commodi placeat! Doloremque at pariatur repellendus? Nihil excepturi obcaecati harum dolorum. Commodi nemo quod similique necessitatibus dolore.</p>
        </div>

        <!-- FOTO DO WAGNER -->

        <div class="box-8">
            
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