// Function to add two numbers
function add(a, b) {
    return a + b;
  }
  
  // Function to subtract two numbers
  function subtract(a, b) {
    return a - b;
  }
  
  // Function to multiply two numbers
  function multiply(a, b) {
    return a * b;
  }
  
  // Function to divide two numbers
  function divide(a, b) {
    if (b === 0) {
      return "Error: Division by zero is not allowed.";
    }
    return a / b;
  }
  
  // Prompt the user for input
  const num1 = parseFloat(prompt("Enter the first number:"));
  const num2 = parseFloat(prompt("Enter the second number:"));
  
  // Perform calculations
  const addition = add(num1, num2);
  const subtraction = subtract(num1, num2);
  const multiplication = multiply(num1, num2);
  const division = divide(num1, num2);
  
  // Print the results
  console.log(Addition: ${addition});
  console.log(Subtraction: ${subtraction});
  console.log(Multiplication: ${multiplication});
  console.log(Division: ${division});