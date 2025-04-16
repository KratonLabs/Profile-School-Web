<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel"
        data-bs-interval="5000">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('/gp/assets/img/hero-bg.jpg') }}');">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Selecao</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid...</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('{{ asset('selecao/assets/img/working-4.jpg') }}');">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid...</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('{{ asset('selecao/assets/img/working-3.jpg') }}');">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid...</p>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
