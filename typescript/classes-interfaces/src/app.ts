class Department {
  /* private readonly ID: string;
  name: string;  // default is PUBLIC*/
  protected employees: string[] = [];
  /* private - only accessible inside the class */
  /* protected - accessible from that class and all subclasses (inheritance) */

  constructor(private readonly ID: string, public name: string) { //readonly - can not change after initialization
    /* this.ID = ID;
     this.name = n; */
  }

  describe(this: Department) {
    console.log(`Department ${this.ID}:  ${this.name}`);
  }

  addEmployee(employee: string) {
    /* this.ID = '321'; ERROR - can not change it because it is readonly*/
    this.employees.push(employee);
  }

  printEmployeeInfo() {
    console.log(this.employees.length, this.employees);
  }
}
/* INHERITANCE */
class ITDepartment extends Department {
  admins: string[];
  constructor(id: string, admins: string[]) {
    super(id, 'IT');/* CALL CONSTRUCT FROM INHERITANCE CLASS */
    this.admins = admins;
  }
}

class AccountingDepartment extends Department {
  constructor(id: string, private reports: string[]) {
    super(id, 'Accounting');
  }

  addReport(text: string) {
    this.reports.push(text);
  }

  /* OVERRIDING - Override the method from the main/inheritance class. Method name, parameters and return type must be the same */
  addEmployee(name: string) {
    if (name === 'Abu') {
      return;
    }
    /* If employees property is PRIVATE in the main class (Department) we will can ERROR */
    this.employees.push(name);
  }

  printReports() {
    console.log(this.reports);
  }
}

/* const accounting = new Department('123', 'Accounting');
console.log(accounting);

accounting.describe(); */

/* const accountingCopy = { describe: accounting.describe };
accountingCopy.describe(); // undefined - accountingCopy doesn't have a problem called name
/* with THIS : DEPARTMENT we will can error *
/* FIX: add name as property*
const accountingCopy2 = { name: 'Abu', describe: accounting.describe };
accountingCopy2.describe(); */

/* accounting.addEmployee('Abu');
accounting.addEmployee('Combe'); */

/* accounting.employees[2] = "Test"; ERROR because employees is private*/
/* accounting.name = "Test"; Will work since the property name is public */

/* accounting.printEmployeeInfo(); */

const ITAccounting = new ITDepartment('555', ['Abu']);
console.log(ITAccounting);

ITAccounting.addEmployee('Abu');
console.log(ITAccounting);

const accounting = new AccountingDepartment('999', ['juhu', 'huju']);
accounting.addEmployee('Combe');
accounting.addEmployee('Abu'); // will not be added
accounting.addReport('something went wrong');
accounting.printReports();
console.log(accounting);