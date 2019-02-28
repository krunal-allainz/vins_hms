@if(isset($data['ReportPageData']['labReportData']) && count($data['ReportPageData']['labReportData'])>0)
	<div class='col-md-12'>
		<span class="report_title">Investigation Lab Request:-</span>
	</div>
  		
  <div class="form-group">
    <div class="col-md-12">
      <div class="table-responsive">
        @if(count($data['ReportPageData']['labReportData'])>0)
          <table class="table table-striped table-bordered report_table" id="laboratory_table_list">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Result</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data['ReportPageData']['labReportData'] as 
                $index=>$res)
                  <tr class="text-center">
                    <td>{{++$index}}</td> 
                    <td>{{$res['name']}}</td>
                    <td>{{$res['date']}}</td>
                    <td>{{$res['result']}}</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
         @else
            <span class="report_details">No record found.</span> 
          @endif
      </div>
    </div>
  </div>
@endif