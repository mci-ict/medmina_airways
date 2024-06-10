document.addEventListener('DOMContentLoaded', function () {
    var loginModal = document.getElementById('loginModal');
    var signupModal = document.getElementById('signupModal');
    
    var loginLink = document.getElementById('loginLink');
    var signupLink = document.getElementById('signupLink');
    
    var closeLogin = document.getElementById('closeLogin');
    var closeSignup = document.getElementById('closeSignup');
    
    loginLink.onclick = function() {
        loginModal.style.display = "block";
    }
    
    signupLink.onclick = function() {
        signupModal.style.display = "block";
    }
    
    closeLogin.onclick = function() {
        loginModal.style.display = "none";
    }
    
    closeSignup.onclick = function() {
        signupModal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }
        if (event.target == signupModal) {
            signupModal.style.display = "none";
        }
    }

    // Tabs functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            document.querySelector('.tab-button.active').classList.remove('active');
            document.querySelector('.tab-content.active').classList.remove('active');

            button.classList.add('active');
            document.getElementById(button.dataset.tab).classList.add('active');
        });
    });
});

