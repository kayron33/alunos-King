<?php 
require_once "header.php"
?>

<main>
<section class="king" id="home">

<div class="container">
    <div class="king-conteudo">
        <p class="king-p">Seja bem vindo ao painel de aluno da King</p>

        <h2 class="h2 king-titulo" id="text">
            <script>
                var text = "Aqui você aprende, e ganha por aprender.";
            </script>
        </h2>
        
    </div>
    <figure class="king-banner">
        <img src="img/imagem-para destaque.jpg" alt="" width="694" height="529" loading="lazy"
            class="w-100 animacao-banner">
    </figure>

</div>



</section>
<!--fim banner destaque king banner-->

<h1 class="planosh1">Planos</h1>
<section class="planos">

    <div class="pack-container">
    
    <div class="header">
      <p class="title1">
        INICIAL
      </p>
      <div class="price-container">
        <span>R$</span>50
        <span>/Mês</span>
      </div>
    </div>
    <div>
      <ul class="lists">
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            1 site.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            1000+ componetes
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
           1 Mês de atualização gratuita.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            Domínio(.com.br) R$80,00.
          </p>
        </li>

        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            Perfeito para sites pequenos.
          </p>
        </li>
      </ul>
    </div>
    <div class="button-container">
                        
                        <div class="buttons">
                <form action="adicionar_ao_carrinho.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Comprar</button>
                </form>
            </div>
                    </div>
   
  </div>

  <div class="pack-container">
  
    <div class="header">
      <p class="title1">
        Site Médio
      </p>
      <div class="price-container">
        <span>R$</span>90
        <span>/Mês</span>
      </div>
    </div>
    <div>
      <ul class="lists">
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            1 site
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            10000+ componentes.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
           4 Mêses de backup gratuito.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            1 mês de suporte gratuito.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            Domínio(.com.br) R$80,00
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
           Ótimo para sites front e back-end.
          </p>
        </li>
      </ul>
    </div>
    <div class="button-container">
                        
                        <div class="buttons">
                <form action="adicionar_ao_carrinho.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Comprar</button>
                </form>
            </div>
                    </div>
  </div>


  <div class="pack-container">
  
    <div class="header">
      <p class="title1">
        EMPRESA
      </p>
      <div class="price-container">
        <span>R$</span>350
        <span>/Mês</span>
      </div>
    </div>
    <div>
      <ul class="lists">
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
           1 Site.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            10000+ Produtos.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
           4 Mêses de backup gratuito.
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            1 Mês de suporte gratuito
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            Domínio(.com.br) R$80,00
          </p>
        </li>
        <li class="list">
          <span>
            <svg aria-hidden="true" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
          <p>
            Ótimo para lojas.
          </p>
        </li>
      </ul>
    </div>
    <div class="button-container">
                        
                        <div class="buttons">
                <form action="adicionar_ao_carrinho.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Comprar</button>
                </form>
            </div>
                    </div>
  </div>

</section>

<section class="Atividade-page">
    <div class="imagem-at">
        <img src="img/atividade.jpg" alt="foto das atividades da king">
    </div>

    <div class="text-at">
        <h1>Venha fazer as Atividades</h1>

        <p>Exercitar o seu conhecimento é esencial, na área da progamação, tente fazer todas as atividades.</p>
        <a href="atividades.php"><button class="btn-at">Fazer Atividades</button></a>
    </div>

   

</section>

</main>

<?php 
require_once "footer.php"
?>