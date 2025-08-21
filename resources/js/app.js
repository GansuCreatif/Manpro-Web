import "./bootstrap";
import "flowbite";
import "./responsive";
import { initTableSort, initSearch, initPerPage } from "./components/table";

document.addEventListener("DOMContentLoaded", () => {
    initTableSort("projectsTable");
    initSearch("tableSearch", "projectTable");
    initPerPage("perPage", "perPageForm");
});
