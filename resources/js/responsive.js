document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("hamburger-btn");
    const sidebar = document.getElementById("drawer-sidebar");
    const wrapper = document.getElementById("main-wrapper");
    const navbar = document.getElementById("main-navbar");

    if (btn && sidebar && wrapper && navbar) {
        btn.addEventListener("click", () => {
            const sidebarHidden = sidebar.classList.toggle("-translate-x-full");

            if (sidebarHidden) {
                // Sidebar tertutup → full width
                wrapper.classList.remove("ml-64");
                navbar.classList.remove("left-64");
                navbar.classList.add("left-0");
            } else {
                // Sidebar terbuka → geser 64
                wrapper.classList.add("ml-64");
                navbar.classList.remove("left-0");
                navbar.classList.add("left-64");
            }
        });
    }
});
