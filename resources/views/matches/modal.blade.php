<style>
    .modal {
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 0;
        display: none;
    }

    .modal-content {
        display: flex;
        flex-direction: column;
    }

    .modal-content-overlay {
        height: 100vh;
        background-color: black;
        opacity: 0.5;
        z-index: 1;
    }

    .modal-content-filter {
        height: 40vh;
        width: 100vw;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        background-color: white;
        position: absolute;
        z-index: 2;
        bottom: 0;
    }

    .filter-title {
        display: flex;
        justify-content: center;
        padding: 20px;
        width: 100vw;
        height: 10vh;
        font-size: x-large;
        border-bottom: solid 1px black;
        color: #1f796a;
        font-weight: bold;
    }

    .filter-list {
        display: flex;
        gap: 5px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 30vh;
    }
    .filter-list-item {
        width: 240px;
        font-size: large;
        text-align: start;
        font-weight: bolder;
        color: #1f796a;
    }

    .active {
        color: #ef840c;
    }
</style>

<div class="modal" id="modal">
    <div class="modal-content">
        <div class="modal-content-overlay" onclick="closeModal()"></div>
        <div class="modal-content-filter">
            <div class="filter-title">Filteren</div>
            <div class="filter-list">
                <button class="filter-list-item">Datum: Nieuw naar oud</button>
                <button class="filter-list-item">Datum: Oud naar nieuw</button>
                <button class="filter-list-item">
                    Percentage: Hoog naar laag
                </button>
                <button class="filter-list-item">
                    Percentage: Laag naar Hoog
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById("modal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

    const btnFilter = document.querySelector(".filter-list-item");

    const btnFilterList = document.querySelectorAll(".filter-list-item");

    btnFilterList.forEach((btnFilter) => {
        btnFilter.addEventListener("click", () => {
            document.querySelector(".active")?.classList.remove("active");
            btnFilter.classList.add("active");
        });
    });
</script>
