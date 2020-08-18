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
class ITDepartment extends Department {
    constructor(id, admins) {
        super(id, 'IT');
        this.admins = admins;
    }
}
class AccountingDepartment extends Department {
    constructor(id, reports) {
        super(id, 'Accounting');
        this.reports = reports;
    }
    addReport(text) {
        this.reports.push(text);
    }
    addEmployee(name) {
        if (name === 'Abu') {
            return;
        }
        this.employees.push(name);
    }
    printReports() {
        console.log(this.reports);
    }
}
const ITAccounting = new ITDepartment('555', ['Abu']);
console.log(ITAccounting);
ITAccounting.addEmployee('Abu');
console.log(ITAccounting);
const accounting = new AccountingDepartment('999', ['juhu', 'huju']);
accounting.addEmployee('Combe');
accounting.addEmployee('Abu');
accounting.addReport('something went wrong');
accounting.printReports();
console.log(accounting);
//# sourceMappingURL=app.js.map