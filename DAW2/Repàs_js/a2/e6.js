function invertirCadena(cadena) {
    return cadena.split(' ').reduce((inverso, palabra) => palabra + ' ' + inverso, '').trim();
}

const cadena = "Buenas como estamos";
console.log(invertirCadena(cadena));