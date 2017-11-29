class Person {

    constructor(name, age, height) {
        this.name = name;
        this.age = age;
        this.height = height;
    }

    getAge() {
        console.log(this.age)
    }
}

export class Programmer extends Person {

    constructor(name, age, height, lang) {
        super(name, age, height);
        console.log(lang);
    }
}

export default Person;