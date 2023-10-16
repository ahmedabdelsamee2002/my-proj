function checkNumbers(num1, num2) {
    if (num1 === 50||num2===50|| num1 + num2 === 50) {
      return true;
    } else {
      return false;
    }
  }
  
  console.log(checkNumbers(20, 30));  // Output: true