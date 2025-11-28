// Form submission handler - Kirim ke Database
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formMessage = document.getElementById('formMessage');
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // Tampilkan loading message
    formMessage.textContent = 'Mengirim pesan...';
    formMessage.className = 'form-message';
    formMessage.style.display = 'block';
    formMessage.style.color = '#b74b4b';
    
    // Kirim data ke PHP menggunakan fetch
    fetch('submit_contact.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            formMessage.textContent = data.message;
            formMessage.className = 'form-message success';
            formMessage.style.display = 'block';
            
            // Reset form
            document.getElementById('contactForm').reset();
            
            // Hide message after 5 seconds
            setTimeout(() => {
                formMessage.style.display = 'none';
            }, 5000);
        } else {
            formMessage.textContent = data.message;
            formMessage.className = 'form-message error';
            formMessage.style.display = 'block';
        }
    })
    .catch(error => {
        formMessage.textContent = 'Terjadi kesalahan! Silakan coba lagi.';
        formMessage.className = 'form-message error';
        formMessage.style.display = 'block';
        console.error('Error:', error);
    });
});

// Navigasi smooth scrolling
document.querySelectorAll("nav a, .btn").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const href = this.getAttribute("href");
    if (href.startsWith("#")) {
      e.preventDefault();
      const section = document.querySelector(href);
      if (section) {
        section.scrollIntoView({ behavior: "smooth" });
      }
    }
  });
});

// Active nav link on scroll
window.addEventListener("scroll", () => {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll("nav a");

  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (scrollY >= sectionTop - 200) {
      current = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href") === `#${current}`) {
      link.classList.add("active");
    }
  });
});
