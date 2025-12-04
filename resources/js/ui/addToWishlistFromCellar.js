document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".add-to-wishlist-cellar");

    buttons.forEach(btn => {
        if (btn.dataset.bound === "true") return;
        btn.dataset.bound = "true";

        btn.addEventListener("click", () => {
            const bouteilleId = btn.dataset.bouteilleId;
            const quantite = btn.dataset.quantite ?? 1;

            const formData = new FormData();
            formData.append("bouteille_catalogue_id", bouteilleId);
            formData.append("quantite", quantite);

            fetch("/liste-achat", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    "Accept": "application/json"
                },
                body: formData
            })
            .then(async res => {
                const data = await res.json();

                if (!res.ok) {
                    showToast("Erreur lors de l’ajout.", "error");
                    return;
                }

                showToast("Cette bouteille a été ajoutée à votre liste d’achat.", "success");
            })
            .catch(() => showToast("Erreur réseau", "error"));
        });
    });
});
