<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">

        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/home">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Categorias</span>
            </p>

            <li class="nav-item dropdown">
                {{-- <a href="#categoriaPost-collapse" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text">Operadores</span><span class="sr-only">(current)</span>
                </a> --}}
                {{-- <ul class="collapse list-unstyled pl-4 w-100" id="categoriaPost-collapse"> --}}
                {{-- <li class="nav-item active">
                        <a class="nav-link pl-3" href="{{ route('admin.operador.create') }}"><span class="ml-1 item-text">Cadastrar</span></a>
            </li> --}}
            <li class="nav-item">

                <a class="nav-link pl-3" href="{{ route('admin.operador.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Operadores</span></a>
            </li>
            {{-- </ul> --}}
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.categoria_titulo_habitante.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Categoria Titulo Habitantes</span></a>
            </li>
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.categoria_servico.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Categoria de serviço</span></a>
            </li>
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.frequencia_numeracao.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Frequência|Numeração</span></a>
            </li>
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.telefone.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Telefone</span></a>
            </li>
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.email.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Email</span></a>
            </li>
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.morada_sede.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Morada Sede</span></a>
            </li>
            </li>

            <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.ponto_focal.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Ponto Focal</span></a>
            </li>
            </li>

             <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.servico_licenciado.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Serviço Licenciado</span></a>
            </li>
            </li>

              <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('admin.motivo_revogacao_licenca.index') }}"> <i class="fe fe-file-text fe-16"></i><span class="ml-1 item-text">Revogação licença</span></a>
            </li>
            </li>
            {{-- Logs --}}


            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Titulos</span>
            </p>

            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Configuração</span>
            </p>
        </ul>
    </nav>
</aside>
