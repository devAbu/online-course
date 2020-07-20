let interval, i = 5;

const func = delay => {
    if (i === 5) {
        clearInterval(interval);
        interval = setInterval(() => {
            console.log('Hello ' + delay);
            func(delay + 100);
        }, delay);
        i = 0;
    }

    i += 1;
};

func(100);