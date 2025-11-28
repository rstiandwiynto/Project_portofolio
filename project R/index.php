<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio Website</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Tontolodon</a>

        <nav>
            <a href="#home" class="active"> Home</a>
            <a href="#skills" >Skills</a>
            <a href="#hobby" >Hobby</a>
            <a href="#school" >School</a>
            <a href="#address" >Addres</a>
            <a href="#contact" >Contact</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-img">
            <img src="main.jpg" alt="A picture of me">
        </div>
        <div class="home-content">
            <h1>Hi, My name is <span>Ristian</span></h1>
            <h3 class="typing-text">I'm <span></span></h3>
            <p>Student of SMK Negeri 2 Purwakarta, and this my first portofolio.</p>
            <div class="social-icons">
                <a href="https://www.instagram.com/asunsinr?igsh=ZmM4YmE3MnpxN3I1"> <i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/qr/JCA2CFWHOLNRP1"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <a href="#" class="btn">Nice to meet you!</a>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span></h2>
        <p class="section-description">Kemampuan yang saya kuasai</p>
        
        <div class="skills-container">
            <div class="skill-category">
                <h3><i class="fa-solid fa-code"></i> Programming Languages</h3>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <h4>HTML</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                        <h4>CSS</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-js"></i>
                        </div>
                        <h4>JavaScript</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 20%">
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <h4>PHP</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 20%">
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="skill-category">
                <h3><i class="fa-solid fa-toolbox"></i> Tools & Frameworks</h3>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-react"></i>
                        </div>
                        <h4>React JS</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 100%">
                                <span>Still learning...</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-git-alt"></i>
                        </div>
                        <h4>Git & GitHub</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 40%">
                                <span>40%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h4>MySQL</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 50%">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <h4>Figma</h4>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 100%">
                                <span>Still learnig...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hobby" id="hobby">
        <h2 class="heading">My <span>Hobbies</span></h2>
        <p class="section-description">Hal-hal yang saya sukai di luar dunia programming</p>
        
        <div class="hobby-container">
            <div class="hobby-card">
                <div class="hobby-image">
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <div class="hobby-content">
                    <h3>Gaming</h3>
                    <p>Bermain game kompetitif seperti Mobile Legends, PUBG, dan game PC lainnya. Gaming membantu saya melatih strategi dan kerja tim.</p>
                    <div class="hobby-tags">
                        <span>Mobile Legends</span>
                        <span>PUBG</span>
                        <span>Valorant</span>
                    </div>
                </div>
            </div>
            
            <div class="hobby-card">
                <div class="hobby-image">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <div class="hobby-content">
                    <h3>Reading</h3>
                    <p>Membaca artikel teknologi, tutorial programming, dan romance. Saya selalu update dengan teknologi terbaru di dunia IT.</p>
                    <div class="hobby-tags">
                        <span>Tech Articles</span>
                        <span>Romance</span>
                        <span>Comics</span>
                    </div>
                </div>
            </div>
            
            <div class="hobby-card">
                <div class="hobby-image">
                    <i class="fa-solid fa-music"></i>
                </div>
                <div class="hobby-content">
                    <h3>Music</h3>
                    <p>Mendengarkan musik sambil coding adalah kombinasi sempurna. Musik membantu saya tetap fokus dan produktif.</p>
                    <div class="hobby-tags">
                        <span>Pop</span>
                        <span>Jazz</span>
                        <span>DJ indo</span>
                    </div>
                </div>
            </div>
            
            <div class="hobby-card">
                <div class="hobby-image">
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <div class="hobby-content">
                    <h3>Sports</h3>
                    <p>Berolahraga untuk menjaga kesehatan fisik dan mental. Badminton adalah olahraga favorit saya.</p>
                    <div class="hobby-tags">
                        <span>Jogging</span>
                        <span>Swimming</span>
                        <span>Badminton</span>
                    </div>
                </div>
            </div>
            
            <div class="hobby-card">
                <div class="hobby-image">
                    <i class="fa-solid fa-film"></i>
                </div>
                <div class="hobby-content">
                    <h3>Movies & Series</h3>
                    <p>Menonton film dan series di waktu luang. Terutama genre action, Horor, dan Drama Korea yang menarik.</p>
                    <div class="hobby-tags">
                        <span>Marvel</span>
                        <span>Drama Korea</span>
                        <span>Horor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="school" id="school">
        <h2 class="heading">My <span>School</span></h2>
        
        <div class="school-container">
            <div class="school-main">
                <div class="school-image">
                    <img src="smkn 2 purwakarta.jpg" alt="SMK Negeri 2 Purwakarta">
                    <div class="school-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
                
                <div class="school-info">
                    <h3><span>SMK Negeri 2</span> Purwakarta</h3>
                    <p class="school-motto">"Mewujudkan Generasi Unggul dan Berkarakter"</p>
                    
                    <div class="school-details">
                        <div class="detail-item">
                            <i class="fa-solid fa-book"></i>
                            <div>
                                <h4>Jurusan</h4>
                                <p>Rekayasa Perangkat Lunak (RPL)</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fa-solid fa-calendar"></i>
                            <div>
                                <h4>Tahun Masuk</h4>
                                <p>2024 - Sekarang</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fa-solid fa-trophy"></i>
                            <div>
                                <h4>Prestasi</h4>
                                <p>Juara Lomba Web Design 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="school-activities">
                <h3>Kegiatan <span>Sekolah</span></h3>
                <div class="activities-grid">
                    <div class="activity-card">
                        <div class="activity-icon">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h4>Praktik Programming</h4>
                        <p>Belajar berbagai bahasa pemrograman seperti PHP, JavaScript, dan Java</p>
                    </div>
                    
                    <div class="activity-card">
                        <div class="activity-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h4>Kerja Tim</h4>
                        <p>Project-based learning dengan teman sekelas untuk mengembangkan web/aplikasi</p>
                    </div>
                    
                    <div class="activity-card">
                        <div class="activity-icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h4>Praktek Kerja</h4>
                        <p>Program PKL di perusahaan untuk pengalaman kerja nyata</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="address" id="address">
        <h2 class="heading">My <span>Address</span></h2>
        
        <div class="address-container">
            <div class="address-info">
                <h3>Where to Find Me</h3>
                <p>I'm currently based in Purwakarta, West Java, Indonesia. Feel free to visit or reach out!</p>
                
                <div class="address-details">
                    <div class="address-item">
                        <i class="fa-solid fa-school"></i>
                        <div>
                            <h4>School</h4>
                            <p>SMK Negeri 2 Purwakarta<br>Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="address-item">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <div>
                            <h4>City</h4>
                            <p>Purwakarta, West Java<br>Indonesia 41115</p>
                        </div>
                    </div>
                    
                    <div class="address-item">
                        <i class="fa-solid fa-clock"></i>
                        <div>
                            <h4>Available Time</h4>
                            <p>Monday - Friday: 3:00 PM - 9:00 PM<br>Weekend: 9:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fa-solid fa-map-marked-alt"></i>
                    <h3>Purwakarta, West Java</h3>
                    <p>Indonesia</p>
                    <a href="https://www.google.com/maps/place/Purwakarta,+West+Java" target="_blank" class="map-btn">
                        <i class="fa-solid fa-location-arrow"></i> Open in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Let's Connect!</h3>
                <p>Feel free to reach out to me for any inquiries, collaborations, or just to say hello! I'm always excited to connect with new people.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>+62 XXX-XXXX-XXXX</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span>ristian@example.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Purwakarta, Jawa Barat, Indonesia</span>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form id="contactForm">
                    <div class="input-box">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                    
                    <div class="form-message" id="formMessage"></div>
                </form>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>