<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            {{-- <th>Id Casos</th> --}}
            <th>Orden</th>
            <th>Estado</th>
            <th>Titulo</th>
            <th>Texto</th>
            {{-- <th>Created At</th>
                <th>Updated At</th> --}}
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $item)
            <tr>
              <td>{{ $item->id }}</td>
              {{-- <td>{{ $item->id_casos }}</td> --}}
              <td>{{ $item->orden }}</td>
              <td>
                @if ($item->estado)
                  Activo
                @else
                  Inactivo
                @endif
              </td>
              <td>{{ $item->titulo }}</td>
              <td>{{ Str::limit($item->texto, 50) }} ...</td>
              {{-- <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td> --}}
              <td>
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>

                <div class="dropdown-menu">

                  <a class="dropdown-item"
                    href="{{ url('cms/resultados/' . $id_cards . '/' . $item->id . '/edit') }}"><i
                      class="bx bx-edit-alt me-1"></i> Editar</a>

                  <form
                    action="{{ route('cms.resultados.destroy', ['cards' => $id_cards, 'resultados' => $item->id]) }}"
                    method="POST" onsubmit="return check_confirm();">
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
<!--/ Bordered Table -->

<hr class="my-5">
