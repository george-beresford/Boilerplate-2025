document.addEventListener("DOMContentLoaded", () => {
    const toggleMenu = (event) => {
        event.preventDefault();
        const trigger = event.currentTarget;
        const targetId = trigger.getAttribute("href").substring(1); // Get the ID from href
        const targetElement = document.getElementById(targetId);

        if(!targetElement) { console.warn(targetId + " wasn't found in the DOM."); return; }

        if (trigger.dataset.action === "will-open") {
            trigger.dataset.action = "will-close";
            trigger.setAttribute("title", "Expand hidden navigation menu");
            targetElement.classList.add("open");
            targetElement.classList.remove("close");
        } else {
            trigger.dataset.action = "will-open";
            trigger.setAttribute("title", "Collapse visible navigation menu");
            targetElement.classList.add("close");
            targetElement.classList.remove("open");
        }
    };

    const menuTrigger = document.querySelector('[data-role="hamburger-menu"]');
    if (menuTrigger) {
        menuTrigger.addEventListener("click", toggleMenu);
    }
});