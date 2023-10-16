
function printTriangle(num) {
    for (let i = 1; i <= num; i++) {
      let row = '';
      for (let j = 1; j <= i; j++) {
        row += '*';
      }
      console.log(row);
    }
  }
  
  printTriangle(5);