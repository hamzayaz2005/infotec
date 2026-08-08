// ==========================================
// FIX S2-T04: Form Validation Implementation
// FIX S2-T05: Password Strength Implementation
// ==========================================

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const passwordInput = document.querySelector('input[type="password"]');
    const emailInput = document.querySelector('input[type="email"]');
    const strengthMeter = document.querySelector('.password-strength-meter');

    // دالة مساعدة لفحص صحة البريد الإلكتروني
    const validateEmail = () => {
        if (!emailInput) return true;
        const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim());
        if (emailInput.value.trim() === '') {
            emailInput.classList.remove('is-valid', 'is-invalid');
            return false;
        }
        if (isValid) {
            emailInput.classList.remove('is-invalid');
            emailInput.classList.add('is-valid');
        } else {
            emailInput.classList.remove('is-valid');
            emailInput.classList.add('is-invalid');
        }
        return isValid;
    };

    // دالة مساعدة لفحص صحة كلمة المرور
    const validatePassword = () => {
        if (!passwordInput) return true;
        const isValid = passwordInput.value.length >= 8;
        if (passwordInput.value === '') {
            passwordInput.classList.remove('is-valid', 'is-invalid');
            return false;
        }
        if (isValid) {
            passwordInput.classList.remove('is-invalid');
            passwordInput.classList.add('is-valid');
        } else {
            passwordInput.classList.remove('is-valid');
            passwordInput.classList.add('is-invalid');
        }
        return isValid;
    };

    // 1. تفعيل فحص قوة كلمة المرور الفوري (Password Strength)
    if (passwordInput && strengthMeter) {
        passwordInput.addEventListener('input', (e) => {
            const val = e.target.value;
            let score = 0;

            if (val.length === 0) {
                strengthMeter.style.width = '0%';
                strengthMeter.style.backgroundColor = 'transparent';
                validatePassword();
                return;
            }

            if (val.length >= 8) score += 25;
            if (/[A-Z]/.test(val)) score += 25;
            if (/[0-9]/.test(val)) score += 25;
            if (/[^A-Za-z0-9]/.test(val)) score += 25;

            // تحديث الشريط البصري
            strengthMeter.style.width = score + '%';
            if (score <= 25) {
                strengthMeter.style.backgroundColor = 'var(--danger-color, #ef4444)';
            } else if (score <= 75) {
                strengthMeter.style.backgroundColor = 'var(--warning-color, #f59e0b)';
            } else {
                strengthMeter.style.backgroundColor = 'var(--accent, #10b981)';
            }

            validatePassword();
        });
    }

    // تفعيل التحقق الحي عند الكتابة في البريد الإلكتروني
    if (emailInput) {
        emailInput.addEventListener('input', validateEmail);
    }

    // 2. تفعيل التحقق عند إرسال النموذج (Validation)
    if (form) {
        form.addEventListener('submit', (e) => {
            const isEmailValid = validateEmail();
            const isPasswordValid = validatePassword();

            if (!isEmailValid || !isPasswordValid) {
                e.preventDefault();
            }
        });
    }
});