(function () {
    let sorted = false;
    function sortNav() {
        if (sorted) return true;
        const nav = document.getElementById("tl_navigation"),
            categories = nav.querySelectorAll("ul.menu_level_0 > li");
        if (categories.length === 0)
            return sorted = false;
        categories.forEach(cat => {
            const ul = cat.querySelector("ul.menu_level_1");
            Array.from(ul.querySelectorAll("li"))
                .sort((a, b) => {
                    const aContent = a.textContent || a.innerText,
                        bContent = b.textContent || b.innerText;
                    return aContent.localeCompare(bContent);
                })
                .forEach(li => ul.appendChild(li));
        });
        return sorted = true;
    }
    sortNav();
    document.addEventListener("DOMContentLoaded", sortNav);
})();