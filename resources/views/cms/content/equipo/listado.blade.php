<!-- Bordered Table -->
<div class="card">

  <h5 class="card-header">Registros encontrados</h5>

  <div class="card-body">

    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $equipo)
            <tr>
              <td>{{ $equipo->id }}</td>
              <td>{{ $equipo->nombre }}</td>
              <td>{{ $equipo->descripcion }}</td>
              <td><img src="{{ asset($equipo->imagen) }}" style="max-width: 200px" /></td> {{-- <td>{{ $equipo->imagen }}</td> --}}
              <td>
                <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('cms/equipo/' . $equipo->id . '/edit') }}"><i
                      class="bx bx-edit-alt me-1"></i> Editar</a>
                  <form action="{{ route('cms.equipo.destroy', ['equipo' => $equipo->id]) }}" method="POST"
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
