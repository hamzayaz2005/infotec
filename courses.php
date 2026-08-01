<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'استعراض الكورسات';
$courses = demo_courses();

require __DIR__ . '/includes/header.php';
?>

<h1 style="margin-bottom:1.5rem">جميع الكورسات</h1>

<!-- BUG S2-T12: search input missing id for live search -->
<input type="text" placeholder="ابحث عن كورس..." style="margin-bottom:1.5rem;padding:10px;width:100%">

<div class="courses-grid" id="courses-list">
    <?php foreach ($courses as $course): ?>
    <article class="course-card" data-title="<?= e($course['title']) ?>">
        <img src="<?= asset('images/' . e($course['image'])) ?>" alt="">
        <div class="course-card-body">
            <h3><?= e($course['title']) ?></h3>
            <p class="teacher">👨‍🏫 <?= e($course['teacher']) ?></p>
            <p>👥 <?= (int)$course['students'] ?> طالب</p>
            <div class="meta">
                <strong><?= e($course['price']) ?></strong>
                <a href="/infotec/lesson.php?id=<?= (int)$course['id'] ?>" class="btn-subscribe">اشترك الآن</a>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</div>

<div class="skeleton-card" style="margin-top:2rem"></div>

<?php
$extraJs = ['course.js'];
require __DIR__ . '/includes/footer.php';
