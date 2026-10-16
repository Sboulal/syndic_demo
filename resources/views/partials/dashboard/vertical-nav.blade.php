<ul class="navbar-nav iq-main-menu d-flex flex-column" id="sidebar" style="min-height: calc(100vh - 100px);">
    
    <!-- ================= PARTIE HAUTE (MODULES) ================= -->
    <div class="d-flex flex-column w-100">
        <!-- SECTION HOME -->
        <li class="nav-item static-item mb-2">
            <a class="nav-link static-item disabled" href="#" tabindex="-1">
                <span class="default-icon">Home</span>
                <span class="mini-icon">-</span>
            </a>
        </li>

        <!-- 1. Tableau de bord -->
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                    </svg>
                </i>
                <span class="item-name">Tableau de bord</span>
            </a>
        </li>

        <li class="mb-2"><hr class="hr-horizontal"></li>

        <li class="nav-item static-item mb-2">
            <a class="nav-link static-item disabled" href="#" tabindex="-1">
                <span class="default-icon">Gestion Syndic</span>
                <span class="mini-icon">-</span>
            </a>
        </li>

        <!-- 2. Copropriété -->
        <li class="nav-item mb-2">
            <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-copropriete" role="button" aria-expanded="false" aria-controls="sidebar-copropriete">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                        <line x1="9" y1="6" x2="9" y2="6.01"></line>
                        <line x1="15" y1="6" x2="15" y2="6.01"></line>
                        <line x1="9" y1="10" x2="9" y2="10.01"></line>
                        <line x1="15" y1="10" x2="15" y2="10.01"></line>
                        <line x1="9" y1="14" x2="9" y2="14.01"></line>
                        <line x1="15" y1="14" x2="15" y2="14.01"></line>
                        <line x1="9" y1="18" x2="15" y2="18"></line>
                    </svg>
                </i>
                <span class="item-name">Copropriété</span>
                <i class="right-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </i>
            </a>
            <ul class="sub-nav collapse" id="sidebar-copropriete" data-bs-parent="#sidebar">
                <li class="nav-item mb-1">
                    <a class="nav-link {{ request()->is('lots*') ? 'active' : '' }}" href="/lots">
                        <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="8"></circle></svg></i>
                        <i class="sidenav-mini-icon"> L </i>
                        <span class="item-name">Lots (Appartements)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('residents*') ? 'active' : '' }}" href="/residents">
                        <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="8"></circle></svg></i>
                        <i class="sidenav-mini-icon"> R </i>
                        <span class="item-name">Résidents</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- 3. Trésorerie -->
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('cotisations*') ? 'active' : '' }}" href="/cotisations">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><line x1="12" y1="6" x2="12" y2="8"></line><line x1="12" y1="16" x2="12" y2="18"></line>
                    </svg>
                </i>
                <span class="item-name">Trésorerie</span>
            </a>
        </li>

        <!-- 4. Dépenses -->
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('depenses*') ? 'active' : '' }}" href="/depenses">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                </i>
                <span class="item-name">Dépenses</span>
            </a>
        </li>

        <!-- 5. Réclamations -->
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('reclamations*') ? 'active' : '' }}" href="/reclamations">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </i>
                <span class="item-name">Réclamations</span>
            </a>
        </li>

        <!-- 6. Documents -->
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('documents*') ? 'active' : '' }}" href="/documents">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline>
                    </svg>
                </i>
                <span class="item-name">Documents (PV & AG)</span>
            </a>
        </li>
    </div>

    <!-- ================= PARTIE BASSE (PARAMÈTRES) ================= -->
    <div class="mt-auto w-100 pb-4">
        <li class="mb-2"><hr class="hr-horizontal"></li>

        <li class="nav-item static-item mb-2">
            <a class="nav-link static-item disabled" href="#" tabindex="-1">
                <span class="default-icon">Paramètres</span>
                <span class="mini-icon">-</span>
            </a>
        </li>

        <!-- 7. Utilisateurs -->
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </i>
                <span class="item-name">Utilisateurs / Accès</span>
            </a>
        </li>

        <!-- 8. Déconnexion -->
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </i>
                <span class="item-name">Déconnexion</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </div>

</ul>