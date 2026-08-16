<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'المساعدة والدعم';

require __DIR__ . '/includes/header.php';
?>

<<<<<<< HEAD
<div class="panel" style="padding:2rem">
    <h1>صندوق المساعدة</h1>
    <p style="margin:1rem 0">هل تحتاج مساعدة؟ تواصل مع فريق الدعم أو ارجع لمنصة InfoMatrix للمهام.</p>
    <form method="post">
        <div class="form-group">
            <label>رسالتك</label>
            <textarea class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn">إرسال</button>
    </form>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
=======
<div class="panel help-panel">
    <h1>صندوق المساعدة</h1>
    <p class="help-description">هل تحتاج مساعدة؟ تواصل مع فريق الدعم أو ارجع لمنصة InfoMatrix للمهام.</p>
    <form method="post" class="help-form">
        <div class="form-group">
            <label for="help-message">رسالتك</label>
            <textarea id="help-message" class="form-control" rows="4" placeholder="اكتب استفسارك أو مشكلتك هنا..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
