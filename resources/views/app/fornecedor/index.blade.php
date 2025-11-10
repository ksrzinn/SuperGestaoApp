<h3>Fornecedor</h3>

{{-- {{ }} funciona igual a <?= ?> --}}

@php
// if(isset($var)) funciona em cima de true or false se tá preenchida ou não
// empty caracateriza true quando:
/*
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
*/
@endphp
@isset($fornecedores)

    @if(count($fornecedores) > 0 && count($fornecedores) <= 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores) > 10)
        <h3>Existem muitos fornecedores cadastrados</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrados</h3>
    @endif

{{-- @unless executa quando o retorno é false --}}
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] }}
    <br>
    @unless($fornecedores[0]['status'] == 'S')
        Fornecedor Inativo
    @endunless

    <br>
    <br>

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status']}}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
    @unless($fornecedores[1]['status'] == 'S')
        Fornecedor Inativo
    @endunless

    <br>

    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Status: {{ $fornecedores[2]['status']}}
    <br>
    @isset($fornecedores[2]['cnpj'])
        CNPJ: {{ $fornecedores[2]['cnpj'] }}
        @empty($fornecedores[2]['cnpj'])
            - Vazio
        @endempty
    @endisset
    @unless($fornecedores[2]['status'] == 'S')
        Fornecedor Inativo
    @endunless
@endisset

<br>
