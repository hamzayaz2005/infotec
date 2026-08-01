<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'الدرس';
$lessons = demo_lessons();
$extraJs = ['course.js', 'sidebar.js'];

require __DIR__ . '/includes/header.php';
?>

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
