//6. Create a function to return true if a given string params includes the word “pinecone”, you can use the .includes builtin string function. 
//Create an array that contains few sentences at different indexes and include pinecone in at least one of them. Use the filter function to create a new array using the function you created.-->

//function checking if a string includes "pinecone"
function containsPinecone(str) {
    return str.includes("pinecone");
}

//array with sentences
const sentences = [
    "I go to Fordham University.",
    "Valentines Day is tommorrow.",
    "Theres a cat named pinecone.",
    "Im excited for the weekend."
];

//using filter to create a new array with sentences that contain "pinecone"
const filterSentences = sentences.filter(containsPinecone);

console.log(filterSentences);
