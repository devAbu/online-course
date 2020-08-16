"use strict";
class Department {
    constructor(ID, name) {
        this.ID = ID;
        this.name = name;
        this.employees = [];
    }
    describe() {
        console.log(`Department ${this.ID}:  ${this.name}`);
    }
    addEmployee(employee) {
        this.employees.push(employee);
    }
    printEmployeeInfo() {
        console.log(this.employees.length, this.employees);
    }
}
const accounting = new Department('123', 'Accounting');
console.log(accounting);
accounting.describe();
accounting.addEmployee('Abu');
accounting.addEmployee('Combe');
accounting.printEmployeeInfo();
//# sourceMappingURL=app.js.map