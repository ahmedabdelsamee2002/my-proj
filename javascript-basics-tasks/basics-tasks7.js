function checkMultiples(num) {
    if (num % 5 === 0 || num % 8 === 0) {
      return true;
    } else {
      return false;
    }
  }
  
  console.log(checkMultiples(20));  // Output: true