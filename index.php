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
  background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
  min-height: 100vh;
  color: #e2e8f0;
}

/* Glassmorphism header */
header {
  background: rgba(15, 15, 35, 0.8);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding: 1rem 0;
  position: sticky;
  top: 0;
  z-index: 1000;
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
  color: white;
  font-size: 1.5rem;
  font-weight: 700;
  letter-spacing: -0.025em;
  text-shadow: 0 2px 4px rgba(0,0,0,0.3);
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
  border: none;
  border-radius: 50px;
  background: rgba(30, 30, 50, 0.9);
  backdrop-filter: blur(10px);
  color: #e2e8f0;
  font-size: 1rem;
  outline: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(0,0,0,0.3);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

#searchBar:focus {
  background: rgba(30, 30, 50, 0.95);
  box-shadow: 0 8px 30px rgba(0,0,0,0.4);
  transform: translateY(-1px);
  border-color: rgba(99, 102, 241, 0.5);
}

#searchBar::placeholder {
  color: #94a3b8;
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
  background: rgba(30, 30, 50, 0.6);
  border-radius: 50%;
  transition: all 0.3s ease;
  text-decoration: none;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.social-link:hover {
  background: rgba(30, 30, 50, 0.8);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  border-color: rgba(99, 102, 241, 0.4);
}

.social-icon {
  width: 20px;
  height: 20px;
  fill: white;
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
  color: white;
  margin-bottom: 1rem;
  text-shadow: 0 4px 8px rgba(0,0,0,0.3);
  letter-spacing: -0.02em;
}

.hero-subtitle {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.9);
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
  background: rgba(30, 30, 50, 0.6);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 8px 32px rgba(0,0,0,0.4);
}

.project-box:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 20px 60px rgba(0,0,0,0.6);
  border-color: rgba(99, 102, 241, 0.4);
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
  background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.4));
  padding: 1.5rem;
  transform: translateY(0);
  transition: all 0.3s ease;
}

.project-box:hover .overlay {
  background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.6));
}

.overlay h2 {
  font-size: 1.25rem;
  font-weight: 600;
  margin: 0;
  letter-spacing: -0.025em;
}

.project-detail {
  max-width: 800px;
  margin: 4rem auto;
  padding: 2rem;
  text-align: center;
  background: rgba(30, 30, 50, 0.8);
  backdrop-filter: blur(20px);
  border-radius: 24px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.project-detail img {
  width: 100%;
  max-height: 400px;
  object-fit: cover;
  border-radius: 16px;
  margin-bottom: 2rem;
  box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.project-detail a {
  display: inline-flex;
  align-items: center;
  margin-top: 2rem;
  padding: 0.75rem 2rem;
  background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(79, 70, 229, 0.4);
}

.project-detail a:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 30px rgba(79, 70, 229, 0.6);
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
                <h1>Portfolio</h1>
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
            <h1 class="hero-title">My Projects</h1>
            <p class="hero-subtitle">Exploring creativity through code and design</p>
        </section>
        <div class="grid" id="projectGrid">
            <!-- Sample projects - replace with your PHP loop -->
            <a href="#" class="project-box" data-title="TEST">
                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=280&h=150&fit=crop" alt="TEST">
                <div class="overlay">
                    <h2>AI Chatbot</h2>
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