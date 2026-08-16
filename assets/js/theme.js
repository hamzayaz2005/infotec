<<<<<<< HEAD
/**
 * Dark Mode Toggle & Persistence Script (Fixed for HTML/Body Root)
 * Fixes: BUG S2-T01, S1-T02, BUG S2-T13, BUG S2-T14 (EventListener Guard)
 */

(function () {
    // 1. Guard Flag: منع تكرار تنفيذ السكربت عند التضمين المزدوج
    if (window.__themeScriptInitialized) {
        return;
    }
    window.__themeScriptInitialized = true;

    function updateButtonUI(btn, isDarkMode) {
        if (!btn) return;
        btn.textContent = isDarkMode ? '☀️ وضع نهار' : '🌙 وضع ليلي';
    }

    function toggleTheme() {
        // تبديل الكلاس على الجذر html وعلى body لضمان عمل المتغيرات تماماً
        const isDarkHtml = document.documentElement.classList.toggle('dark-mode');
        document.body.classList.toggle('dark-mode', isDarkHtml);
        
        const btn = document.querySelector('#theme-toggle');
        
        // حفظ التفضيل في localStorage
        localStorage.setItem('theme', isDarkHtml ? 'dark' : 'light');
        
        // تحديث الواجهة
        updateButtonUI(btn, isDarkHtml);
    }

    function initTheme() {
        const btn = document.querySelector('#theme-toggle');
        
        // استعادة الوضع المحفوظ عند التحميل
        const savedTheme = localStorage.getItem('theme');
        const isDarkMode = savedTheme === 'dark';
        
        // تطبيق الكلاس على العناصر المحددة
        document.documentElement.classList.toggle('dark-mode', isDarkMode);
        document.body.classList.toggle('dark-mode', isDarkMode);
        
        // ضبط نص الزر الأولي
        updateButtonUI(btn, isDarkMode);

        // ربط الحدث بالزر مع الحماية من التكرار على مستوى العنصر
        if (btn && !btn.dataset.themeListenerAdded) {
            btn.dataset.themeListenerAdded = 'true';
            btn.addEventListener('click', toggleTheme);
        }
    }

    // التنفيذ الآمن عند جاهزية الشجرة
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTheme);
    } else {
        initTheme();
    }
})();
=======
const themeToggleBtn = document.querySelector('.theme-toggle');

themeToggleBtn.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  
  if (document.body.classList.contains('dark-mode')) {
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
});

const currentTheme = localStorage.getItem('theme');
if (currentTheme === 'dark') {
  document.body.classList.add('dark-mode');
}
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
