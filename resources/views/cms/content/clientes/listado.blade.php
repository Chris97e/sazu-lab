<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Orden</th>
            <th>Estado</th>
            <th>Imagen</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->orden }}</td>
            <td>
              @if ($item->estado == 1)
                Habilitado
              @elseif($item->estado == 0)
                Inhabilitado
              @endif
            </td>
            <td>
              <img src="{{ asset($item->img) }}" class="mw-100" />
            </td>
            <td>
              <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('cms/clientes/' . $item->id . '/edit') }}"><i
                    class="bx bx-edit-alt me-1"></i> Editar</a>
                <form action="{{ route('cms.clientes.destroy', ['clientes' => $item->id]) }}" method="POST"
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