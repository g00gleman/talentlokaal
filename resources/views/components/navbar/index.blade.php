<link rel="stylesheet" href="/navbar/style.css" />

<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="menuIcon"
    onclick="openMenu(); check();"
>
    <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
    />
</svg>

<div class="menu" id="menu">
    <div class="menu-content">
        <div class="menu-content-overlay" onclick="closeMenu()"></div>
        <div class="menu-content-nav">
            <div class="nav-top">Menu</div>
            <div class="nav-content">
                <a href="/dashboard" class="nav-content-btn" id="home">
                    <div></div>
                    <div>Home</div>
                </a>
                <a
                    href="{{ route('dashboard.manageProfile.index') }}"
                    class="nav-content-btn"
                    id="profile"
                >
                    <div></div>
                    <div>Profiel</div>
                </a>
                <a
                    href="{{ route('dashboard.matches.index') }}"
                    class="nav-content-btn"
                    id="matches"
                >
                    <div></div>
                    <div>Matches</div>
                </a>
                <a href="/inbox" class="nav-content-btn" id="inbox">
                    <div></div>
                    <div>Inbox</div>
                </a>
                <a
                    href="/dashboard/support"
                    class="nav-content-btn"
                    id="support"
                >
                    <div></div>
                    <div>Support</div>
                </a>

                <button
                    class="nav-content-btn"
                    onclick="openModal(); closeMenu();"
                >
                    <div></div>
                    <div>Log uit</div>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal">
    <div class="modal-content">
        <div class="modal-content-overlay" onclick="closeModal()"></div>
        <div class="modal-content-box">
            <div class="box-top">Weet u zeker dat u wilt uitloggen?</div>
            <div class="box-content">
                <a href="/dashboard/logout" class="box-content-btn"> Ja </a>
                <button class="box-content-btn" onclick="closeModal()">
                    Nee
                </button>
            </div>
        </div>
    </div>
</div>

<script src="/navbar/app.js"></script>
