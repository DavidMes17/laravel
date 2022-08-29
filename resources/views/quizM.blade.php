@section('title', 'Quiz-3E')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">

    <link rel="stylesheet" href="./css/registerQuiz.css">


    <title>Registro</title>
</head>
<body>
<div class="bola01"></div>
<div class="bola02"></div>

<div class="bola03"></div>
<div class="bola04"></div>


<section class="sec-quiz">
    <div class="container">
        
        <div class="bolão"></div>
        <div class="bolão02"></div>
        
        <div class="card-register">
            
            <img src="/assets/3e-logo-color.png" alt="">
            <h2 class="text-register">Está pronto para começar?</h2>
                <div class="box">
                    <form action="/question" method="POST">
        @csrf
	                    <div class="input-container">
                            <input  type="text" id="name" name="nome" required="" />
                            
		                     <label>Digite seu nome</label>
	                    </div>
                        <input class="btn" id="btnSubmit" type="submit" value="Começar  ">
                        <button class="btnPoints" id="btnSubmit" onclick="ForTo(event)">Pontuação</button>
                    </form>
                </div>
        </div>
    <div class="bolão03"></div>
    <div class="bolão04"></div>

    </section>
    
    <div class="bola05"></div>
    <div class="bola06"></div>

    <div class="bola07"></div>
    <div class="bola08"></div>

</body>
<script src="/js/quiz.js" defer></script>

</html>
