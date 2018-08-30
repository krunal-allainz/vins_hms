	@if(isset($data['ReportPageData']['labReportData'])){
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h4>Investigation Lab Report</h4>
			</div>
  		</div>
		<div class="form-group">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="laboratory_table_list">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                    @if($data['ReportPageData']['labReportData']){
                       	@foreach($data['ReportPageData']['labReportData'] as 
                       	$index=>$res)
                         <tr class="text-center">
                            <td>{{++$index}}</td> 
                            <td>{{$res['name'] }}</td>
                          </tr>
						 @endforeach
					@endif
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
        @endif