// Table Sorting
let sortDirection = {};

export function initTableSort(tableId) {
    const table = document.getElementById(tableId);
    if (!table) return;

    const headers = table.querySelectorAll("thead th[data-column]");
    headers.forEach((header) => {
        header.addEventListener("click", () => {
            const columnIndex = parseInt(header.dataset.column);
            const rows = Array.from(table.tBodies[0].rows);
            const isAsc = (sortDirection[columnIndex] =
                !sortDirection[columnIndex]);

            rows.sort((a, b) => {
                const valA = a.cells[columnIndex].innerText.trim();
                const valB = b.cells[columnIndex].innerText.trim();
                const parsedA = isNaN(valA)
                    ? valA.toLowerCase()
                    : parseFloat(valA);
                const parsedB = isNaN(valB)
                    ? valB.toLowerCase()
                    : parseFloat(valB);
                return isAsc
                    ? parsedA > parsedB
                        ? 1
                        : -1
                    : parsedA < parsedB
                    ? 1
                    : -1;
            });

            rows.forEach((row) => table.tBodies[0].appendChild(row));
        });
    });
}

// Search
export function initSearch(inputId, tableId) {
    const input = document.getElementById(inputId);
    const tableBody = document.getElementById(tableId);
    if (!input || !tableBody) return;

    input.addEventListener("input", () => {
        const searchValue = input.value.toLowerCase();
        tableBody.querySelectorAll("tr").forEach((row) => {
            const rowText = row.textContent.toLowerCase();
            row.style.display = rowText.includes(searchValue) ? "" : "none";
        });
    });
}

// Per page
export function initPerPage(selectId, formId) {
    const select = document.getElementById(selectId);
    const form = document.getElementById(formId);
    if (!select || !form) return;

    select.addEventListener("change", () => form.submit());
}
