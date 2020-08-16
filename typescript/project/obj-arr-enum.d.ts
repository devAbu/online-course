declare enum Role {
    ADMIN = 5,
    READ_ONLY = "USER",
    AUTHOR = 65
}
declare const person: {
    name: string;
    age: number;
    hobbies: string[];
    role: (string | number)[];
    type: Role;
};
declare const product: {
    id: string;
    price: number;
    tags: string[];
    details: {
        title: string;
        description: string;
    };
};
declare const product2: {
    id: string;
    price: number;
    tags: string[];
    details: {
        title: string;
        description: string;
    };
};
