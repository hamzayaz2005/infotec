// BUG S2-T09: FIXED counter starts at 0 and ends at exact target
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-counter]').forEach(el => {
        let count = 0;
        const target = parseInt(el.dataset.counter, 10);
        const timer = setInterval(() => {
            count++;
            el.textContent = count;
            if (count >= target) clearInterval(timer);
        }, 50);
    });
});