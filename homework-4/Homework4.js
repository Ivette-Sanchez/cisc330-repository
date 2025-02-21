//6. Loop through the cats array variable found here: 
//https://github.com/cisc3300/SP25-lecture-code/blob/main/2-13-lecture/cats.js 
const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

const cat = {name:"Pinecone", age:13, type:'Munchkin', cuteness: 9001};


//6a. if the cats adoption status is available add that cat’s name to a result array 

//filter cats with adoption status available meaning theyre not adopted 
const catsAvailable = cats.filter(function (cat){
    return cat.adoptionStatus==='available'; //checking if adoption status = available
});

console.log("Available cats:", catsAvailable); //logs the array of available cats 
 
//6b. create a new sentence about your newly adopted cats from your result array via the join array function. 

//filter cats with adoption status not available meaning theyve been adopted already
const catsAdopted = cats.filter(function (cat){
    return cat.adoptionStatus==='not-available';
});

const catsAdoptedNames = catsAdopted.map(function(cat){ //creating an array of names of cats that have been adopted using map
    return cat.name; //returns name of each adpoted cat
});
const sentence= catsAdoptedNames.join(", ") + ' have been adopted!'; //join the names of the adopted cats and add the sentence
console.log(sentence);


//7. Create a variable that sets a value via a ternary operator. 
// Use Math.random() * 10, which will output a random number from 1 to 10,
//  to set the variable’s value as a string of “greater than five!” if the output from Math.random() * 10 is greater than 5, 
// and “less than five!” if the output is less than 5. 

const randomNumber= Math.random() * 10;
const message= randomNumber > 5 ? 'Greater than five!' : 'less than five!'; //if randomnumber>5 output first option --> else output second
console.log(randomNumber, message);

//8. Loop through the values of the cat object variable found here: 
// Console.log the value of each property in the loop. 

//using for in --> iterates object properties
for(const property in cat) {
    console.log(property) //logs the property name/key of the object
    console.log(cat[property]) //logs the value associated with that property
}


//9. Write two if statements, pick the correct comparison operator to have the first if statement equate an integer of 1 and a string of ‘1’ as true. 
// And pick the correct comparison operator to have the second equate an integer of 1 and a string of ‘1’ as false. 

const num= 1;
const string= '1';

// Loose equality == allows type coercion-->  '1' string becomes 1 number for comparison
if(num==string) 
{
    console.log("loose equality 1=='1' is true");
}

// Strict equality === checks  value and type --> 1 number is not equal to '1' string
if(num===string)
{
    console.log("strict equality 1=='1' is false")
}


//10. Using the map function create a new array via the cats array used in question 6. 
// Pass the map function a callback function that accepts each element of the array as a parameter. 
// Return the value of the name property of each object in the cats array concatenated with the string 
// “ is cute!”. The output should be an array of “Charlie is cute!”, “Lily is cute!”, etc. 

const cuteCats=  cats.map(cats => cats.name + ' is cute!'); 
console.log(cuteCats);