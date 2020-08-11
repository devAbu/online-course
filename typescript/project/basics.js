/* function add(n1, n2) {
  return n1 + n2;
} */
var add = function (n1, n2, showResult, resultMessage) {
    var result = n1 + n2;
    if (showResult) {
        console.log(resultMessage + result);
    }
    else {
        return n1 + n2;
    }
};
var number1 = 5;
var number2 = 10;
var printResult = true;
var resultPhrase = 'Result is: ';
/* const result = add(number1, number2, printResult);
console.log(result); */
add(number1, number2, printResult, resultPhrase);
