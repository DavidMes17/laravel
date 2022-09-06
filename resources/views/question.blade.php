<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/question.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Questions</title>
</head>
<body>
<main class="tela-principal">
<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="rgb(203,86,22)" fill-opacity="1" d="M0,224L60,240C120,256,240,288,360,256C480,224,600,128,720,106.7C840,85,960,139,1080,149.3C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
    <section class='conteudos'>
        
        
        <article class='questoes'>
            
            <header class='questao'>
            <img style="-webkit-user-select: none;" class="Logo" src="assets/3e-logo-color.png" alt="" srcset="">
            <article style="-webkit-user-select: none;" id='aviso' class="questions" >
                Questão <span style="-webkit-user-select: none;" id='numero'></span>/<span style="-webkit-user-select: none;" id='total'></span>
            </article>
            <span style="-webkit-user-select: none;" id='numQuestao'></span>
            <h2 style="-webkit-user-select: none;" id='pergunta'></h2>
        </header>
        
        <div class = "vertical"></div>

        <div class='choices'>
        <article style="-webkit-user-select: none;" class='points' id='instrucoes'>
        Pontos 0
    </article>
            <ol style="-webkit-user-select: none;" type='A' id='alternativas'>
                <ol type='A' id='alternativas'>
                <li id='a' value='1A' class='respostas correcao' onClick='verificarSeAcertou(this, this)'></li>
                <li id='b' value='1B' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                <li id='c' value='1C' class='respostas' onClick='verificarSeAcertou(this, this)'></li>
                <li id='d' value='1D' class='respostas' onClick='verificarSeAcertou(this, this)'></li>

            </ol>
        </div>
    </article>
    
    <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#ffd700" fill-opacity="1" d="M0,256L34.3,229.3C68.6,203,137,149,206,154.7C274.3,160,343,224,411,213.3C480,203,549,117,617,96C685.7,75,754,117,823,160C891.4,203,960,245,1029,218.7C1097.1,192,1166,96,1234,74.7C1302.9,53,1371,107,1406,133.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
</svg>
</section>

</main></body>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="./js/question.js"></script>
</html>