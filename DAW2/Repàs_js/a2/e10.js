// Escribe una función contarVocales que tome un string y devuelva la cantidad de vocales que hay en el string. Utiliza .reduce para resolver este problema.

function contarVocales(string) {

    return string.toLowerCase().split("").reduce((acumulador, caracter) => {

      if (['a', 'e', 'i', 'o', 'u'].includes(caracter)) {
        return acumulador + 1; 
      }
      return acumulador; 
    }, 0); 
  }
  

  const resultado = contarVocales("Hola, ¿cómo estás?");
  console.log(resultado); 