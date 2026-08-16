<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'اختبار الكورس';

require __DIR__ . '/includes/header.php';
?>

<h1>اختبار: مقدمة AI</h1>
<form id="quiz-form" style="margin-top:1.5rem;max-width:600px">
    <div class="panel" style="margin-bottom:1rem">
        <p><strong>1.</strong> ما هو الذكاء الاصطناعي؟</p>
<<<<<<< HEAD
        <label><input type="radio" value="a"> محاكاة الذكاء البشري</label><br>
        <label><input type="radio" value="b"> نوع من الفيروسات</label>
=======
        <label><input type="radio" name="question_1" value="a"> محاكاة الذكاء البشري</label><br>
        <label><input type="radio" name="question_1" value="b"> نوع من الفيروسات</label>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
    </div>
    <button type="submit" class="btn" id="quiz-submit">تسليم الإجابات</button>
</form>

<script>
<<<<<<< HEAD
// BUG S2-T10: quiz not captured as JSON
document.getElementById('quiz-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('الاختبار غير مربوط بالـ Backend');
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
=======
// FIX S2-T10: quiz captured as JSON successfully
document.getElementById('quiz-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const answers = {};
    
    formData.forEach((value, key) => {
        answers[key] = value;
    });
    
    const jsonPayload = JSON.stringify(answers);
    
    console.log('Quiz Answers JSON Payload:', jsonPayload);
    alert('تم تسليم الإجابات وتحويلها إلى JSON بنجاح!');
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
