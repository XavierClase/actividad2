const people = [

    { name: 'Alice', age: 25 },
    
    { name: 'Bob', age: 17 },
    
    { name: 'Charlie', age: 35 },
    
    { name: 'Dave', age: 12 }
    
    ];
    
    const majorsEdat = people.map(person => {
        if (person.age >= 18) {
          return person;  
        } else {
          return null;    
        }
      });

console.log(majorsEdat);