<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'الدرس';
$lessons = demo_lessons();
$extraJs = ['course.js', 'sidebar.js'];

require __DIR__ . '/includes/header.php';
?>

<<<<<<< HEAD
<div class="lesson-layout" id="lessonLayout">
    <!-- الشريط الجانبي -->
    <aside class="lesson-sidebar" id="lessonSidebar">
        <div class="sidebar-header">
            <h3>قائمة الدروس</h3>
            <button id="sidebar-toggle-close" class="icon-btn" type="button" title="إغلاق القائمة">✕</button>
        </div>
        
        <div class="lessons-list">
            <?php foreach ($lessons as $lesson): ?>
            <div class="lesson-item <?= $lesson['locked'] ? 'locked' : '' ?>">
                <span class="status-icon"><?= $lesson['locked'] ? '🔒' : '▶' ?></span>
                <span class="lesson-title"><?= e($lesson['title']) ?></span>
                <small class="lesson-duration"><?= e($lesson['duration']) ?></small>
            </div>
            <?php endforeach; ?>
        </div>
    </aside>

    <!-- منطقة المحتوى الرئيسية -->
    <main class="lesson-content">
        <!-- زر فتح القائمة إذا كانت مغلقة -->
        <button id="sidebar-toggle-open" class="btn btn-outline sidebar-open-btn" type="button">
            ☰ قائمة الدروس
        </button>

        <div class="video-container">
            <div class="video-placeholder">
                <div class="player-icon">▶</div>
                <p>مشغل الفيديو جاهز ويعمل الآن بنجاح</p>
            </div>
        </div>

        <div class="tabs-container">
            <div class="tabs">
                <button class="tab-btn active" data-tab="desc">الوصف</button>
                <button class="tab-btn" data-tab="qa">الأسئلة والأنشطة</button>
                <button class="tab-btn" data-tab="files">ملفات الدرس</button>
            </div>
            
            <div id="tab-desc" class="tab-panel active">
                <p>في هذا الدرس نتعرف على أساسيات الذكاء الاصطناعي وتطبيقاته العملية في مجالات التعليم والتطوير.</p>
            </div>
            <div id="tab-qa" class="tab-panel">
                <div class="comments-section">
                    <h4>أسئلة الطلاب</h4>
                    <textarea class="form-control" placeholder="اكتب سؤالك أو استفسارك هنا..."></textarea>
                    <button class="btn btn-primary" type="button">إرسال السؤال</button>
                </div>
            </div>
            <div id="tab-files" class="tab-panel">
                <div class="file-item">
                    <span>📎 ملف PDF: مقدمة-AI.pdf</span>
                    <button class="btn btn-sm">تحميل</button>
                </div>
            </div>
        </div>

        <div class="progress-section">
            <div class="progress-info">
                <span>تقدمك في الدورة</span>
                <span>25%</span>
            </div>
            <div class="progress-bar">
                <div class="fill" style="width: 25%"></div>
            </div>
        </div>
    </main>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
=======
<div class="lesson-layout">
    <aside class="lesson-sidebar">
        <button id="sidebar-toggle" type="button" style="margin-bottom:1rem">☰ القائمة</button>
        <h3>قائمة الدروس</h3>
        <?php foreach ($lessons as $lesson): ?>
        <div class="lesson-item <?= $lesson['locked'] ? 'locked' : '' ?>">
            <?= $lesson['locked'] ? '🔒' : '▶' ?>
            <?= e($lesson['title']) ?>
            <small>(<?= e($lesson['duration']) ?>)</small>
        </div>
        <?php endforeach; ?>
    </aside>

    <div class="lesson-content">
        <div class="video-container">
            <div class="video-placeholder" style="display:flex;align-items:center;justify-content:center;color:#fff">
                ▶ مشغل الفيديو معطل — أصلح z-index و JS
            </div>
        </div>

        <div class="tabs" style="margin-top:1.5rem">
            <button class="tab-btn active" data-tab="desc">الوصف</button>
            <button class="tab-btn" data-tab="qa">أسئلة</button>
            <button class="tab-btn" data-tab="files">ملفات</button>
        </div>
        <div id="tab-desc" class="tab-panel active">
            <p>في هذا الدرس نتعرف على أساسيات الذكاء الاصطناعي وتطبيقاته في التعليم.</p>
        </div>
        <div id="tab-qa" class="tab-panel">
            <div class="comments-section">
                <h4>أسئلة الطلاب</h4>
                <textarea placeholder="اكتب سؤالك..."></textarea>
                <button class="btn" type="button" style="margin-top:8px">إرسال</button>
            </div>
        </div>
        <div id="tab-files" class="tab-panel">
            <p>📎 ملف PDF: مقدمة-AI.pdf</p>
        </div>

        <div class="progress-bar" style="margin-top:1.5rem">
            <div class="fill" style="width:25%"></div>
        </div>
        <p style="margin-top:4px;font-size:0.85rem">تقدمك: 25%</p>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
