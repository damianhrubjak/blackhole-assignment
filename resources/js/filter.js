import { onClickOutside, onEscape } from "./utils";

const filterButton = document.querySelector("#filter-button");
const filterSection = document.querySelector("#filter-section");

onClickOutside(filterSection, filterButton, closeFilter);

filterButton.addEventListener("click", () => {
    filterSection.classList.toggle("-translate-x-full");
    document.body.classList.toggle("overflow-hidden");
});

onEscape(closeFilter);

function closeFilter() {
    filterSection.classList.add("-translate-x-full");
    document.body.classList.remove("overflow-hidden");
}
