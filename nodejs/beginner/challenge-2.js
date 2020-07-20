let i = 0;
const func = setInterval(() => {
    console.log('Hello');
    i++;

    if (i == 5) {
        console.log('Done');
        clearInterval(func);
    }
}, 1000);