<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        @if(!$loop->first) <br> @endif
        Fornecedor: {{ $fornecedor['nome']}} {{ $loop->iteration }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->last)
            <hr>
            Total de registros: {{ $loop->count }}
        @endif
        @empty
            Não existem fornecedores cadastrados
    @endforelse
@endisset
