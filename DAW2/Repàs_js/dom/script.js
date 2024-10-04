function esPrimo(numero) {
    for (let i = 2; i < numero; i++) {
        if (numero % i === 0) {
            return false;
        }
    }
    return numero !== 1;
}

const contenedor = document.querySelector(".contenedor");

// Crear las cajas iniciales
for (let i = 0; i <= 101; i++) {
    let div = document.createElement("div");
    let primo = esPrimo(i);

    if (primo) {
        div.classList.add("primo");
    } else if (i % 2 == 0) {
        div.classList.add("par");
    } else {
        div.classList.add("impar");
    }

    let num = document.createTextNode(i);
    contenedor.appendChild(div);
    div.appendChild(num);
}


const inputs = document.querySelectorAll("input");
const button = document.querySelector("button");


button.addEventListener("click", () => {

    const primoColor = inputs[0].value;
    const parColor = inputs[1].value;
    const imparColor = inputs[2].value;


    if (primoColor) {
        document.querySelectorAll(".primo").forEach(element => {
            element.style.backgroundColor = primoColor;
        });
    }

    if (parColor) {
        document.querySelectorAll(".par").forEach(element => {
            element.style.backgroundColor = parColor;
        });
    }

    if (imparColor) {
        document.querySelectorAll(".impar").forEach(element => {
            element.style.backgroundColor = imparColor;
        });
    }
});
