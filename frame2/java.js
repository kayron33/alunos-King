var kayrton = document.querySelector("#text");

var intervalo =70;

function EscreverTexto(kayrton, text, intervalo){
    var char = text.split("").reverse();

    var tipo = setInterval(function() {
        if(!char.length){
            return clearInterval(tipo)
        }

        var next = char.pop();

        kayrton.innerHTML += next;
    }, intervalo);

}

EscreverTexto(kayrton, text, intervalo);

//arquivos da tela de cursos //
function changeVideo(videoId) {
    var iframe = document.getElementById('youtubeVideo');
    iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
}




