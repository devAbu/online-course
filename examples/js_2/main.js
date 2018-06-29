function alertFunction() {
    alert('juhu')
}

function changeText() {
    document.getElementById('text').innerHTML = variable + ' ' + number + ' ' + numberStr
}

function changeText2() {
    document.getElementById('text').innerHTML = array + ' ' + array[2]
}

function changeText3() {
    document.getElementById('text').innerHTML = arrayStr
}

function changeText4() {
    document.getElementById('text').innerHTML = color.name + " " + color.like + " " + color.favourite
}

var number = 5
var variable = 'juhu abu'
var numberStr = '10'

var array = [0, 1, 2, 3, 4]
var arrayStr = ['A', 'B', 'U']

var color = {
    name: "Red",
    favourite: "no",
    like: "yes"
}