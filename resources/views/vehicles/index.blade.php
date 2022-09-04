@extends('layouts.app', ['activePage' => 'vehicle', 'titlePage' => __('Vehicle List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Vehicle Information</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" style="width:100%" id="example">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Vehicle Registration Number
                  </th>
                  <th>
                    Vehicle Owner Name
                  </th>
                  <th>
                    Loan Account Number
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                  @php $i = 1;@endphp
                  @forelse($vehicles as $item)
                  <tr>
                    <td>
                      {{$i}}
                    </td>
                    <td>
                      {{ $item->vehicle_registration_number}}
                    </td>
                    <td>
                      {{ $item->vehicle_owner_name}}
                    </td>
                    <td>
                      {{ $item->loan_account_number}}
                    </td>
                    <td>
                        <?php if(auth()->user()->user_type == 'admin'){?>
                        <a href="{{ route('vehicle.edit', $item->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Edit">
                            Edit
                        </a>&nbsp;&nbsp;
                        <?php }?>
                        <a href="{{ route('vehicle.view', $item->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Edit">
                            View
                        </a>&nbsp;&nbsp;
                        <a href="{{ route('vehicle.delete', $item->id) }}" onClick="javascript: return confirm('Please confirm deletion');" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
                           Delete
                        </a>
                    </td>
                  </tr>
                  @php  $i += 1; @endphp
                  @empty
                    <tr>
                        <td class="text-muted text-center" colspan="100%">No Data Found</td>
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