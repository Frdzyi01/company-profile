let modalPortfolio = document.getElementById("modal-portfolio")
let overlayModalPortfolio = document.getElementById("overlay-modal-portfolio")
let body = document.getElementById("body")
let cardPortfolio = document.querySelectorAll(".card-portfolio")
let closeButtonModalPortfolio = document.getElementById("close-button-modal-portfolio")

for (let i = 0; i < cardPortfolio.length; i++) {

    cardPortfolio[i].addEventListener("click", () => {
        modalPortfolio.classList.remove("hidden")
        overlayModalPortfolio.classList.remove("hidden")
        body.style.overflow = hidden
    })

}

closeButtonModalPortfolio.addEventListener("click", () => {
    modalPortfolio.classList.add("hidden")
    overlayModalPortfolio.classList.add("hidden")
    body.style.overflow = hidden
    body.style.overflow = auto
})

let modalVisi = document.getElementById("modal-visi")
let overlayModalVisi = document.getElementById("overlay-modal-visi")
let cardVisi = document.querySelectorAll(".card-visi")
let closeButtonModalVisi = document.getElementById("close-button-modal-visi")

for (let i = 0; i < cardVisi.length; i++) {

    cardVisi[i].addEventListener("click", () => {
        modalVisi.classList.remove("hidden")
        overlayModalVisi.classList.remove("hidden")
        body.style.overflow = hidden
    })

}

closeButtonModalVisi.addEventListener("click", () => {
    modalVisi.classList.add("hidden")
    overlayModalVisi.classList.add("hidden")
    body.style.overflow = hidden
    body.style.overflow = auto
})

let modalMisi = document.getElementById("modal-misi")
let overlayModalMisi = document.getElementById("overlay-modal-misi")
let cardMisi = document.querySelectorAll(".card-misi")
let closeButtonModalMisi = document.getElementById("close-button-modal-misi")

for (let i = 0; i < cardMisi.length; i++) {

    cardMisi[i].addEventListener("click", () => {
        modalMisi.classList.remove("hidden")
        overlayModalMisi.classList.remove("hidden")
        body.style.overflow = hidden
    })

}

closeButtonModalMisi.addEventListener("click", () => {
    modalMisi.classList.add("hidden")
    overlayModalMisi.classList.add("hidden")
    body.style.overflow = hidden
    body.style.overflow = auto
})

