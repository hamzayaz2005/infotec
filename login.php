<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/config/database.php';

$pageTitle = 'تسجيل الدخول';
$error = '';

if (is_post()) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // BUG S4-T01: accepts any password
    if ($email !== '') {
        $_SESSION['infotec_user'] = [
            'name' => explode('@', $email)[0],
            'email' => $email,
            'role' => 'student',
        ];
        header('Location: /infotec/dashboard.php');
        exit;
    }
    $error = 'أدخل البريد الإلكتروني';
}

require __DIR__ . '/includes/header.php';
?>

<div style="max-width:400px;margin:2rem auto">
    <h1 style="margin-bottom:1.5rem">تسجيل الدخول</h1>
    <?php if ($error): ?><div class="alert alert-error"><?= e($error) ?></div><?php endif; ?>

    <form method="post" id="login-form">
        <div class="form-group">
            <label>البريد الإلكتروني</label>
            <!-- BUG S2-T05: missing name attribute -->
            <input type="email" class="form-control" id="email" placeholder="student@university.edu">
        </div>
        <div class="form-group">
            <label>كلمة المرور</label>
            <input type="password" name="password" class="form-control" id="password">
            <button type="button" onclick="togglePassword()" style="margin-top:4px;font-size:0.8rem">إظهار/إخفاء</button>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%">دخول</button>
    </form>
    <p style="margin-top:1rem;text-align:center"><a href="/infotec/register.php">إنشاء حساب جديد</a></p>
</div>

<script src="<?= asset('js/auth.js') ?>"></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
