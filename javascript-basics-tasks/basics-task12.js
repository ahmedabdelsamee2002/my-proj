let array = [];
const numElements = 10; // Change the number of elements as needed

for (let i = 0; i < numElements; i++) {
  let element = prompt(Enter element ${i} of the array: );
  array.push(element);
}

console.log(array);