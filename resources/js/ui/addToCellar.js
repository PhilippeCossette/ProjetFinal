document.addEventListener("DOMContentLoaded", () => {
    const addToCellarBtns = document.querySelectorAll(".add-to-cellar-btn");
    const closeBtn = document.getElementById("closeAddWine");
    const cellarSheet = document.getElementById("addWineBtnContainer");

    let preloaded = null;

    preloadCellars();

    async function preloadCellars() {
        const cellars = await getCellar();
        preloaded = cellars;
    }

    closeBtn.addEventListener("click", closeSheet);
    addToCellarBtns.forEach((btn) => {
        btn.addEventListener("click", openSheet);
    });

    async function openSheet() {
        cellarSheet.classList.remove("translate-y-full");
        if (preloaded) {
            populateCellarOptions(preloaded);
            return;
        }

        const cellars = await getCellar();
        populateCellarOptions(cellars);
    }

    function closeSheet() {
        cellarSheet.classList.add("translate-y-full");
    }

    async function getCellar() {
        const user = await fetch("/api/celliers", {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
            },
        });

        return user.json();
    }

    function populateCellarOptions(cellars) {
        const cellarList = document.getElementById("cellar-list");
        cellarList.innerHTML = ""; // Clear existing options
        console.log(cellars);

        cellars.forEach((cellar) => {
            cellarList.innerHTML += `
        <div 
            class="cellar-box relative p-3 bg-card rounded-lg shadow-md border border-border-base hover:shadow-sm transition-all duration-300 cursor-pointer"
            data-cellar-id="${cellar.id}"
        >
            <div class="relative z-10 flex justify-between pointer-events-none">
                <div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-semibold">${cellar.nom}</h2>
                    ${
                        cellar.bouteilles_count == 0
                            ? `<p class="text-gray-400 italic">Aucune bouteille</p>`
                            : cellar.bouteilles_count == 1
                            ? `<p class="text-gray-600">1 Bouteille</p>`
                            : `<p class="text-gray-600">${cellar.bouteilles_count} Bouteilles</p>`
                    }
                </div>
            </div>
        </div>
    `;
        });
    }
});

function handleSubmit(event) {}
