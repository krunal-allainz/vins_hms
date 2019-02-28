@if(isset($data['ReportPageData']['radiologyReferalReportData']) && count($data['ReportPageData']['radiologyReferalReportData'])>0)
  	
	<div class='col-md-12'>
		<span class="report_title">Radiology Request:-</span>
	</div>
	<div class="">
    	<div class="col-md-12">
             @if(count($data['ReportPageData']['radiologyReferalReportData'])>0)
                <table class="table table-striped table-bordered report_table" id="radio_list">
                  <!-- <thead>
                        <tr>
                           
                             <th text-align="left">Type</th>
                             <th text-align="left">Body parts</th>
                             <th text-align="left">Spine</th>
                             <th text-align="left">Qualifier</th>
                             <th text-align="left">Special request</th>
                             <th text-align="left">Details</th>
                        </tr>
                    </thead> -->
                     <tbody>
                        @foreach($data['ReportPageData']['radiologyReferalReportData'] as $index=>$res)
                            <tr class="">
                               <td width="4%">{{++$index}}</td> 
                                @if($res['type']=='Other')
                                    <td>{{$res['radiology_other']}}</td>
                                @else
                                    <td>{{$res['type']}}</td>
                                @endif
                                @if($res['bodyparts']=='Other')
                                    <td>{{$res['bodyparts_other']}}</td>
                                @else
                                    <td>{{$res['bodyparts']}}</td>
                                @endif
                                <td>{{$res['spine_option_text']}}</td>
                                @if($res['qualifiers']=='Other')
                                    <td>{{$res['qualifiers_other']}}</td>
                                @else
                                    <td>{{$res['qualifiers']}}</td>
                                @endif
                                <td>{{$res['special_request']}}</td>
                                <td>{{str_limit($res['details'],50)}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <span class="report_details">No record found.</span> 
            @endif
            
    	</div>
    </div>
  	
@endif