alert(`hello`)
var a = `string`
console.log(a)

var a = 10
var b = `hello`
var c = 25
console.log(`A + B : ` + a + b)
console.log(`A + C : ` + a + c)
console.log(a + c)
console.log(`B + C : ` + b + c)

var q = prompt(`your name...`)
console.log(q)

var array = [0, 1, 5, `abu`]
console.log(array[2])
console.log(array[3])
console.log(array[2] + array[1])

var object = {
    first: "abu",
    second: "juhu",
    third: 10,
    fourth: 20
}

console.log(object)
console.log(object.first + ` ` + object.second)
console.log(object[`third`] + object[`fourth`])