<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="<?= $web_address ?>" class="brand-link">
        <!--begin::Brand Image-->
        <img
            src="<?= $web_address ?>views/theme/img/logo.png"
            alt="SHNMM"
            class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">SHNMM</span>
        <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false">

            <li class="nav-item">
            <a href="<?= $web_address ?>" class="nav-link <?= urlIs('/') ? 'active' : '' ?>">
                <i class="nav-icon bi bi-house-door-fill"></i>
                <p>Home</p>
            </a>
            </li>

            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon bi bi-people"></i>
                <p>Students Portal</p>
                </a> -->
                <!-- <ul class="nav nav-treeview"> -->
                <li class="nav-header"><b>Student Portal</b></li>
                    <li class="nav-item">
                    <a href="<?= $web_address ?>student-record" class="nav-link <?= urlIs('/student-record') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-person-lines-fill"></i>
                        <p>Students Record</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?= $web_address ?>student-ex-record" class="nav-link <?= urlIs('/student-ex-record') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-person-x"></i>
                        <p>Students Ex Record</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?= $web_address ?>student-attendance" class="nav-link <?= urlIs('/student-attendance') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-clipboard-check"></i>
                        <p>Attendance</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?= $web_address ?>student-take-fees" class="nav-link <?= urlIs('/student-take-fees') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-cash-coin"></i>
                        <p>Take Fees</p>
                    </a>
                    </li>
                    <!-- <li class="nav-item">
                    <a href="<?= $web_address ?>" class="nav-link <?= urlIs('') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-person-lines-fill"></i>
                        <p>Ex Students</p>
                    </a>
                    </li> -->
                    <!-- <li class="nav-item">
                    <a href="<?= $web_address ?>" class="nav-link">
                        <i class="nav-icon bi bi-clipboard-check-fill"></i>
                        <p>Attendance</p>
                    </a>
                    </li> -->
                    <!-- <li class="nav-item">
                    <a href="<?= $web_address ?>student-phone-book" class="nav-link <?= urlIs('/student-phone-book') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-telephone-fill"></i>
                        <p>Students Phone Book</p>
                    </a>
                    </li> -->
                    <!-- <li class="nav-item">
                    <a href="<?= $web_address ?>" class="nav-link">
                        <i class="nav-icon bi bi-person-badge-fill"></i>
                        <p>Id Card Download</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="<?= $web_address ?>" class="nav-link">
                        <i class="nav-icon bi bi-cash-coin"></i>
                        <p>Take Fees</p>
                    </a>
                    </li> -->
                <!-- </ul> -->
            <!-- </li> -->


            <li class="nav-header"><b>SMS Portal</b></li>
            <li class="nav-item">
            <a href="<?= $web_address ?>" class="nav-link">
                <i class="nav-icon bi bi-chat-left-dots"></i>
                <p>SMS</p>
            </a>
            </li>
            <li class="nav-header"><b>Setting Portal</b></li>
            <li class="nav-item">
            <a href="<?= $web_address ?>" class="nav-link">
                <i class="nav-icon bi bi-gear"></i>
                <p>Settings</p>
            </a>
            </li>

        </ul>
        <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->