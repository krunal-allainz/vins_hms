@if(isset($data['ReportPageData']['CrossReferalData']))
	<div class=''>
		<div class='col-md-12'>
			<span class="report_title">Cross Referrals:-</span>
	    </div>
		<div class="">
        	<div class="col-md-12">
        	  <div class="">
                    <table class="table table-striped table-bordered report_table" id="radio_list">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($data['ReportPageData']['CrossReferalData'])>0)
                                @foreach($data['ReportPageData']['CrossReferalData'] as $index=>$res)
                                    <tr class="">
                                        <td>{{++$index}}</td>
                                        <td>{{$res['cross_type']}}</td>
                                        <td>{{$res['cross_value']}}</td>
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
        </div>
    </div>
@endif
