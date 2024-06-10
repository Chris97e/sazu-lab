<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Roles</th>
            {{-- <th>Estado</th> --}}
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->usuario }}</td>
              <td>{{ $item->correo }}</td>
              <td>
              
                @foreach ($item->roles as $role)
                  {{ $role->rol }}<br>
                @endforeach
              </td>

              {{-- <td>
                <div class="form-check form-switch mb-2">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                </div>
              </td> --}}

              <td>

                <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('cms/usuarios/' . $item->id . '/edit') }}"><i
                      class="bx bx-edit-alt me-1"></i> Editar</a>

                  <form action="{{ route('cms.usuarios.destroy', ['usuario' => $item->id]) }}" method="POST"
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
          {{-- <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
            <td>Albert Cook</td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                  class="avatar avatar-xs pull-up" title="Lilian Fuller">
                  <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                </li>
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                  class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                  <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle">
                </li>
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                  class="avatar avatar-xs pull-up" title="Christina Parker">
                  <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar" class="rounded-circle">
                </li>
              </ul>
            </td>
            <td><span class="badge bg-label-primary me-1">Active</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr> --}}

        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->

<hr class="my-5">
