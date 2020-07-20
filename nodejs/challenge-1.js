const func = (seconds) => {
    console.log('After ' + seconds + ' seconds')
}

/* BOLJI NACIN ZA FUNC

const func = seconds => {
    ...
}

*/

setTimeout(func, 4000, 4)
setTimeout(func, 8000, 8)