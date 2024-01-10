let sair = document.querySelector(".sair")
let popup = document.querySelector(".popup")
let adicionar = document.querySelector(".adicionar-1")

adicionar.addEventListener("click", () => {
    popup.style = "top: 20%;";
})

sair.addEventListener("click",() => {
    popup.style = "top: 1000px;"
})