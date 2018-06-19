// mozemo se igrat sa varijablom cak preko console browsera

var name = `abu`

if (name !== `abu`) {
  console.log(`Your name is : ` + name)
} else if (name === `juhu`) {
  console.log(`huju`)
} else {
  console.log(`unknown name`)
}

var num1 = 5
var num2 = 10

if (num1 + 5 == num2) {
  console.log(`Sum of ${num1} and ${num2} is ${num1 + num2}`)
} else if (num1 + 5 >= num2) {
  console.log(`${num1} is greater than ${num2}`)
} else if (num1 + 5 <= num2) {
  console.log(`${num1} is smaller than ${num2}`)
}

var string = `abu juhu`
console.log(string.length)
console.log(string[string.length - 1])
console.log(string[1])

var test = true
var invertedTest = !test
var result = test == invertedTest // ===invertedTest isto kao ==

if (result) {
  console.log(`true`)
}else {
  console.log(`false`)
}

var number = 10
var numberString = `10`
var number2 = 20
var number3 = 10

if (number === numberString) {
  alert(`juhu`)
} else if (number == numberString) {
  alert(`abu`)
} else {
  alert(`refko`)
}

if (number === number2 || number === number3) {
  console.log(`there are you number with same value --> ${number}`)
} else {
  console.log(`the number is unique --> ${number}`)
}

if (number > number2 && number > number3) {
  console.log(`${number} is the biggest one`)
} else if (number2 > number && number2 && number3) {
  console.log(`${number2} is the biggest one`)
} else {
  console.log(`${number3} is the biggest one`)
}
