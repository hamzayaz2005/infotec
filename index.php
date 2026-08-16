<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'InfoTec — منصة تعليمية';
<<<<<<< HEAD
$extraJs = ['counters.js', 'theme.js'];
=======
$extraJs = ['counters.js'];
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
$courses = demo_courses();

require __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <h1>مرحباً بكم في InfoTec</h1>
<<<<<<< HEAD
    <p>منصة تعليمية ذكية — حالياً تحت الإصلاح ⚠️</p>
    <button id="theme-toggle" class="theme-toggle" type="button">🌙 وضع ليلي</button>
=======
    <p>منصة تعليمية ذكية — تم تحديث وإصلاح النظام بنجاح 🚀</p>
    <button id="theme-toggle" class="theme-toggle" type="button">اهلا بكم في تجربة سلسلة وممتعة 😁😁</button>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
</section>

<div class="stats-row">
    <div class="stat-box">
<<<<<<< HEAD
        <div class="num" data-counter="250">100</div>
        <div>طالب</div>
    </div>
    <div class="stat-box">
        <div class="num" data-counter="48">100</div>
        <div>كورس</div>
    </div>
    <div class="stat-box">
        <div class="num" data-counter="12">100</div>
=======
        <div class="num" data-counter="250">0</div>
        <div>طالب</div>
    </div>
    <div class="stat-box">
        <div class="num" data-counter="48">0</div>
        <div>كورس</div>
    </div>
    <div class="stat-box">
        <div class="num" data-counter="12">0</div>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
        <div>مدرس</div>
    </div>
</div>

<section class="about-section">
    <h2>من نحن</h2>
    <p>InfoTec منصة تعليمية تهدف لتقديم أفضل تجربة تعلم رقمية للطلاب الجامعيين. نقدم كورسات في الذكاء الاصطناعي، البرمجة، والأمن السيبراني.</p>
</section>

<<<<<<< HEAD
<h2 style="margin-bottom:1rem">أحدث الكورسات</h2>
<div class="courses-grid">
    <?php foreach (array_slice($courses, 0, 3) as $course): ?>
    <article class="course-card">
        <!-- BUG S1-T03: broken image paths -->
        <img src="<?= asset('images/' . e($course['image'])) ?>" alt="<?= e($course['title']) ?>">
=======
<h2 class="section-title">أحدث الكورسات</h2>
<div class="courses-grid">
    <?php foreach (array_slice($courses, 0, 3) as $course): ?>
    <article class="course-card">
        <!-- FIXED S1-T03: correct asset image path call -->
        <img src="<?= asset(e($course['image'])) ?>" alt="<?= e($course['title']) ?>">
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
        <div class="course-card-body">
            <h3><?= e($course['title']) ?></h3>
            <p class="teacher"><?= e($course['teacher']) ?></p>
            <div class="meta">
                <span><?= e($course['price']) ?></span>
                <a href="/infotec/courses.php" class="btn-subscribe">اشترك الآن</a>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</div>

<<<<<<< HEAD
<!-- BUG S2-T09: welcome modal forced hidden -->
<div id="welcome-modal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:1000">
    <div style="background:white;padding:2rem;margin:20% auto;max-width:400px;text-align:center">
        <h3>مرحباً في InfoTec!</h3>
        <button onclick="this.parentElement.parentElement.style.display='none'">إغلاق</button>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
$extraJs = ['counters.js', 'theme.js'];
=======
<!-- FIXED S2-T09: restored display accessibility for modal toggle -->
<div id="welcome-modal" class="modal-overlay">
    <div class="modal-content">
        <h3>مرحباً في InfoTec!</h3>
        <p>نتمنى لك رحلة تعليمية ممتعة داخل المنصة.</p>
        <button type="button" class="btn-close" onclick="document.getElementById('welcome-modal').style.display='none'">إغلاق</button>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
