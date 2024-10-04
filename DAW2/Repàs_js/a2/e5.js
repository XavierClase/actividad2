function maximo(array) {
    return array.reduce((max, current) => {
      return current > max ? current : max;
    }, array[0]); 
  }
  
  const numeros = [3, 5, 7, 2, 9, 1];
  console.log(maximo(numeros)); 
  