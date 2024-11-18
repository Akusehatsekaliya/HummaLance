const container = document.getElementById("scrollContainer");
const content = document.getElementById("scrollContent");

// Clone nodes for infinite scroll effect
let items = [...content.children];
items.forEach((item) => {
    const clone = item.cloneNode(true);
    content.appendChild(clone);
});

// Handle infinite scroll
container.addEventListener("scroll", () => {
    const containerWidth = container.offsetWidth;
    const scrollWidth = content.scrollWidth / 2;

    if (container.scrollLeft >= scrollWidth) {
        container.scrollLeft -= scrollWidth;
    } else if (container.scrollLeft <= 0) {
        container.scrollLeft += scrollWidth;
    }
});
