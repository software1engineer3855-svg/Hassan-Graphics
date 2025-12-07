const cards = document.querySelectorAll(".card");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        }
    });
}, {
    threshold: 0.2   // 20% visible before triggering
});

cards.forEach(card => observer.observe(card));


// headings animations
const elements = document.querySelectorAll(".scroll-fade-up");

const scrollFadeObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    });
}, {
    threshold: 0.2
});

elements.forEach(el => scrollFadeObserver.observe(el));

// counters like stop watch
function animateCounter(element, target, duration = 2000) {
    let count = 0;
    const stepTime = Math.max(Math.floor(duration / target), 20);

      let suffix = "";
    const match = element.innerHTML.match(/[^0-9]*$/); // matches non-numbers at end
    if (match) {
        suffix = match[0];
    }

    const interval = setInterval(() => {
        count++;

        element.innerHTML = count + suffix;
        if (count >= target) {
            clearInterval(interval);
        }
    }, stepTime);
}

// Select all counters
const counters = document.querySelectorAll(".counter");

// Use Intersection Observer
const scrollObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.getAttribute("data-target"));

            // Start counter only once
            if (!el.classList.contains("counted")) {
                animateCounter(el, target);
                el.classList.add("counted");
            }

            // Trigger fade-up animation
            el.classList.add("show");
        }
    });
}, { threshold: 0.5 }); // triggers when 50% visible

// Observe all counters
counters.forEach(counter => scrollObserver.observe(counter));
