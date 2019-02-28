@if(isset($data['ReportPageData']['radiologyReportData']) && count($data['ReportPageData']['radiologyReportData']) > 0)
	<div class=''>
		<div class='col-md-12'>
			<span class="report_title">Investigation Radiology Request:-</span>
		</div>
		<div class=""  >
        	<div class="col-md-12">
        	    <div class="">
                    @if(count($data['ReportPageData']['radiologyReportData']))
                        <table class="table table-striped table-bordered report_table" id="radio_list">
                            <!-- <thead>
                                <tr>
                                <th width="4%">#</th> 
                               
                                 <th>Details</th>
                                </tr>
                             </thead> -->
                             <tbody>
                                @foreach($data['ReportPageData']['radiologyReportData'] as $index=>$res)
                                     <tr class="text-center">
                                       <td width="4%">{{++$index}}</td> 
                                       <!--  @if($res['type']=='Other')
                                            <td>{{$res['radiology_other']}}</td>
                                        @else
                                            <td>{{$res['type']}}</td>
                                        @endif
                                        @if($res['bodyparts']=='Other')
                                            <td>{{$res['bodyparts_other']}}</td>
                                        @else
                                            <td>{{$res['bodyparts']}}</td>
                                        @endif
                                        @if($res['qualifiers']=='Other')
                                            <td>{{$res['qualifiers_other']}}</td>
                                        @else
                                            <td>{{$res['qualifiers']}}</td>
                                        @endif
                                        <td>{{$res['special_request']}}</td> -->
                                        <td>{{str_limit($res['details'],1500)}}</td>
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
  	</div>
@endif