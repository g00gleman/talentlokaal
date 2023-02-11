<style>
    .customArrowbtn {
        margin-top: 25px;
        margin-bottom: 25px;
        margin-right: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #bcd7d2;
        width: 35px;
        height: 35px;
        border-radius: 100px;
    }

    .customSpacing {
        height: 50px;
    }
</style>

<div class="flex justify-end">
    <button onclick="scrollToTop()" class="customArrowbtn">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2.5"
            stroke="currentColor"
            class="w-10 h-10 text-talent-green"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4.5 15.75l7.5-7.5 7.5 7.5"
            />
        </svg>
    </button>
    <div class="customSpacing"></div>
</div>
<script>
    function scrollToTop() {
        var x = document.getElementById("top");
        x.scrollIntoView({
            block: "start",
            behavior: "smooth",
            inline: "start",
        });
    }
</script>
