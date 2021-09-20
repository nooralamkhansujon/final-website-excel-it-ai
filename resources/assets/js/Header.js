// dropdown css
export default function Header() {
    let dropdownCss = document.querySelectorAll(".dropdown .dropdown-toggle");
    dropdownCss.forEach((dropdown) => {
        dropdown.addEventListener("click", (e) => {
            e.target.parentElement.children[1].classList.toggle("showmenu");
        });
    });
}
