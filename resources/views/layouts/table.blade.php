@extends('layouts.master')
@section('table')
<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
              
                    <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Nama Proyek</th>
                  </tfoot>
                  <tbody>
                    
                  @foreach($proyek as $p)
                  <tr role="row" class="odd">
                      <td class="sorting_1">{{ $p->idProyek }}</td>
                      <td>{{ $p->namaProyek }}</td>
                  
                     
                   </tr>

		@endforeach
                </table>
@endsection