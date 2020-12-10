let acc = document.getElementsByClassName("accordion")
let i

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active")
        let panel = this.nextElementSibling
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null
        } else {
            panel.style.maxHeight = `${panel.scrollHeight}px`
        }
    })
}

//SLIDE AUTO//  

let slideIndex = 0 //variable index pour comparer avec compteur longueur du tableau
showSlides() // fonction de slide

function showSlides() {
    let i // compteur longueur du tableau
    let slides = document.getElementsByClassName("mySlides") // tableau avec les div
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; //on réinitialise le display à none des DIVs (utile à partir du 2ème)
    }
    slideIndex++ // on incrémente l'index
    if (slideIndex > slides.length) { //si l'index est plus grand que longueur tableau
        slideIndex = 1 //on repasse l'index à 1
    }
    slides[slideIndex - 1].style.display = "block"  // on compare le nb du tableau au nombre de l'index(-1) et on affiche la div correspondante
    setTimeout(showSlides, 4000) // on ré-exécute la fonction toutes les 4 secondes
}

// Disparition message d'erreur/succes pour envoi dans formulaire
setTimeout(function () {
    document.querySelector(".temp").style.display = "none"
}, 3000)

