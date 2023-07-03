<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Pizzas</h6>
                    <h2>A nossa seleção das melhores pizzas com o melhor sabor</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)
                <div class="item">
                    
                    <div style="background-image: url('/imagempizza/{{$data->imagem}}');"  class='card'>
                        <div class="price">
                            <h6>{{$data->preco}}</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>{{$data->titulo}}</h1>
                            <p class='description'>{{$data->descricao}}</p>
                            <div class="main-text-button">
                                <div class="scroll-to-section"><a href="#reservation">Faça uma reserva<i class="fa fa-angle-down"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->