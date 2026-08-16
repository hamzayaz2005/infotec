<<<<<<< HEAD
// BUG S2-T07: password toggle broken
function togglePassword() {
    // const input = document.querySelector('#password');
    // input.type = input.type === 'password' ? 'text' : 'password';
}
=======
// FIX S2-T07: Restored password toggle functionality securely
function togglePassword() {
    const input = document.querySelector('#password');
    if (input) {
        input.type = input.type === 'password' ? 'text' : 'password';
    }
}
>>>>>>> 39e69bdd65215e6976399c04e45f6ad43fddf004
