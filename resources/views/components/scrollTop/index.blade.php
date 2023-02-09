<div class="flex justify-end">
    <button onclick="scrollToTop()" class="customArrowbtn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4 text-talent-green">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
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
