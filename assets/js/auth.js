// FIX S2-T07: Restored password toggle functionality securely
function togglePassword() {
    const input = document.querySelector('#password');
    if (input) {
        input.type = input.type === 'password' ? 'text' : 'password';
    }
}