	@if(isset($data['ReportPageData']['radiologyReferalReportData']))
  	
	<div class='col-md-12'>
		<span class="report_title">Radiology Report:-</span>
	</div>
	<div class="">

    	<div class="col-md-12">
            <table class="table table-striped table-bordered report_table" id="radio_list">
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
                    @if(count($data['ReportPageData']['radiologyReferalReportData'])>0)
                        @foreach($data['ReportPageData']['radiologyReferalReportData'] as $index=>$res)
                            <tr class="">
                                <!-- <td>{{++$index}}</td> -->
                                <td>{{$res['type']}}</td>
                                <td>{{$res['bodyparts']}}</td>
                                <td>{{$res['qualifiers']}}</td>
                                <td>{{$res['special_request']}}</td>
                                <td>{{$res['details']}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No data found.</td>
                        </tr>
                    @endif
                </tbody>
               </table>
            
    	</div>
    </div>
  	
  	@endif