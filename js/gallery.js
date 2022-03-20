
/*  -----    FILTER GALLERY   -----  */

//on initalise les variables 
const filterContainer = document.querySelector(".gallery ul");
galleryItems = document.querySelectorAll(".item");

//quand l'user clique sur un filtre
filterContainer.addEventListener("click", (event) =>{
  //si le filtre contient la class list
  if(event.target.classList.contains("list")){
    filterContainer.querySelector(".active").classList.remove("active"); //enlève la classe active existante au filtre 
    event.target.classList.add("active"); //on ajoute la classe active au filtre cliqué
    const filterValue = event.target.getAttribute("data-filter"); //on stocke la valeur de l'attribut data-filter du filtre cliqué 
    //pour chaque élément
    galleryItems.forEach((item) =>{
      //si l'élément contient la valeur all, on affiche tout en ajoutant la classe show et en enlevant la classe show
      if(item.classList.contains(filterValue) || filterValue === 'all'){
        item.classList.remove("hide");
        item.classList.add("show");
      }
      //sinon, on efface les éléments qui ne contiennent pas le même filtre sur item et on affiche les autres
      else{
        item.classList.remove("show");
        item.classList.add("hide");
      }
    });
  }
});


/*  -----    LIGHTBOX GALLERY   -----  */

const lightbox = document.createElement('div'); //on crée un nouvel élément
lightbox.id = 'lightbox'; //on ajoute un id pour facilement séléctionner dans le css
document.body.appendChild(lightbox); //on ajoute l'élément lightbox en dernière position du body

const images = document.querySelectorAll('img'); //on séléctionne toutes les images
//pour chaque image qu'on a
images.forEach(image => {
  //quand on clique sur une image
  image.addEventListener('click', e => {
    lightbox.classList.add('active'); //on ajoute la classe active à la lightbox
    const img = document.createElement('img'); //on crée un nouvel élément avec le tag img
    img.src = image.src; //notre nouvel élément est la même image que l'image cliquée
    //enlève tous les "enfants" de notre lightbox pour éviter d'accumuler les lightbox quand on clique sur plusieurs images
    while (lightbox.firstChild) {
      lightbox.removeChild(lightbox.firstChild);
    }
    lightbox.appendChild(img); //on ajoute img à notre lightbox
  })
})

lightbox.addEventListener('click', e => {
  if (e.target !== e.currentTarget) return //la lightbox ne s'affiche plus seulement si l'on clique hors de l'image et non dessus
  lightbox.classList.remove('active'); //on enlève la class active pour ne plus afficher la lightbox de l'image
})

