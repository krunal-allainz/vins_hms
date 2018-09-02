<div class='row'>
  @if(!empty($data['ReportPageData']['labReferalReportData']))
		<div class='col-md-12 text-center'>
			<h5>Lab Report</h5>
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
                       	@foreach($data['ReportPageData']['labReferalReportData'] as $index=>$res)
                         <tr class="text-center">
                            <td>{{++$index}}</td> 
                            <td>{{$res['name'] }}</td>
                          </tr>
						 @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                @endif
              </div>