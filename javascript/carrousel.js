(function(){
  console.log("vive la boîte carrousel")  
  let boite__carrousel = document.querySelector(".boite__carrousel")

  let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
  console.log("galerie__img.length = " + galerie__img.length)
  let boite__carrousel__ferme = document.querySelector(".boite__carrousel__ferme")
  let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
  
  boite__carrousel__ferme.addEventListener('mousedown', function(){
    boite__carrousel.classList.remove('boite__carrousel--ouvrir')
  })

  let image = document.createElement('img')
  image.classList.add('boite__carrousel__img')
  boite__carrousel.appendChild(image)
  //img.setAttribute("src", "#")

  let indexe = 0;
  for (const img of galerie__img) {
    let bouton = document.createElement('button')
    bouton.dataset.indexe = indexe++
    boite__carrousel__navigation.append(bouton)
/* ajout d'un écouteur sur chacun des boutons de navigation de notre carrousel */
    bouton.addEventListener('mousedown', function(){
          console.log(this.dataset.indexe)
          image.setAttribute('src',galerie__img[this.dataset.indexe].getAttribute('src'))
    })  // fin de l'écouteur de navigation


    /* Ajout d'un écouteur sur chacune des images de la galerie */
      img.addEventListener('mousedown',function(){
        boite__carrousel.classList.add('boite__carrousel--ouvrir')
        console.log(this.getAttribute('src'))
        image.setAttribute('src',this.getAttribute('src'))
      })
  }



  /*
this.parentNode
this.parentNode.children(2)
  */

})()