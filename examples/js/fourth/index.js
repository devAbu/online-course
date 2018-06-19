document.write(`hello`)

alert(`abu
juhu`)

var x = 3
document.write(x + `
`)
x = x + 3
document.write(x + `
`)
var a = `hello`
document.write(a + ` abu `)

var name = prompt(`enter your name`)
document.write(`welcome ` + name + `
`)

function first () {
  alert(`alert from function`)
}

first()

var global = `I am global variable`

function print () {
  var local = `I am local variable`
  document.write(local + ` 
    `)
  document.write(`Global variable from function: ` + global + ` !
  `)
}

print()
document.write(global + `
`)
/* document.write(local + `
`) */
function welcome (name) {
  alert(`welcome ` + name + ` juhu!!`)
}

var x = prompt(`Your name...`)
welcome(x)

function add (x, y) {
  var result = x + y
  return result
}

document.write(add(5, 8))

var a = 10
var b = 5

if (a >= b) {
  document.write(`
  ${a} is bigger or equal than ${b}`)
} else {
  document.write(`${a} is smaller than ${b}`)
}

var movie = prompt(`Enter your favorite movie...`)

switch (movie) {
  case `Iron man`:
    document.write(`
    good movie`)
    break
  case `Italian Job`:
    document.write(`
    nice movie`)
    break
  default:
    document.write(`
    bad movie`)
    break
}

var i = 0
while(i < 10){
  document.write(`while's number: ` + i + `<br>`)
  i++
}
var i = 0
do {
  document.write(`do-while's Number: ` + i + `<br>`)
  i++
} while (i < 10)

for (i = 0; i < 10; i++) {
  document.write(`for's Number: ` + i + `<br>`)
}
// oop
function computer (processor, ram) { // constoructor
  this.processor = processor
  this.ram = ram
}

// create object
var dell = new computer(`i7`, 8)
var lenovo = new computer(`i5`, 16)

document.write(`Dell's information --> Processor: ` + dell.processor + ` || Ram: ` + dell.ram + `<br>`)
document.write(`Lenovo's information --> Processor: ` + lenovo.processor + ` || Ram: ` + lenovo.ram + `<br>`)

// second type for creating object
toshiba = {
  processor: `i7`,
  ram: 4
}
acer = {
  processor: `i9`,
  ram: 32
}

document.write(`toshiba's information --> Processor: ` + toshiba.processor + ` || Ram: ` + toshiba.ram + `<br>`)
document.write(`acer's information --> Processor: ` + acer.processor + ` || Ram: ` + acer.ram + `<br>`)
// koristenje funkcija u objektu
function person (name, age) {
  this.name = name
  this.age = age
  this.years = year
}

function year () {
  var yearsNum = 2018 - this.age
  return yearsNum
}

var person1 = new person(`abu`, 20)
document.write(`Information of first person --> Name: ` + person1.name + ` Age: ` + person1.age + ` Birth year: ` + person1.years() + `<br>`)

var numbers = new Array(5, 6, 7, 8, 9, `ten`)
document.write(numbers[2])
document.write(numbers[numbers.length - 1])

var numbers2 = new Array(3)
numbers2[0] = 1
numbers2[1] = 2
numbers2[2] = 3

document.write(numbers2[2])

var numbers2 = []
numbers2[50] = 50
numbers2[45] = 45
numbers2[60] = 60

document.write(numbers2[45])

var arrayObject = new Array(`abu`, `oba`, `combe`, `dudo`)
var arrayObject2 = new Array(`refko`, `juhu`, `maci`)

document.write(arrayObject.join(` and `))
document.write(arrayObject.concat(arrayObject2))

function check () {
  var name = document.getElementById('name').value
  var surname = document.getElementById('surname').value

  if (name === surname) {
    alert('good')
  } else {
    alert(`bad`)
  }
}
