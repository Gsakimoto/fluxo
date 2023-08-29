<ul>
    <li>
        Olá {{ Auth::user()->name }}
    </li>
    <li>
        <a href="{{ route('lancamento.index') }}">
            Lançamentos
        </a>
    </li>
    <li>
        <a href="{{ route('centro.index') }}">
            Centros de Custo
        </a>
    </li>
    <li>
        <a href="{{ route('logout') }}">
            Sair
        </a>
    </li>
</ul>
