<div>
    <nav class="side-nav">
        <a href="{{ route('welcome') }}" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone - HTML Admin Template" class="w-6" src="/dist/images/logo.svg">
            <span class="hidden xl:block text-white text-lg ml-3">
                Car Rentals
            </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="home"></i>
                    </div>
                    <div class="side-menu__title">
                        Dashboard
                        <div class="side-menu__sub-icon transform rotate-180">
                            <i data-lucide="chevron-down"></i>
                        </div>
                    </div>
                </a>

            </li>
            <li>
                <a href="{{ route('add_brand') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="inbox"></i>
                    </div>
                    <div class="side-menu__title">
                        Add Brand
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('car.create') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="inbox"></i>
                    </div>
                    <div class="side-menu__title">
                        Add Car
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('all_brand') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="inbox"></i>
                    </div>
                    <div class="side-menu__title">
                        All Brand
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('all_car') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="inbox"></i>
                    </div>
                    <div class="side-menu__title">
                        All Car
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('inbox.all') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="calendar"></i>
                    </div>
                    <div class="side-menu__title">
                        Inbox
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('calender.call') }}" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="calendar"></i>
                    </div>
                    <div class="side-menu__title">
                        Calender
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</div>
