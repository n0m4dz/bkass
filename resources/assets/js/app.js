//Class
import Person, {Programmer} from './Person'

let person = new Person('Ben', 36, 175);
person.getAge();

let programmer = new Programmer('Ben', 36, 175, 'PHP');


//Spread
let showFruits = (a, b, c) => {
    console.log(a);
    console.log(b);
    console.log(c);
}

let fruits = ['apple', 'kiwi', 'orange'];
showFruits(...fruits)

//Destructure
let food = {
    fruit: 'Apple',
    meat: 'Bacon',
    meat1: 'Ham'
}

let getMeats = ({meat, meat1}) => {
    console.log(meat, meat1);
}

getMeats(food);

//Generator function
// function* idMaker() {
//     var index = 0;
//     while (index < 3)
//         yield index++;
// }
//
// var gen = idMaker();
//
// console.log(gen.next().value); // 0
// console.log(gen.next().value); // 1
// console.log(gen.next().value); // 2
// console.log(gen.next().value); // undefined

//async
let asVar = 100;
setTimeout(() => {
    console.log(asVar + 300)
}, 3000)

console.log(asVar);


