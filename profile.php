<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'الملف الشخصي';

require __DIR__ . '/includes/header.php';
?>

<<<<<<< HEAD
<h1>الملف الشخصي</h1>
<div class="panel" style="margin-top:1.5rem;max-width:500px">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>الصورة الشخصية</label>
            <input type="file" name="avatar">
=======
<!-- إضافة تنسيق تحسين التجاوب الخاص بصفحة البروفايل للتابلت -->
<style>
/* إعادة ضبط اللوحة لتكون متجاوبة بدون قيم صلبة مدمجة */
.profile-container {
    width: 100%;
    margin-top: 1.5rem;
}

/* تنسيق القائمة المنسدلة بأسلوب موحد */
.profile-dropdown {
    position: relative;
    margin-top: 2rem;
    display: inline-block;
}

.profile-dropdown .dropdown-menu {
    display: none;
    position: absolute;
    background-color: var(--panel-bg, #ffffff);
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 10;
    min-width: 160px;
    border-radius: 4px;
}

.profile-dropdown:hover .dropdown-menu {
    display: block;
}

.profile-dropdown .dropdown-menu a {
    display: block;
    padding: 0.75rem 1rem;
    text-decoration: none;
}

/* استعلام الوسائط الخاص بأجهزة التابلت (~768px) لتحقيق التخطيط الموضح في المهمة */
@media screen and (max-width: 768px) {
    .panel.profile-container {
        max-width: 100%;
        width: 100%;
        box-sizing: border-box;
    }
    
    .form-group input[type="text"],
    .form-group input[type="file"],
    .btn {
        width: 100%;
        display: block;
    }
}
</style>

<h1>الملف الشخصي</h1>

<div class="panel profile-container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>الصورة الشخصية</label>
            <input type="file" name="avatar" class="form-control">
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
        </div>
        <div class="form-group">
            <label>الاسم</label>
            <input type="text" class="form-control" value="طالب">
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
<<<<<<< HEAD
    <div class="profile-dropdown" style="margin-top:2rem">
        <button>القائمة ▼</button>
=======
    
    <div class="profile-dropdown">
        <button type="button" class="btn">القائمة ▼</button>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
        <div class="dropdown-menu">
            <a href="/infotec/dashboard.php">لوحتي</a>
            <a href="/infotec/logout.php">خروج</a>
        </div>
    </div>
</div>

<<<<<<< HEAD
<?php require __DIR__ . '/includes/footer.php'; ?>
=======
<?php require __DIR__ . '/includes/footer.php'; ?>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
