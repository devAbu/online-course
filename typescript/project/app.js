/* UNKNOWN AND NEVER */
var userInput;
var userName;
userInput = 5;
userInput = 'abu';
if (typeof userInput === 'string') {
    userName = userInput;
}
function generateError(message, code) {
    throw { message: message, errorCode: code };
}
/* Never return anything */
generateError('juhu', 120);
