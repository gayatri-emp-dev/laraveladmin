@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('User List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">User</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" style="width:100%" id="example">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                  @php $i = 1;@endphp
                  @forelse($users as $item)
                  <tr>
                    <td>
                      {{$i}}
                    </td>
                    <td>
                      {{ $item->name}}
                    </td>
                    <td>
                      {{ $item->email}}
                    </td>
                    <td>
                      {{ $item->status == 1 ? 'Active':'InActive'}}
                    </td>
                    <td>
                        <a href="{{ route('user.edit', $item->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Edit">
                            Edit
                        </a>&nbsp;&nbsp;
                        <a href="{{ route('user.delete', $item->id) }}" onClick="javascript: return confirm('Please confirm deletion');" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
                           Delete
                        </a>
                    </td>
                  </tr>
                  @php  $i += 1; @endphp
                  @empty
                    <tr>
                        <td class="text-muted text-center" colspan="100%">No Executive Found</td>
                    </tr>
                @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection