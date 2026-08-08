document.addEventListener('DOMContentLoaded', () => {
    // FIX BUG S2-T02: sidebar toggle
    const toggle = document.querySelector('#sidebar-toggle');
    const sidebar = document.querySelector('.lesson-sidebar');
    if (toggle && sidebar) {
        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    }

    // FIX BUG S2-T03: tabs functionality wired
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');

    if (tabButtons.length > 0 && tabPanels.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetTab = button.getAttribute('data-tab');

                // Remove active class from all buttons and panels
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanels.forEach(panel => panel.classList.remove('active'));

                // Add active class to current button and target panel
                button.classList.add('active');
                
                // Correction: Encapsulate CSS Selectors correctly with string template syntax
                const targetPanel = document.querySelector(`#${targetTab}`) || document.querySelector(`[data-panel="${targetTab}"]`);
                if (targetPanel) {
                    targetPanel.classList.add('active');
                }
            });
        });
    }
});