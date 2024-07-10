<?php 
require_once "header.php"
?>
<link rel="stylesheet" href="frame2/cursopag.css">
    <main class="fundo-do-curso">
        <section class="pagina-do-curso">
            <div class="container-video">
                <div class="video-container">
                    <iframe id="youtubeVideo" width="800" height="450" src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="button-container">
                    <button onclick="changeVideo('IusIABG3Q78?si=_hovnLUaimKPyrvP')">Vídeo Aula 1</button>
                    <button onclick="changeVideo('azY1B78wQ8Y?si=8S17fuvxbLqbhXrZ')">Vídeo Aula 2</button>
                    <button onclick="changeVideo('')">Vídeo Aula 3</button>
                    <button onclick="changeVideo('VIDEO_ID_3')">Vídeo Aula 3</button>
                    <button onclick="changeVideo('VIDEO_ID_3')">Vídeo Aula 3</button>
                    <button onclick="changeVideo('VIDEO_ID_3')">Vídeo Aula 3</button>
                    <button onclick="changeVideo('pamzipXiVlo?si=lDYTQ7KaVXmr0MwC')">Vídeo Aula 3</button>
                </div>
            </div>
        </section>
        <h1 class="comentario-page">Deixe o seu comentario</h1>
        
        <section class="comentarios">
        
      <div class="formulario">
        <form action="" method="post">
          <label for="nome">Seu nome</label>
        <input type="text" name="" id="">
        <label for="">O que você achou dessa aula?</label>
       <textarea class="comentario" name="" id=""></textarea>
        </form>
        
        <a href=""><button>Enviar</button></a>
      </div>
        
        
        </section>
    </main>

    <script src="frame2/java.js"></script>
</body>
</html>
