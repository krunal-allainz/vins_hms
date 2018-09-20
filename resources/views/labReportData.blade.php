
  @if(isset($data['ReportPageData']['labReferalReportData']))
		<div class='col-md-12'>
			<span class="report_title">Lab Report:-</span>
		</div>
		<div class="form-group">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered report_table" id="laboratory_table_list">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              @if(count($data['ReportPageData']['labReferalReportData'])>0)
                @foreach($data['ReportPageData']['labReferalReportData'] as $index=>$res)
                  <tr class="">
                    <td>{{++$index}}</td> 
                    <td>{{$res['name'] }}</td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="2">No data found.</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  @endif
