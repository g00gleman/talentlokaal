<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="menuIcon"
    onclick="openMenu()"
>
    <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
    />
</svg>

<style>
    .menuIcon {
        width: 50px;
        height: 50px;
        padding: 10px;
        background-color: #bcd7d2;
        color: #1e796a;
        border-radius: 100px;
        top: 0;
        right: 0;
        position: absolute;
        margin-right: 15px;
        margin-top: 15px;
    }

    .menu {
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 0;
        display: none;
    }

    .menu-content {
        display: flex;
    }

    .menu-content-overlay {
        height: 100vh;
        width: 100vw;
        background-color: black;
        opacity: 0.5;
        z-index: 2;
    }

    .menu-content-nav {
        position: absolute;
        top: 0;
        right: 0;
        height: 100vh;
        width: 60vw;
        background-color: white;
        border-bottom-left-radius: 16px;
        border-top-left-radius: 16px;
        z-index: 3;
    }

    .nav-top {
        height: 15vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #bcd7d2;
        font-size: 48px;
        font-weight: bold;
        color: white;
        border-bottom-left-radius: 16px;
        border-top-left-radius: 16px;
        margin-bottom: 10px;
    }

    .nav-content {
        display: flex;
        flex-direction: column;
    }

    .nav-content-btn {
        width: 60vw;
        height: 10vh;
        /* background-color: #bcd7d2; */
        color: #1e796a;
        font-weight: bold;
        font-size: 24px;
        border-bottom: solid 1px black;
        display: flex;
        align-items: end;
        justify-content: center;
    }
</style>

<div class="menu" id="menu">
    <div class="menu-content">
        <div class="menu-content-overlay" onclick="closeMenu()"></div>
        <div class="menu-content-nav">
            <div class="nav-top">Menu</div>
            <div class="nav-content">
                <a href="/dashboard" class="nav-content-btn">
                    <div></div>
                    <div>Home</div>
                </a>
                <a
                    href="{{ route('dashboard.manageProfile.index') }}"
                    class="nav-content-btn"
                >
                    <div></div>
                    <div>Profiel</div>
                </a>
                <a
                    href="{{ route('dashboard.matches.index') }}"
                    class="nav-content-btn"
                >
                    <div></div>
                    <div>Matches</div>
                </a>
                <a href="/dashboard" class="nav-content-btn">
                    <div></div>
                    <div>Inbox</div>
                </a>
                <a href="/dashboard/support" class="nav-content-btn">
                    <div></div>
                    <div>Support</div>
                </a>
                <a href="/dashboard/logout" class="nav-content-btn">
                    <div></div>
                    <div>Log uit</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function openMenu() {
        document.getElementById("menu").style.display = "block";
    }
    function closeMenu() {
        document.getElementById("menu").style.display = "none";
    }
</script>
