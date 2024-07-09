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
        
        <div class="form-container">
              <form class="form">
                <div class="form-group">
                  <label for="email">Seu nome</label>
                  <input type="text" id="email" name="email" required="">
                </div>
                <div class="form-group">
                  <label for="textarea">Como foi sua experiencia com essa atividade?</label>
                  <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
                </div>
                <button class="form-submit-btn" type="submit">enviar</button>
              </form>
            </div>
        
        
        
        
        </section>
    </main>

    <script src="frame2/java.js"></script>
</body>
</html>
