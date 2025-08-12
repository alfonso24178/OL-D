<style>
    .sidebar {
        width: 80px;
        min-height: 100vh;
        /* background: linear-gradient(180deg, #141922 60%, #0f6c2b 100%); */
        background: black;
        z-index: 100;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 1rem;
    }

    .sidebar .sidebar-logo {
        font-size: 1.7rem;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 2rem;
    }

    .sidebar .nav-icon {
        color: #fff;
        font-size: 1.6rem;
        margin-bottom: 1.7rem;
        transition: color 0.2s;
        position: relative;
        cursor: pointer;
    }

    .sidebar .nav-icon:hover {
        color: #3B82F6;
    }

    .sidebar .nav-icon .sidebar-tooltip {
        visibility: hidden;
        opacity: 0;
        background: black;
        color: #fff;
        border-radius: 6px;
        padding: 4px 12px;
        position: absolute;
        left: 90%;
        top: 50%;
        transform: translateY(-50%);
        white-space: nowrap;
        font-size: 0.95rem;
        z-index: 200;
        transition: opacity 0.2s, visibility 0.2s;
    }

    .sidebar .nav-icon:hover .sidebar-tooltip {
        visibility: visible;
        opacity: 1;
    }

    .sidebar .sidebar-bottom {
        margin-top: auto;
        margin-bottom: 1rem;
    }
</style>
<div class="sidebar">
    <a href="#" class="nav-icon" title="Inicio">
        <i class="fa fa-home"></i>
        <span class="sidebar-tooltip">Inicio</span>
    </a>
    <a href="#" class="nav-icon" title="Bitácora">
        <i class="fa fa-clipboard-list"></i>
        <span class="sidebar-tooltip">Bitácora</span>
    </a>
    <a href="#" class="nav-icon" title="Ventas">
        <i class="fa fa-dollar-sign"></i>
        <span class="sidebar-tooltip">Ventas</span>
    </a>
    <a href="#" class="nav-icon" title="Clientes">
        <i class="fa fa-user"></i>
        <span class="sidebar-tooltip">Clientes</span>
    </a>
    <a href="#" class="nav-icon" title="Inventarios">
        <i class="fa fa-boxes"></i>
        <span class="sidebar-tooltip">Inventarios</span>
    </a>
    <a href="#" class="nav-icon" title="Egresos">
        <i class="fa fa-money-bill-wave"></i>
        <span class="sidebar-tooltip">Egresos</span>
    </a>
    <a href="#" class="nav-icon" title="RRHH">
        <i class="fa fa-users"></i>
        <span class="sidebar-tooltip">RRHH</span>
    </a>
    <a href="#" class="nav-icon" title="Catálogos">
        <i class="fa fa-book"></i>
        <span class="sidebar-tooltip">Catálogos</span>
    </a>
    <a href="#" class="nav-icon" title="Adm. Venta">
        <i class="fa fa-briefcase"></i>
        <span class="sidebar-tooltip">Adm. Venta</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="sidebar-bottom">
        <a href="#" class="nav-icon" title="Cerrar Sesión" onclick="event.preventDefault(); cerrarSesion();">
            <i class="fa fa-sign-out-alt"></i>
            <span class="sidebar-tooltip">Cerrar Sesión</span>
        </a>
        <script>
            function cerrarSesion() {
                var form = document.getElementById('logout-form');
                form.submit();
                setTimeout(function() {
                    window.location.href = '/login';
                }, 500);
            }
        </script>
    </div>
</div>
