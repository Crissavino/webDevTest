let urlPreview = 'preview.png';
let muestroPreview = true;
let frame = document.querySelector('.frame');

if (frame) {
    // scripts para el boton video
    let urlVideo = 'video.mp4';
    let botonVideo = document.querySelector('.btnVideo');

    botonVideo.addEventListener('click', () => {
        if (muestroPreview) {
            muestroPreview = false;
            frame.src = urlVideo
            setTimeout(() => {
                muestroPreview = true;
                frame.src = urlPreview
            }, 30000);
        } else {
            muestroPreview = true;
            frame.src = urlPreview
        }
    });
    // Fin scripts para el boton video


    // scripts para el boton imagen
    let urlImagen = 'imagen.png';
    let botonImagen = document.querySelector('.btnImagen');

    botonImagen.addEventListener('click', () => {
        if (muestroPreview) {
            muestroPreview = false;
            frame.src = urlImagen
            setTimeout(() => {
                muestroPreview = true;
                frame.src = urlPreview
            }, 30000);
        } else {
            muestroPreview = true;
            frame.src = urlPreview
        }
    });
    // fin scripts para el boton imagen

    // scripts para la API
    let botonAPI = document.querySelector('.btnAPI');
    let divApi = document.querySelector('.api');
    let seVeInfoApi = false;

        botonAPI.addEventListener('click', () => {
            if (!seVeInfoApi) {
                divApi.classList.remove('d-none');
                seVeInfoApi = true;
            } else {
                divApi.classList.add('d-none');
                seVeInfoApi = false;
            }
        });
    // Fin scripts para la API

    // cambio el src del iframe de acuerdo al parametro
}

// REMOTE
    let btnCH1 = document.querySelector('.ch1');
    let btnCH2 = document.querySelector('.ch2');
    let btnCH3 = document.querySelector('.ch3');

    btnCH1.addEventListener('click', (event) => {
        event.preventDefault()
        let urlActual = location.href;
        let index = urlActual.replace('/remote.php', '') + '/?ch=1';
        location.href = index;
    });

    btnCH2.addEventListener('click', (event) => {
        event.preventDefault()
        let urlActual = location.href;
        let index = urlActual.replace('/remote.php', '') + '/?ch=2';
        location.href = index;
    });

    btnCH3.addEventListener('click', (event) => {
        event.preventDefault()
        let urlActual = location.href;
        let index = urlActual.replace('/remote.php', '') + '/?ch=3';
        location.href = index;
    });

    btnCH1.addEventListener('focus', () => {
        console.log('estas aprados en el boton 1');
        
    })

    // moverse entre botones con las flechas
        
        let botones = document.querySelectorAll('.move');
        let botones2 = document.getElementById("ch1");
        let botonParado = botones[0];
        let index = 0;
        document.addEventListener('keydown', (event) => {
            if (event.keyCode == 38) {
                index--;
                console.log('Indice '+index);
                if (index == 0) {
                    botones.item(index).focus();
                } else 
                    if (index < 0) {
                        index = botones.length - 1;
                        botones.item(index).focus();
                    } 
                    else {
                        if (index > 0 && index <= (botones.length - 1)) {
                            botones.item(index).focus();
                        } else {
                            index = 0;
                            botones.item(index).focus();
                        }
                    }
            }

            if (event.keyCode == 40) {
                index++;
                if (index > (botones.length - 1)) {
                    index = 0
                    botones.item(index).focus();
                    // index++;
                } else {
                    botones.item(index).focus();
                    // index++;
                }
            }
        });
    // fin
// FIN REMOTE
