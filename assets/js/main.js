document.addEventListener("DOMContentLoaded", () => {
    // Define the maximum width (in px) for the mobile/tablet breakpoint
    const maxWidthBreakpoint = 991; // breakpoint for *-md screen width

    // Debounce limit in ms for resize event handler
    const debounceLimit = 50; // recalculate repaints every 50ms

    // Preset the navigation menu state on page load, based on screen width
    const presetNavState = () => {        
        const menuTrigger = document.querySelector('[data-role="hamburger-menu"]');
        const targetId = menuTrigger?.getAttribute("href")?.substring(1);
        const targetElement = document.getElementById(targetId);

        // If on mobile/tablet and menu is not closed, close it and set attributes
        if (window.innerWidth <= maxWidthBreakpoint && 
            targetElement && 
            !targetElement.classList.contains("close")
        ) {
            menuTrigger.dataset.action = "open";
            menuTrigger.setAttribute("title", "Collapse visible navigation menu");
            targetElement.classList.add("close");
            targetElement.classList.remove("open");
        }
    };

    // Run the presetNavState function on DOMContentLoaded
    presetNavState();

    // Debounce utility to limit how often a function runs
    const debounce = (func, wait) => {
        let timeout;
        return (...args) => {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    };

    // Update navigation menu state on window resize
    const updateNavOnResize = () => {
        const menuTrigger = document.querySelector('[data-role="hamburger-menu"]');
        const targetId = menuTrigger?.getAttribute("href")?.substring(1);
        const targetElement = document.getElementById(targetId);

        // On desktop: remove open/close classes and reset attributes
        if (window.innerWidth > maxWidthBreakpoint && targetElement) {
            menuTrigger.dataset.action = "open";
            menuTrigger.setAttribute("title", "Collapse visible navigation menu");
            targetElement.classList.remove("close", "open");
        // On mobile/tablet: ensure menu is closed if not already
        } else if (window.innerWidth <= maxWidthBreakpoint && targetElement) {
            if (!targetElement.classList.contains("close")) {
                menuTrigger.dataset.action = "open";
                menuTrigger.setAttribute("title", "Collapse visible navigation menu");
                targetElement.classList.add("close");
                targetElement.classList.remove("open");
            }
        }
    };

    // Debounced resize event handler for performance
    const debouncedResizeHandler = debounce(updateNavOnResize, debounceLimit);
    window.addEventListener("resize", debouncedResizeHandler);
    
    // Toggle the navigation menu open/close on hamburger click
    const toggleMenu = (event) => {
        event.preventDefault();
        const trigger = event.currentTarget;
        const targetId = trigger.getAttribute("href").substring(1); // Get the ID from href, removing the '#'
        const targetElement = document.getElementById(targetId);

        if(!targetElement) { 
            console.warn(targetId + " wasn't found in the DOM."); 
            return; 
        }

        // Toggle between open and close states, updating classes and attributes
        if (trigger.dataset.action === "open") {
            trigger.dataset.action = "close";
            trigger.setAttribute("title", "Expand hidden navigation menu");
            targetElement.classList.add("open");
            targetElement.classList.remove("close");
        } else {
            trigger.dataset.action = "open";
            trigger.setAttribute("title", "Collapse visible navigation menu");
            targetElement.classList.add("close");
            targetElement.classList.remove("open");
        }
    };

    // Attach click event to hamburger menu trigger if it exists
    const menuTrigger = document.querySelector('[data-role="hamburger-menu"]');
    if (menuTrigger) {
        menuTrigger.addEventListener("click", toggleMenu);
    }

    // For each <section>, automatically create a hash link (#section-title) to the first heading
    // where a .waypoint is defined. Useful for linking to a specific section in the page.
    const addSectionLinks = () => {
        const waypoints = document.querySelectorAll('.waypoint');

        waypoints.forEach(waypoint => {
            const sectionId = waypoint.id;
            if (!sectionId) return; // Skip if the waypoint has no ID
            
            const parentSection = waypoint.closest('section');
            if (!parentSection) return; // Skip if no parent section is found

            const firstHeading = parentSection.querySelector('h1, h2, h3, h4, h5, h6');
            if (!firstHeading) return; // Skip if no heading is found
            firstHeading.classList.add('waypoint-header'); // Add class to the heading

            const link = document.createElement('a');
            link.classList.add("waypoint-link");
            link.href = `#${sectionId}`;
            link.title = 'Link to this section';
            link.innerHTML = `
                <icon>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 13l.953.953a4 4 0 005.657 0l3.031-3.031a4.641 4.641 0 00-6.563-6.563l-.887.888"/>
                        <path d="M14 10l-.953-.953a4 4 0 00-5.657 0l-3.031 3.031a4.641 4.641 0 006.563 6.563l.887-.888"/>
                    </svg>
                </icon>
            `;

            firstHeading.insertBefore(link, firstHeading.firstChild);
        });
    };
    addSectionLinks();

    // Add any other scripts here
});