<nav>
    <a href="index.php">
        <div class="nav-element <?= $activePage === 'home' ? 'active' : '' ?>">
            <svg class="svg-icon" viewBox="-6 -6 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_iconCarrier">
                    <!-- левая колонка -->
                    <path class="left"
                        d="M10.5 19.9V4.1C10.5 2.6 9.86 2 8.27 2H4.23C2.64 2 2 2.6 2 4.1V19.9C2 21.4 2.64 22 4.23 22H8.27C9.86 22 10.5 21.4 10.5 19.9Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

                    <!-- правая колонка -->
                    <path class="right"
                        d="M22 12.9V4.1C22 2.6 21.36 2 19.77 2H15.73C14.14 2 13.5 2.6 13.5 4.1V12.9C13.5 14.4 14.14 15 15.73 15H19.77C21.36 15 22 14.4 22 12.9Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </div>
    </a>
    <div class="nav-element openPopup" id="openPopup">
        <svg class="gear" viewBox="-6 -6 36 36" xmlns="http://www.w3.org/2000/svg" fill="none">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path stroke="#ffffff" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                </path>
                <path stroke="#ffffff" stroke-linejoin="round" stroke-width="2"
                    d="M10.47 4.32c.602-1.306 2.458-1.306 3.06 0l.218.473a1.684 1.684 0 0 0 2.112.875l.49-.18c1.348-.498 2.66.814 2.162 2.163l-.18.489a1.684 1.684 0 0 0 .875 2.112l.474.218c1.305.602 1.305 2.458 0 3.06l-.474.218a1.684 1.684 0 0 0-.875 2.112l.18.49c.498 1.348-.814 2.66-2.163 2.162l-.489-.18a1.684 1.684 0 0 0-2.112.875l-.218.473c-.602 1.306-2.458 1.306-3.06 0l-.218-.473a1.684 1.684 0 0 0-2.112-.875l-.49.18c-1.348.498-2.66-.814-2.163-2.163l.181-.489a1.684 1.684 0 0 0-.875-2.112l-.474-.218c-1.305-.602-1.305-2.458 0-3.06l.474-.218a1.684 1.684 0 0 0 .875-2.112l-.18-.49c-.498-1.348.814-2.66 2.163-2.163l.489.181a1.684 1.684 0 0 0 2.112-.875l.218-.474Z">
                </path>
            </g>
        </svg>
    </div>
    <div class="nav-element">
        <svg class="bell" viewBox="-7 -6 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
            <g clip-path="url(#clip0_429_11023)">
                <path d="M6 19V10C6 6.68629 8.68629 4 12 4V4C15.3137 4 18 6.68629 18 10V19M6 19H18M6 19H4M18 19H20"
                    stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11 22L13 22" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <circle cx="12" cy="3" r="1" stroke="#ffffff" stroke-width="2.5" />
            </g>
            <defs>
                <clipPath id="clip0_429_11023">
                    <rect width="24" height="24" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="nav-element">
        <svg viewBox="-8 -7.5 64 64" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <title>information-circle</title>
                <g id="Layer_2" data-name="Layer 2">
                    <g id="icons_Q2" data-name="icons Q2">
                        <path
                            d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2Zm0,40A18,18,0,1,1,42,24,18.1,18.1,0,0,1,24,42Z">
                        </path>
                        <path d="M24,20a2,2,0,0,0-2,2V34a2,2,0,0,0,4,0V22A2,2,0,0,0,24,20Z"></path>
                        <circle cx="24" cy="14" r="2"></circle>
                    </g>
                </g>
            </g>
        </svg>
    </div>
    <div class="nav-element darkmode">
        <svg class="moon" viewBox="-6 -5 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M3.32031 11.6835C3.32031 16.6541 7.34975 20.6835 12.3203 20.6835C16.1075 20.6835 19.3483 18.3443 20.6768 15.032C19.6402 15.4486 18.5059 15.6834 17.3203 15.6834C12.3497 15.6834 8.32031 11.654 8.32031 6.68342C8.32031 5.50338 8.55165 4.36259 8.96453 3.32996C5.65605 4.66028 3.32031 7.89912 3.32031 11.6835Z"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </svg>
    </div>
    <p></p>
    <div class="nav-element pp <?= $activePage === 'registration' ? 'active' : '' ?>">
        <?php if (!isset($_SESSION['user_id'])): ?>
            <a style="width: 100%; height: 100%;" href="login.php">
                <svg viewBox="-5 -3 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>profile_round [#ffffff1342]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#ffffff">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path
                                        d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598"
                                        id="profile_round-[#ffffff1342]"> </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        <?php endif ?>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="profile.php">
                <img src="<?= $_SESSION['avatar'] ?>" class="profile-picture" alt="avatar">
            </a>
        <?php endif ?>
    </div>
</nav>