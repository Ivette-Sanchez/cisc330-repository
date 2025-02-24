//5. Create a JavaScript function that makes use of variables from its parent execution context. 


function createCounter() {
    let count = 200; //variable from the parent execution context
    return function () { // inner function --> ^ closure
        count--; // changing 'count' from the parent scope
        return count;
    }
}
const counter = createCounter(); // a new counter instance
console.log(counter()); 
console.log(counter()); 
console.log(counter()); 

