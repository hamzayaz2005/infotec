<<<<<<< HEAD
document.addEventListener('DOMContentLoaded', () => { 
  const lessonLayout = document.getElementById('lessonLayout'); 
  // تصحيح المعرفات لتطابق الأزرار في ملف lesson.php
  const sidebarToggle = document.getElementById('sidebar-toggle-close'); 
  const sidebarOpenBtn = document.getElementById('sidebar-toggle-open'); 

  if (sidebarToggle && lessonLayout) { 
    sidebarToggle.addEventListener('click', () => { 
      lessonLayout.classList.add('sidebar-collapsed'); 
      if (sidebarOpenBtn) sidebarOpenBtn.style.display = 'inline-flex'; 
    }); 
  } 

  if (sidebarOpenBtn && lessonLayout) { 
    sidebarOpenBtn.addEventListener('click', () => { 
      lessonLayout.classList.remove('sidebar-collapsed'); 
      sidebarOpenBtn.style.display = 'none'; 
    }); 
  } 
});
=======
// alias for course.js sidebar - BUG file referenced in tasks
// See course.js
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
