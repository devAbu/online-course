{
    /* BLOCK SCOPE */
    {
        /* NESTED BLOCK SCOPE */
    }
}

if (true) {
    /* BLOCK SCOPE */
    var abu = 5
    let test = 10
}

for (let i = 0; i < 10; i++) {
    /* BLOCK SCOPE */
}

function sum(a, b) {
    /* FUNCTION SCOPE */
    var result = a + b
}

sum(4, 5)

console.log(abu)
/*ERROR - undefined
 
console.log(test)
console.log(result) */

/* Variable inside block scope can be access outside the scope, while the variable inside function can be access only inside that function */

/* VAR vs LET - when the variable is defined with VAR keyword it can be access outside the scope, but when it is defined by LET keyword it will not */

const number = 42
const word = "hello"

const numbers = [1, 4, 6] //array
const person = {
    firstName: 'abu',
    age: 22
} // object

/* WITH CONST the value of int or string can not be modified, but the value of array or object can */

/* error 
number = 5
*/


/* *** ARROW FUNCTIONS *** */

const X = function () {
    /* "this" here is the caller of X */
}

const Y = () => {
    /* "this" here is not the caller of Y */

    /* It's the same "this" found in Y's scope */
}

this.id = "exports"
console.log(this)

const testObj = {
    func1: function () {
        console.log('func1', this)
    },
    func2: () => {
        console.log('func2', this)
    }
}

testObj.func1()
testObj.func2()

const test = (a) => {
    return a * a
}
/* ako je jedna linija moze bez {} i return */
const test2 = (a) => a * a

/* ako je jedan argument/parameter moze bez () */
const test3 = a => a * a

/* *** OBJECT LITERALS *** */

/* const objExample = {
    key: value
} */

const mystery = "answer"
const PI = Math.PI

const obj = {
    p1: 10,
    p2: 20,
    f1() {},
    f2: () => {},
    [mystery]: 42,
    PI,
}

/* obj.mystery will be undefined, obj.answer will be 42 */

/* *** DESTRUCTURING *** */

/* FOR ARRAY AND OBJECT */

/* STANDARD
    const PI = Math.PI
    const E = Math.E
    const SQRT2 = Math.SQRT2 
*/

/* WITH DESTRUCTURING */
const {
    // PI,
    E,
    SQRT2
} = Math

console.log(E)

/* With require */
const {
    readFile
} = require('fs')

/* functions */
const circle = {
    label: 'circleX',
    radius: 2
}

const circleArea = ({
    radius
}, {
    precision = 2
} = {}) => (PI * radius * radius).toFixed(precision)

/* { precision = 2} - default value - if not defined
    = {} - make it optional */
console.log(circleArea(circle))

console.log(circleArea(circle, {
    precision: 5
}))

/* ARRAY */

const [first, second, , forth] = [10, 20, 30, 40]

console.log(forth)

const [one, ...rest] = [10, 20, 30, 40, 50]

console.log(one)
/* Rest will be an array */
console.log(rest)

const data = {
    temp1: '001',
    temp2: '001',
    name: 'abu',
    surname: 'almonajed'
}

const {
    temp1,
    temp2,
    ...personData
} = data

console.log(personData)

/* *** TEMPLATE STRINGS *** */

const html = `
<div>
    ${Math.random()} 
</div>`

/* *** CLASSES *** */

class Person {
    constructor(name) {
        this.name = name
    }

    greet() {
        console.log(`Hello ${this.name}`)
    }
}

class Student extends Person {
    constructor(name, level) {
        super(name)
        this.level = level
    }

    greet() {
        console.log(`Hello ${this.name} from ${this.level}`)
    }
}

const o1 = new Person('Max')
const o2 = new Student('Tina', '1st')
const o3 = new Student('Mary', '2nd')

o3.greet = () => console.log("I'm special")

o1.greet()
o2.greet()
o3.greet()

/* *** PROMISES & ASYNC/AWAIT *** */

const https = require('https')
const {
    resolve
} = require('path')
const {
    rejects
} = require('assert')

function fetch(url) {
    return new Promise((resolve, reject) => {
        https.get(url, (res) => {
            let data = ''
            res.on('data', (rd) => data = data + rd)
            res.on('end', () => resolve(data))
            res.on('error', reject)
        })
    })
}

fetch('https://www.javascript.com/').then(data => {
    console.log(data.length)
});

(async function read() {
    const data = await fetch('https://www.javascript.com/')
    console.log(data.length)
})()