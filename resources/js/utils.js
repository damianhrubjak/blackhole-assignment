export function onClickOutside(element, button, callback) {
    window.addEventListener("click", (e) => {
        if (e.target === button) {
            return;
        }

        if (!element.contains(e.target)) {
            callback();
            return;
        }
    });
}

// esc
export function onEscape(callback) {
    window.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            callback();
        }
    });
}
