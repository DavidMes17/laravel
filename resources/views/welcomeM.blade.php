@extends('layouts.main')

@section('title', '3E')

@section('content')
<div data-aos="zoom-in">
<section href="#inicio" class="sec-welcomeOne">
    <div class="container">
        <div class="text-welcome">
            <h1>Conheça a importancia do descarte consciente</h1>
            <p> A sustentabilidade visa a preservação e manuntenção do meio ambiente, 
                por diversas formas ou meios. E é de suma importância a sua presença no mundo 
                para que seja possível manter a vida na Terra, para que futuramente nossas crianças 
                tenham uma natureza para apreciar, um planeta para morar. 
                A 3e Soluções também vem realizando ações sustentáveis para deixar o nosso planeta 
                melhor no presente, para se manter no futuro.</p>
        </div>
        <lottie-player class="animation" src="https://assets9.lottiefiles.com/packages/lf20_mndgsj3k.json"  background="transparent"  speed="1"    loop  autoplay></lottie-player>
    </div>
</section>

<div class="sec-quiz">
    <a href="/Quiz3E" class="btn-quiz">Faça o nosso teste</a>
</div>
</div>
<div data-aos="flip-up">


<h1  id="Descarte" class="card-title">Conheça sobre o descarte correto</h1>
<section class="sec-welcometwo">
        <div class="container">


        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/plastico-lixeira.png" alt="" class="cardP-img" srcset="">
                        <h3>Plastico</h3>
                         <p>Para materiais de plástico, a lixeira vermelha é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de plástico</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/metal-lixeira.png" alt="" class="cardP-img" srcset="">
                        <h3>Metal</h3>
                        <p>Para materiais de metais, a lixeira amarela é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de metais</p>
                </div>
            </div>
        </div>



        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/papeis-lixeiras.png" alt="" class="cardP-img" srcset="">
                        <h3>Papeis</h3>
                        <p>Para materiais de papel, a lixeira azul é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de papel</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="/assets/vidros-lixeiras.png" alt="" class="cardP-img" srcset="">
                        <h3>Vidros</h3>
                        <p>Para materiais de vidros, a lixeira azul é a correta para o descarte. Nela você poderá descartar
                        materiais feitos de vidros</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


</div>


<div data-aos="fade-up">


<section class="sec-welcomethree">
    <div class="container">
        <div class="wave">    
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(203,86,22)" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,202.7C640,192,800,128,960,117.3C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>        </div>


        <h1 id="Nossos_Projetos" class="title-welcomethree">Conheça Sobre nossos projetos</h1>
            <div class="content">    
                
                <div class="Ecoenel">
                    <div class="text-Ecoenel">
                        <h2>Ecoenel</h2>
                        <p>Reconhecimento nacional e internacional, o projeto Ecoenel é um programa da Enel Ceará, que virou referência em ações 
                        de sustentabilidade. Lançado em 2007, o projeto visa promover a troca de resíduos recicláveis por bônus na conta de luz
                        nos estados do Ceará, Goiás e Rio de Janeiro. Formando uma rede de parcerias entre cliente, empresa e reciclador, 
                        procura  incentivar a população a adotar a separação de resíduos recicláveis em suas residências, proporcionando, 
                        em contrapartida, uma alternativa para contribuir na redução da conta de energia.</p>
                    </div>
                    <img class="Ecoenel-img" src="/assets/Ecoenel01.jpg" alt="">
                </div>

            

            <div class="prj2">
                <img class="Ecocelpa" src="/assets/Ecocelpa.jpg" alt="">
                    <div class="text-Ecocelpa">
                        <h2>Ecocelpa</h2>
                        <p>Com o intuito de minimizar os impactos que a produção desenfreada de resíduos acarreta ao meio ambiente, algumas empresas e instituições, 
                            com o apoio da sociedade, buscam conscientizar a população sobre a destinação correta desses materiais. É o caso da Celpa, 
                            que em março de 2015, implantou na Região Metropolitana de Belém o projeto Ecocelpa, que consiste em disponibilizar postos de coletas de 
                            resíduos recicláveis e um dos benefícios da ação é possibilitar a troca de material reciclado por descontos na conta de energia, 
                            incentivando, desta maneira, a prática da coleta seletiva por parte de seus clientes,  sejam pessoas físicas ou 
                            empresas que tem como foco a conscientização ambiental por meio da destinação adequada dos resíduos.</p>
                    </div>
            </div>

            <div class="RecicleMais">
                <div class="text-RecicleMais">
                    <h2>Recicle Mais, Pague Menos</h2>
                    <p>Em execução desde 2012 o Projeto Recicle Mais, Pague Menos é uma iniciativa da Eletropaulo que tem como objetivo a conscientização da mudança de
                        hábito da população em relação ao descarte correto dos materiais recicláveis, além da troca de resíduos recicláveis por desconto na conta
                         de energia elétrica.</p>
                    </div>
                    <img class="RecicleMais-img" src="/assets/RecicleMais.jpg" alt="">
            </div>
        </div>
</section>
</div>

@endsection
