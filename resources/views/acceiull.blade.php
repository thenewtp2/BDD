@extends('layouts.master2')
@section('content')

<div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
        <ul class="right chevron">
          <li class=""><a href="{{url('inscrire')}}" class="">S'inscrire</a></li>
            <li id="nav-login-btn" class="active"><a href="{{url('login')}}" class="">Login</a></li>
        </ul>
        </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
        <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            <div class="item">
              <div class=" s-12 center">
                <img src="https://www.algerie-focus.com/wp-content/uploads/2020/10/coronavirus-4914026_1280-1-1.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"></p>
                      <p class="text-white text-size-16 margin-bottom-40"><br> </p>  
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="C:\Users\AZIZIMOUD\Downloads\cdc-k0KRNtqcjfw-unsplash.jpg" alt="">
              <h2 class="text-thin">Qu'est ce que le covid 19 ?</h2>
              <p>Le nouveau coronavirus 2019 (2019-nCoV) est un nouveau virus qui provoque des maladies respiratoires.</p> 
              <a class="text-more-info text-primary-hover" href="/">Read more</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="C:\Users\AZIZIMOUD\Downloads\is (8).jpg" alt="">
              <h2 class="text-thin">Quand utiliser un masque ?</h2>
              <p>Si vous êtes en bonne santé, vous ne devez utiliser un masque que si vous vous occupez d’une personne présumée infectée par le 2019‑nCoV.</p> 
              <a class="text-more-info text-primary-hover" href="/">Read more</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="C:\Users\AZIZIMOUD\Downloads\is (9).jpg" alt="">
              <h2 class="text-thin">Quels sont les symptômes de la COVID-19 ?</h2>
              <p>Les symptômes les plus fréquents de la ‎COVID-19 sont la fièvre, la toux sèche et la ‎fatigue.</p> 
              <a class="text-more-info text-primary-hover" href="/">Read more</a>                
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 2 -->
      
<!-- Section 2 -->
<section class="section background-primary text-center">
  <div class="line">
    <div class="s-12 m-10 l-8 center">
      <h2 class="headline text-thin text-s-size-30"></h2>
      <p class="text-size-20"></p>
    </div>
  </div>  
</section>

<!-- Section 3 -->
<section class="section background-white">
  <div class="full-width text-center">
    <img class="center margin-bottom-30" style="margin-top: -210px;" src="" alt="">
    <div class="line">
      <h2 class="headline text-thin text-s-size-30"> <span class="text-primary"></span> </h2>
      <p class="text-size-20 text-s-size-16 text-thin"> </p>
      <i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
      <p class="text-size-20 text-s-size-16 text-thin text-primary"></p>
    </div>  
  </div>  
</section>
<hr class="break margin-top-bottom-0">















      
      <!-- Section 4 --> 
      <section class="section background-white">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Publications <span class="text-primary"></span></h2>
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="C:\Users\AZIZIMOUD\Downloads\e10a377387916737276343e9718ee508_Generic.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">
                          Les examens du Bac et du BEM reportés au mois de septembre</a></h3>
                        <p>ALGER- Le Conseil des ministres, réuni dimanche sous la présidence du Président de la.</p>
                        <a class="text-more-info text-primary-hover" href="{{url('pub1')}}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="C:\Users\AZIZIMOUD\Downloads\7a520a40846c84c6ec9673f93d20b9ce_Generic.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">
                          Alger: port obligatoire de masques pour les propriétaires des locaux commerciaux et leurs employés</a></h3>
                        <p>ALGER - Le port de masques est désormais obligatoire pour les propriétaires et.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            
            
            </div>
          </div>
        </div>    
      
        </div>    
      </section>
      
    </main>

@endsection