<<<<<<< HEAD
// BUG S2-T09: counter starts at 100
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-counter]').forEach(el => {
        let count = 100;
=======
// BUG S2-T09: FIXED counter starts at 0 and ends at exact target
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-counter]').forEach(el => {
        let count = 0;
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
        const target = parseInt(el.dataset.counter, 10);
        const timer = setInterval(() => {
            count++;
            el.textContent = count;
<<<<<<< HEAD
            if (count >= target + 100) clearInterval(timer);
        }, 50);
    });
});
=======
            if (count >= target) clearInterval(timer);
        }, 50);
    });
});
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
