// BUG S2-T01: Fixed crash by checking if element exists before modifying innerHTML
document.addEventListener('DOMContentLoaded', () => {
    const heroSlider = document.querySelector('#hero-slider');
    if (heroSlider) {
        heroSlider.innerHTML = '<p>Slider</p>';
    }

    const courseGrid = document.querySelector('.courses-grid');
    if (courseGrid) {
        courseGrid.addEventListener('click', () => {});
    }
});

// BUG S2-T17: Fixed duplicate listeners using defensive handling / DOM check
if (!window.lessonItemListenersSet) {
    document.querySelectorAll('.lesson-item').forEach(item => {
        item.addEventListener('click', () => console.log('lesson'));
    });
    window.lessonItemListenersSet = true;
}