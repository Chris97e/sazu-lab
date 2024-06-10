<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Orden</th>
            {{-- <th>Descripcion</th>
                <th>Url</th> --}}
            <th>Img Listado</th>
            <th>Estado</th>
            <th>Es Caso</th>
            {{-- <th>Created At</th>
                <th>Updated At</th> --}}
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->titulo }}</td>
              <td>{{ $item->orden }}</td>
              {{-- <td>{{ $item->descripcion }}</td>
                  <td>{{ $item->url }}</td> --}}
              {{-- <td>{{ $item->img_listado }}</td> --}}
              <td><img src="{{ asset($item->img_listado) }}" style="max-width: 100px" /></td>
              <td>
                @if ($item->estado)
                  Activo
                @else
                  Inactivo
                @endif
              </td>
              <td>
                @if ($item->es_caso)
                  Si
                @else
                  No
                @endif
              </td>
              {{-- <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td> --}}
              <td>
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>

                <div class="dropdown-menu">

                  <a class="dropdown-item" href="{{ url('cms/cards/' . $item->id . '/edit') }}"><i
                      class="bx bx-edit-alt me-1"></i> Editar</a>

                  @if ($item->es_caso)
                    <a class="dropdown-item" href="{{ url('cms/casos/' . $item->id . '') }}"><i class="bx bx-edit-alt me-1"></i> Detalle</a>
                    <a class="dropdown-item" href="{{ url('cms/resultados/' . $item->id . '') }}"><i class="bx bx-edit-alt me-1"></i> Resultados</a>
                    <a class="dropdown-item" href="{{ url('cms/procesos/' . $item->id . '') }}"><i class="bx bx-edit-alt me-1"></i> Procesos</a>
                  @endif

                  <form action="{{ route('cms.cards.destroy', ['cards' => $item->id]) }}" method="POST"
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
<!--/ Bordered Table -->

<hr class="my-5">
