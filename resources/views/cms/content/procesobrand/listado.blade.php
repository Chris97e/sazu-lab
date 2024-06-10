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
          <th>Texto Difuminado</th>
          <th>Orden</th>
          <th>Imagen Rotativa Derecha</th>
          <th>Imagen Izquierda</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datos as $proceso)
          <tr>
            <td>{{ $proceso->id }}</td>
            <td>{{ $proceso->titulo }}</td>
            <td>{{ $proceso->descripcion }}</td>
            <td>{{ $proceso->texto_difuminado }}</td>
            <td>{{ $proceso->orden }}</td>
            <td>{{ $proceso->url_img_derecha }}</td>
            <td>{{ $proceso->url_img_izq }}</td>
            <td>
              @if ($proceso->estado == 1)
                Habilitado
              @elseif($proceso->estado == 0)
                Inhabilitado
              @endif
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('cms/procesobrand/' . $proceso->id . '/edit') }}"><i
                    class="bx bx-edit-alt me-1"></i> Editar</a>
                <form action="{{ route('cms.procesobrand.destroy', ['proceso' =>  $proceso->id ]) }}" method="POST"
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