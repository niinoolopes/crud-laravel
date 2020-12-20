<section class="p-2 p-md-3 border shadow bg-white">
  <table class="table table-sm table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">Idade</th>
        <th scope="col">Sexo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($usuarios as $usuario)
        <tr>
          <th scope="row">{{$usuario->USUARIO_ID}}</th>
          <td>{{$usuario->USUARIO_NOME}}</td>
          <td>{{$usuario->USUARIO_SOBRENOME}}</td>
          <td>{{$usuario->USUARIO_DATA_NASCIMENTO}}</td>
          <td>{{$usuario->USUARIO_SEXO == 'M' ? 'Masculino' : 'Femenino'}}</td>
          <td>
            <a href="{{ route('usuario.edit', [ 'id' => $usuario->USUARIO_ID ]) }}">
              <button class="btn btn-sm border-0 py-0">
                <i class="text-muted fas fa-user-edit"></i>
              </button>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6">Nâo existe Usuários cadastrados.</td>
        </tr>
      @endforelse

    </tbody>
  </table>
</section>