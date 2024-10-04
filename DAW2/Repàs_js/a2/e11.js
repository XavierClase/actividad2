function encontrarElemento(array, comparar) {
    return array.find(comparar) || null;
  }
  

  console.log(encontrarElemento([1, 2, 3, 4], numero => numero % 2 === 0)); 
  console.log(encontrarElemento(['Hola', 'Mundo', 'Hola', 'Mundo'], palabra => palabra.length > 4)); 
  