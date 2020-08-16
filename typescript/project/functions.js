/* Return type function fn_name(): returnType - do not assign return type if there is no specific reason */
function add(n1, n2) {
    return n1 + n2;
}
function printResult(num) {
    console.log("Result : " + num);
}
function addAndHanlde(n1, n2, cb) {
    var result = n1 + n2;
    cb(result);
}
printResult(add(10, 7));
/* let combineValues: Function; --> any type of function*/
var combineValues;
combineValues = add;
console.log(combineValues(8, 8));
addAndHanlde(10, 10, function (result) {
    console.log(result);
});
