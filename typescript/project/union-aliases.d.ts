declare type Combinable = number | string;
declare let combine: (input1: Combinable, input2: number | string, resultType: 'as-number' | 'as-text') => any;
declare const combinedAges: any;
declare const combinedNamesAges: any;
declare const combineNames: any;
declare function greet(user: {
    name: string;
    age: number;
}): void;
declare function isOlder(user: {
    name: string;
    age: number;
}, checkAge: number): boolean;
declare type User = {
    name: string;
    age: number;
};
declare function greet2(user: User): void;
declare function isOlder2(user: User, checkAge: number): boolean;
