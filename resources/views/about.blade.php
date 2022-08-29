@extends('layouts.main')

@section('title', '3E')

@section('content')
    <section class="about-sec">
        <div class="container">
            <div class="about-text">
                <h2>Sobre-nós da 3e 
                
                <div id=flip>
                    <div><div style="color: var(--color-secondary);">Energética </div></div>
                    <div><div style="color: var(--color-primary);">Eficiência</div></div>
                    <div><div style="color: var(--color-primary);">Engenharia</div></div>

                </div>
                </h2>

                <p>Somos uma empresa focada em resultados e inovação tecnológica, nossa motivação é poder contar com nossos clientes que depositam em nossa equipe confiança e credibilidade. 
                    Oferecemos soluções no planejamento, gestão, execução e inovação em projetos de Eficiência Energética e Sustentabilidade.
                
                </p>
            </div>
            <div class="about-animation">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_wcwcr5u6.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>         </div>
    </div>
</section>

@endsection