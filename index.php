<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
  background: white;
  min-height: 100vh;
  color: #1e293b;
}

/* Glassmorphism header */
header {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 1rem 0;
  position: sticky;
  top: 0;
  z-index: 1000;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
}

.ribbon {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

.ribbon-left h1 {
  color: #0f172a;
  font-size: 1.5rem;
  font-weight: 700;
  letter-spacing: -0.025em;
}

.ribbon-center {
  flex: 1;
  display: flex;
  justify-content: center;
  max-width: 500px;
  margin: 0 2rem;
}

#searchBar {
  width: 100%;
  padding: 0.75rem 1.25rem;
  border: 2px solid #e2e8f0;
  border-radius: 50px;
  background: #f8fafc;
  color: #1e293b;
  font-size: 1rem;
  outline: none;
  transition: all 0.3s ease;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

#searchBar:focus {
  background: white;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  transform: translateY(-1px);
  border-color: #64748b;
}

#searchBar::placeholder {
  color: #64748b;
}

.ribbon-right {
  display: flex;
  gap: 1rem;
  align-items: center;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  background: #f8fafc;
  border-radius: 50%;
  transition: all 0.3s ease;
  text-decoration: none;
  border: 2px solid #e2e8f0;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.social-link:hover {
  background: #e2e8f0;
  transform: translateY(-2px);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  border-color: #64748b;
}

.social-icon {
  width: 20px;
  height: 20px;
  fill: #475569;
  transition: fill 0.3s ease;
}

.social-link:hover .social-icon {
  fill: #0f172a;
}

main {
  max-width: 1200px;
  margin: 0 auto;
  padding: 3rem 2rem;
}

.hero-section {
  text-align: center;
  margin-bottom: 4rem;
}

.hero-title {
  font-size: 3rem;
  font-weight: 800;
  color: #0f172a;
  margin-bottom: 1rem;
  letter-spacing: -0.02em;
}

.hero-subtitle {
  font-size: 1.25rem;
  color: #475569;
  margin-bottom: 2rem;
  font-weight: 400;
}

.grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.5rem;
  justify-items: center;
}

.project-box {
  width: 100%;
  max-width: 280px;
  height: 220px;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  text-decoration: none;
  color: white;
  background: white;
  border: 2px solid #e2e8f0;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.project-box:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  border-color: #64748b;
}

.project-box img {
  width: 100%;
  height: 70%;
  object-fit: cover;
  transition: all 0.4s ease;
}

.project-box:hover img {
  transform: scale(1.1);
  filter: brightness(1.1);
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.5));
  padding: 1.5rem;
  transform: translateY(0);
  transition: all 0.3s ease;
}

.project-box:hover .overlay {
  background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6));
}

.overlay h2 {
  font-size: 1.25rem;
  font-weight: 600;
  margin: 0;
  letter-spacing: -0.025em;
  color: white;
}

.project-detail {
  max-width: 800px;
  margin: 4rem auto;
  padding: 2rem;
  text-align: center;
  background: white;
  border-radius: 24px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  border: 2px solid #e2e8f0;
}

.project-detail img {
  width: 100%;
  max-height: 400px;
  object-fit: cover;
  border-radius: 16px;
  margin-bottom: 2rem;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.project-detail a {
  display: inline-flex;
  align-items: center;
  margin-top: 2rem;
  padding: 0.75rem 2rem;
  background: #0f172a;
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(15, 23, 42, 0.2);
}

.project-detail a:hover {
  background: #334155;
  transform: translateY(-2px);
  box-shadow: 0 8px 30px rgba(15, 23, 42, 0.3);
}

/* Responsive adjustments */
@media (max-width: 1200px) {
  .grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 900px) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .ribbon {
    flex-direction: column;
    gap: 1rem;
    padding: 1rem;
  }
  
  .ribbon-center {
    margin: 0;
    max-width: 100%;
  }
  
  .hero-title {
    font-size: 2rem;
  }
  
  .hero-subtitle {
    font-size: 1rem;
  }
  
  .grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
  
  .project-box {
    max-width: 100%;
    height: 200px;
  }
  
  main {
    padding: 2rem 1rem;
  }
}

/* Smooth fade-in animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.project-box {
  animation: fadeInUp 0.6s ease forwards;
}

.project-box:nth-child(1) { animation-delay: 0.1s; }
.project-box:nth-child(2) { animation-delay: 0.2s; }
.project-box:nth-child(3) { animation-delay: 0.3s; }
.project-box:nth-child(4) { animation-delay: 0.4s; }
.project-box:nth-child(5) { animation-delay: 0.5s; }
.project-box:nth-child(6) { animation-delay: 0.6s; }
</style>
</head>

<body>
    <header>
        <div class="ribbon">
            <div class="ribbon-left">
                <h1>Project Portfolio</h1>
            </div>
            <div class="ribbon-center">
                <input type="text" id="searchBar" placeholder="Search projects...">
            </div>
            <div class="ribbon-right">
                <a href="https://github.com/h2re" target="_blank" title="GitHub" class="social-link">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path d="M12 0C5.374 0 0 5.373 0 12 0 17.302 3.438 21.8 8.207 23.387c.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/camden-laursen-carr-905869307" target="_blank" title="LinkedIn" class="social-link">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero-section">
            <!-- <h1 class="hero-title">Embedded System</h1>
            <p class="hero-subtitle">Exploring creativity through code and design</p> -->
        </section>
        <div class="grid" id="projectGrid">
            <!-- Sample projects -->
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
            <a href="#" class="project-box" data-title="TEST">
                <img src="" alt="TEST">
                <div class="overlay">
                    <h2>TEST</h2>
                </div>
            </a>
        </div>      
    </main>

    <script>
    const searchBar = document.getElementById('searchBar');
    const boxes = document.querySelectorAll('.project-box');

    // Enhanced search with smooth animations
    searchBar.addEventListener('input', () => {
    const query = searchBar.value.toLowerCase();
    
    boxes.forEach((box, index) => {
        const title = box.getAttribute('data-title');
        const shouldShow = title.includes(query);
        
        if (shouldShow) {
        box.style.display = 'block';
        setTimeout(() => {
            box.style.opacity = '1';
            box.style.transform = 'translateY(0)';
        }, index * 50);
        } else {
        box.style.opacity = '0';
        box.style.transform = 'translateY(20px)';
        setTimeout(() => {
            box.style.display = 'none';
        }, 300);
        }
    });
    });

    // Add smooth transitions for search results
    boxes.forEach(box => {
    box.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    });
    </script>
</body>
</html>