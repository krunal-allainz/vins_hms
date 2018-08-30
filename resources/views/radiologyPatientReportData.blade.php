@if(isset($data['ReportPageData']['radiologyReportData']) && !empty($data['ReportPageData']['radiologyReportData']))

		<div class='row'>
		<div class='col-md-12 text-center'>
			<h5>Investigation Radiology Report</h5>
		</div>
		<div class="row"  >
        	<div class="col-md-12">
        	  <div class="">
                <table class="table table-striped table-bordered" id="radio_list">
                  <thead>
                    <tr>
                    <!--  <th>#</th> -->
                     <th>Type</th>
                     <th>Body parts</th>
                     <th>Qualifier</th>
                     <th>Special request</th>
                     <th>Details</th>
                    </tr>
                 </thead>
                 <tbody>
                 @if($data['ReportPageData']['radiologyReportData'])
                 @foreach($data['ReportPageData']['radiologyReportData'] as $index=>$res)
                 <tr class="text-center">
                            <!-- <td>{{++$index}}</td> -->
                            <td>{{$res['type']}}</td>
                            <td>{{$res['bodyparts']}}</td>
                            <td>{{$res['qualifiers']}}</td>
                            <td>{{$res['special_request']}}</td>
                            <td>{{$res['details']}}</td>
                    </tr>
                    @endforeach
                @endif
                        </tbody>
                    </table>
                </div>
        	</div>
        </div>
  	</div>

  	@endif