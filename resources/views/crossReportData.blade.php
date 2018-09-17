@if(isset($data['ReportPageData']['CrossReferalData']) && $data['ReportPageData']['CrossReferalData'] != null)
	<div class='row'>
		<div class='col-md-12 text-center'>
			<h5>Cross Referrals</h5>
	    </div>
		<div class="row">
        	<div class="col-md-12">
        	  <div class="">
                <table class="table table-striped table-bordered" id="radio_list">
                  <thead>
                    <tr>
                     <th>#</th>
                     <th>Type</th>
                     <th>Name</th>
                    </tr>
                 </thead>
                 <tbody>
                 @foreach($data['ReportPageData']['CrossReferalData'] as $index=>$res)
                 <tr class="text-center">
                            <td>{{++$index}}</td>
                            <td>{{$res['cross_type']}}</td>
                            <td>{{$res['cross_value']}}</td>
                            
                           
                    </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
        	</div>
        </div>  	
@endif
