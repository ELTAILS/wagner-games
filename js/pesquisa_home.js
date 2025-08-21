let input = document.getElementById("searchInput");
let lista = document.getElementById("lista");
let itens = lista.getElementsByTagName("li");
let mensagem = document.getElementById("mensagem");

// Mostrar todos os links quando o usuário clicar no campo
input.addEventListener("focus", () => {
    lista.style.display = "block";
});

// Função para filtrar os itens
function filtrar() {
    let filtro = input.value.toLowerCase();
    let encontrados = 0;

    for (let i = 0; i < itens.length; i++) {
        let texto = itens[i].innerText.toLowerCase();
        if (texto.indexOf(filtro) > -1) {
            itens[i].style.display = "";
            encontrados++;
        } else {
            itens[i].style.display = "none";
        }
    }

    // Mostrar mensagem se nada encontrado
    if (encontrados === 0) {
        mensagem.style.display = "block";
    } else {
        mensagem.style.display = "none";
    }
}

document.addEventListener("click", (event) => {
    if (!event.target.closest(".search-box")) {
        lista.style.display = "none";
    }
});
