class Department {
  /* private readonly ID: string;
  name: string;  // default is PUBLIC*/
  private employees: string[] = [];

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

const accounting = new Department('123', 'Accounting');
console.log(accounting);

accounting.describe();

/* const accountingCopy = { describe: accounting.describe };
accountingCopy.describe(); // undefined - accountingCopy doesn't have a problem called name
/* with THIS : DEPARTMENT we will can error *
/* FIX: add name as property*
const accountingCopy2 = { name: 'Abu', describe: accounting.describe };
accountingCopy2.describe(); */

accounting.addEmployee('Abu');
accounting.addEmployee('Combe');

/* accounting.employees[2] = "Test"; ERROR because employees is private*/
/* accounting.name = "Test"; Will work since the property name is public */

accounting.printEmployeeInfo();