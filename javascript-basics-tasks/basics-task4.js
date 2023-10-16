function computeCircle(radius) {
    const area = Math.PI * Math.pow(radius, 2);
    const circumference = 2 * Math.PI * radius;
    console.log("Area: " + area);
    console.log("Circumference: " + circumference);
  }
  
  computeCircle(5);  // Output: Area: 78.53981633974483, Circumference: 31.41592653589793