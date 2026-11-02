document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector(".cal-header .cal-menu-btn");
    const menu = document.querySelector(".cal-header .cal-menu");
    const overlay = document.createElement('div');
    overlay.className = 'overlay'; // Create overlay element
    document.body.appendChild(overlay); // Append overlay to body

    if (menuBtn && menu) {
        menuBtn.addEventListener("click", function () {
            menu.classList.toggle("open");
            overlay.style.display = menu.classList.contains("open") ? 'block' : 'none';
            document.body.classList.toggle('no-scroll', menu.classList.contains("open")); // Prevent scrolling of the body

            // Toggle the active class on the menu button
            menuBtn.classList.toggle("active", menu.classList.contains("open"));
        });
    }

    // Close the menu when the overlay is clicked
    overlay.addEventListener('click', () => {
        menu.classList.remove('open');
        overlay.style.display = 'none';
        document.body.classList.remove('no-scroll'); // Re-enable body scrolling
        
        // Remove the active class from the menu button
        menuBtn.classList.remove("active");
    });
});
