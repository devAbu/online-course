function firstFun() {
    console.log(`abu`)
    return `juhu`
}


function add(a, b) {
    console.log(a + b)
    //ne radi na onclick al radi iz console
    return a + b
}

function change(a) {
    console.log(a)
    a = "changed"
    console.log(a)
    add(5, 5)
}