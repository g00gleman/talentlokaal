<style>
    .modal-save {
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 0;
        display: none;
    }

    .modal-content-save {
        display: flex;
        flex-direction: column;
    }

    .modal-content-overlay-save {
        height: 100vh;
        background-color: black;
        opacity: 0.5;
        z-index: 1;
    }

    .modal-content-box-save {
        height: 25vh;
        width: 80vw;
        background-color: white;
        z-index: 2;
        position: absolute;
        top: 32.5vh;
        left: 10vw;
        border-radius: 16px;
    }

    .box-top-save {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12.5vh;
        color: #1e796a;
        font-weight: bold;
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 10px;
        text-align: center;
    }

    .box-content-save {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 7.5vh;
    }

    .box-content-btn-save {
        background-color: #ef840c;
        padding-left: 10px;
        padding-right: 10px;
        /* width: 50px; */
        padding-top: 3px;
        padding-bottom: 3px;
        border-radius: 100px;
        color: white;
        display: flex;
        width: 100px;
        justify-content: center;
    }
</style>

<div class="modal-save" id="modalSave">
    <div class="modal-content-save">
        <div
            class="modal-content-overlay-save"
            onclick="closeModalSave()"
        ></div>
        <div class="modal-content-box-save">
            <div class="box-top-save">
                U heeft alle vragen ingevuld. <br />
                Wilt u de vragenlijst opslaan en afsluiten?
            </div>
            <div class="box-content-save">
                <button class="box-content-btn-save" onclick="closeModalSave()">
                    Nee
                </button>
                <a href="#" class="box-content-btn-save"> Ja </a>
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
