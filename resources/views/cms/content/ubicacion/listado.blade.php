<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>#</th>
          <th>Titulo</th>
          <th>Descripcion</th>
          <th>Orden</th>
          <th>URL</th>
          <th>Estado</th>
          <th>Ubicacion</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datos as $card)
          <tr>
            <td>{{ $card->id }}</td>
            <td>{{ $card->titulo }}</td>
            <td>{{ $card->descripcion }}</td>
            <td>{{ $card->orden }}</td>
            <td>{{ $card->url_img }}</td>
            <td>
              @if ($card->estado == 1)
                Habilitado
              @elseif($card->estado == 0)
                Inhabilitado
              @endif
            </td>
            <td>{{ $card->ubicacion }}</td>
            <td>
              <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('cms/card/' . $card->id . '/edit') }}"><i
                    class="bx bx-edit-alt me-1"></i> Editar</a>
                <form action="{{ route('cms.card.destroy', ['card' =>  $card->id ]) }}" method="POST"
                      onsubmit="return check_confirm();">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item btn-outline-danger"><i class="bx bx-trash me-1"></i>
                    Eliminar</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<hr class="my-5">