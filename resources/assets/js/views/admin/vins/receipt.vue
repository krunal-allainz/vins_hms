<template>
	 <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-md-6">
        <h1>OPD Receipt List</h1>
        </div>
        
      </div>
    </div>
    <!-- jnmbnmb -->
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
           	  <th>#</th>
              <th>Receipt No.</th>
              <th>Case No.</th>
              <th>Patient Name</th>
              <th>Doctor Name</th>
              <th>Date</th>
       <!--        <th>Admit Date</th>
              <th>Discharge Date</th> -->
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <tr v-for="(res,index) in receiptData">
               <td>{{++index}}</td>
               <td>{{res.receipt_number}}</td>
               <td>{{res.case_no}}</td>
               <td></td>
               <td>{{res.doctor_name}}</td>
               <td>{{res.date}}</td>
               <td>
              <!--  	<button type="button" class="btn btn-success" >Print</button> -->
               	<button type="button" class="btn btn-success" data-toggle="modal" href="#receiptModal" id="modellink" @click="receiptPrintView(res.id)">Print</button>
               <button type="button" class="btn btn-danger" @click="removeReceipt(res.id)">Delete</button></td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="pagination">
    <button class="btn btn-default" @click="getResults(pagination.prev_page_url)"
            :disabled="!pagination.prev_page_url">
        Previous
    </button>
    <span>Page {{pagination.current_page}} of {{pagination.last_page}}</span>
    <button class="btn btn-default" @click="getResults(pagination.next_page_url)"
            :disabled="!pagination.next_page_url">Next
    </button>
       <div id="receiptModal" class="modal fade">
		 	<div class="modal-dialog">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 			</div>
		 			<div class="modal-body" id="printContent">	
		 				
            		</div>	
            	
	
	       		<div class="modal-footer">	
		
					<button  type="button" class="btn btn-primary"  @click="ClickHereToPrint()">Print</button>		      	
				
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
	             <!--  <button type="button" class="btn btn-primary">Save</button>-->	
	            </div>	
            </div>	
          </div>	
       </div>
  </div>	
  
</div>
</template>
<script>
	import User from '../../../api/users.js';
	import moment from 'moment';
//	import Pagination from './pagination/Pagination';

	let  receptDataArrays = [];
	export default{
		data (){
			return {
				'receiptData' :receptDataArrays,
				'next_page_url' :'',
				'prev_page_url' : '',
				'path' : '',
				 'pagination': {}
			}
		},

		mounted(){
			 let vm =this;
			 vm.getResults();
			 //this.fetchStories()/
		},
		methods: {
			 next(page) {
            this.$emit('next', page);
        },
          nextPage(){
         this.pageNumber++;
      },
      prevPage(){
        this.pageNumber--;
      },
			// Our method to GET results from a Laravel endpoint
		getResults(page_url) {
			var vm =this;
			
			User.getReceiptList(page_url).then(
			 		(response) => {
			 			 page_url = page_url;
			 			 vm.receiptData = response.data.data;
			 			 vm.makePagination(response.data);
			 			//  vm.$set('receiptData', response.data.data)
			 			 User.getReceiptList(page_url)
		                    .then(function (response) {
		                        vm.makePagination(response.data);
		                         vm.receiptData = response.data.data;
		                    });
		                    
			 			/* $.each(response.data,function(key,value){
					 			let id = value.id;
					 			let receiptNo = value.receipt_number;
					 			let caseNo = value.case_no;
					 			let date = value.date;
					 			//let date = value.date;
					 			let patientId = value.patientDetails.id;
					 			let fullName  = value.patientDetails.first_name+''+value.patientDetails.last_name;
					 			let consult = value.patientDetails.consultant;
					 			// $.each(value.patient_details,function(index){
					 			// 	console.log(index.id);
					 			// 	//let fullName = 
					 			// });
				 			receptDataArrays.push({
				 				'id' : id,
				 				'receiptNo' : receiptNo,
				 				'caseNo' : caseNo,
				 				'date' : date,
				 				'patientId' : patientId,
				 				'fullName' : fullName,
				 				'consult' : consult
				 			});
				 		 });*/
			 		},
			 		(error) => {

			 		}

			 	);
			},
			removeReceipt(id){
				
				if(confirm('Are you sure to remove this record ?'))
        		{
        			User.removeReceipt(id).then(

						(response) => {
							if(response.data.code == '200'){
								 User.getReceiptList().then(
								 		(response) => {
								 		this.receiptData = response.data;
								 		},
								 		(error) => {

								 		}

								 	);
								toastr.success(response.data.message, 'Receipt Delete', {timeOut: 5000});	
							}
						},
						(error) => {
							toastr.success('somthing wrong', 'Receipt Delete', {timeOut: 5000});
							return false;
						}
					);
        		}
			},
			receiptPrintView(id) {   	
	            	//if (!this.errors.any()) {	
	            		// $("body .js-loader").removeClass('d-none');	
	            		let content = [];	
	            		let type = 'opd';	
	            		User.generateReceiptDataById(id,type).then(	
		                (response) => { 
		                	$('#printContent').html('');
			                	if ($("#printContent .printReceiptPage" ).length == 0){	
			                		$('#printContent').append(response.data.html);	
			                	}else{	
			                		$('#printContent').append(response.data.html)	
			                	}
			                
		                	//$('#receiptModal').modal({show:true}); 	
	
		            	},	
		                (error) => {	
		                	 $("body .js-loader").addClass('d-none');	
	
		                }	
		                );	
				    	/*User.printReceiptPreview(this.patientData,content).then(	
		                (response) => {	
		                	if(response.data.code == 200) {	
		                		$('#receiptModal').modal({show:true});	
	                		toastr.success('Appointment has been saved', 'Appointment Book', {timeOut: 5000});	
		                	}	
		                	 $("body .js-loader").addClass('d-none');	
	
		                },	
		                (error) => {	
		                	 $("body .js-loader").addClass('d-none');	
	
		                }	
		                )*/	
			    	//	
			},	
			makePagination: function(data){
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url
                }
                this.pagination = pagination;
                //this.$set('pagination', pagination)
            },
			ClickHereToPrint() {	
				    try {	
				    	var  printContent = '';	
				        printContent = document.getElementById('printContent').innerHTML;	
					        var windowUrl = '';	
					        var uniqueName = new Date();	
					        var windowName = 'Print' + uniqueName.getTime();	
					        var printWindow = window.open(windowUrl, windowName, 'left=5000,top=5000,width=0,height=0');	
					        printWindow.document.write(printContent);	
	
				        printWindow.document.close();	
				        printWindow.focus();	
				        printWindow.print();	
	
				        printWindow.close();	
				    }	
				    catch (e) {	
				        self.print();	
				    }	
				},	
		}
	}

</script>