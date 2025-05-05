const starsContainer = document.getElementById('stars-container');

function createStars(number) {
    for (let i = 0; i < number; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        
        const size = Math.random() * 3 + 1;
        star.style.zIndex = 2;
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;  
        star.style.left = `${Math.random() * 100}%`;
        star.style.top = `${Math.random() * 100}%`;
        star.style.animationDelay = `${Math.random() * 2}s`;

        starsContainer.appendChild(star);
    }
}

createStars(130);