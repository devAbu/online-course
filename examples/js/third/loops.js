for (i = 0; i < 10; i++) {
  console.log(`hello ` + i)
}
var i = 0
while (i < 10) {
  console.log(`world ` + i)
  i++
}

var a = 0
do {
  console.log(`abu` + a)
  a++
} while (a < 10)

function loop (loopNum) {
  for (i = 0; i < loopNum; i++) {
    console.log(`loop number:` + i)
  }
  console.log(`total loop number:` + i)
}
