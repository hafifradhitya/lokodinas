@extends('administrator.dashboard')

@section('content')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Datatable</h3>
      <p class="text-sm mb-0">
        This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
      </p>
    </div>
    <div class="table-responsive py-4">
      <table class="table table-flush" id="datatable-basic">
        <thead class="thead-light">
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Thor Walton</td>
            <td>Developer</td>
            <td>New York</td>
            <td>61</td>
            <td>2013/08/11</td>
            <td>$98,540</td>
          </tr>
          <tr>
            <td>Finn Camacho</td>
            <td>Support Engineer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/07/07</td>
            <td>$87,500</td>
          </tr>
          <tr>
            <td>Serge Baldwin</td>
            <td>Data Coordinator</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2012/04/09</td>
            <td>$138,575</td>
          </tr>
        </tbody>
      </table>
      {{-- {{ $webs->links('vendor.pagination.bootstrap-4') }} --}}
    </div>
  </div>
@endsection
