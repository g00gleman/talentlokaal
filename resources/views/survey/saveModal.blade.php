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

    .modal-content-box {
        height: 25vh;
        width: 80vw;
        background-color: white;
        z-index: 2;
        position: absolute;
        top: 32.5vh;
        left: 10vw;
        border-radius: 16px;
    }

    .box-top {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12.5vh;
        color: #1e796a;
        font-weight: bold;
    }

    .box-content {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 7.5vh;
    }

    .box-content-btn {
        background-color: #ef840c;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 3px;
        padding-bottom: 3px;
        border-radius: 100px;
        color: white;
    }
</style>

<div class="modal" id="modalSave">
    <div class="modal-content">
        <div class="modal-content-overlay" onclick="closeModalSave()"></div>
        <div class="modal-content-box">
            <div class="box-top">Wilt u de Vragenlijst opslaan?</div>
            <div class="box-content">
                <a href="#" class="box-content-btn"> Ja </a>
                <button class="box-content-btn" onclick="closeModalSave()">
                    Nee
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModalSave() {
        document.getElementById("modalSave").style.display = "block";
    }

    function closeModalSave() {
        document.getElementById("modalSave").style.display = "none";
    }
</script>
