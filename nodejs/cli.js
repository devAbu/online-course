console.log("User: " + process.env.USERNAME) //USER for mac or linux

console.log("First input value is: " + process.env.value1)
console.log("Second input value is: " + process.env.value2)

/* za pokretanje --> env value1=10 value2=20 node file_name.js - WINDOWS */
/* za pokretanje --> value1=10 value2=20 node file_name.js - MAC or LINUX */

/* ***  DRUGI NACIN *** */

/* export value1 = 10 */
/* export value2 = 20 */
/* node file_name.js */