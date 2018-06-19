var num = 10
var cond = false
var num2 = 20
var result

if (cond) {
    console.log(`true`)
    result = `true`
    console.log(result)
} else if (!cond) {
    console.log(`no`)
    result = `no`
    console.log(result)
}

if (num === num2) {
    console.log(`${num} and ${num2} are equal`);
} else if (num < num2) {
    console.log(`${num} is smaller than ${num2}`)
} else {
    console.log(`${num} is bigger than ${num2}`)
}

var result2 = (num === num2) ? `same` : `not`
console.log(result2)

function check(age, country) {
    var response;
    if (country == `abu`) {
        response = age > 21 ? true : false
    } else {
        response = age > 18 ? true : false
    }
    console.log(response)
}