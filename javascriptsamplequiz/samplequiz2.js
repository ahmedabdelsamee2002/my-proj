function addValues(...values){

      let sum = 0;
      
      for(let value of values){
        sum += value; 
      }
    
      return sum;
    
    }
    
    const result = addValues(1, 2, 3, 4);
    
    console.log(result);
    