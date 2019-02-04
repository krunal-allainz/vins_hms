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
      <div class="row table-responsive">
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
            <tr v-for="(res,index) in receiptData" :id="'receipt_'+res.id">
               <td>{{res.id}}</td>
               <td>{{res.receipt_number}}</td>
               <td>{{res.case_no}}</td>
               <td>{{res.patient_details.first_name}} {{res.patient_details.last_name}}</td>
               <td>{{res.patient_details.user_details.first_name}} {{res.patient_details.user_details.last_name}}</td>
               <td>{{res.date}}</td>
               <td>
             

	               	<button type="button" class="btn btn-success" id="modellink" @click="receiptPrintView(res.id,1)">Print</button>
	               	
	              	<button v-if="res.print_counter>0" type="button" class="btn btn-info"  id="modellink" @click="receiptPrintView(res.id,2)">Print Duplicate</button>
	               	

	               	<button type="button" class="btn btn-primary" data-toggle="modal" href="#receiptEditModel" id="modellinkEdit" @click="receiptEdit(res.id)">Edit</button>
	               
	               <!-- <button type="button" class="btn btn-danger" @click="removeReceipt(res.id)">Delete</button> -->
           	   </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div data-v-744e717e="" class="table-footer">
	<div data-v-744e717e="" class="datatable-length float-left pl-3">
			<span data-v-744e717e="">Rows per page:</span>
			<select data-v-744e717e="" class="custom-select" id="perPageNo"  @change="setPerPage" v-model="perPage">
				<option data-v-744e717e="" value="2">2</option>
 				<option data-v-744e717e="" value="5">5</option>
  				<option data-v-744e717e="" value="10">10</option>
  				<option data-v-744e717e="" value="20">20</option>
  				<option data-v-744e717e="" value="50">50</option>
					<!--     <option data-v-744e717e="" value="-1">All</option> -->
			</select>
      <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
        <ul class="pagination">
          <li> <a href="javascript:void(0)"  @click="getResults('/patient/receiptlist?page=1',perPage)" class="previous" v-if="pagination.current_page!=1">&laquo; First</a></li>
          <li> <a href="javascript:void(0)"  @click="getResults(pagination.prev_page_url)" class="previous" v-if="pagination.current_page!=1">&laquo; Prev</a></li>
           <li v-for="record_pagination,index in pagination.last_page" >
            <span v-if="Math.abs(record_pagination - pagination.current_page)<3">
                <a v-bind:class="[pagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getResults('/patient/receiptlist?page='+index,perPage)">{{index}}</a>
            </span>
          </li> 
          <li><a href="javascript:void(0)"  v-if="pagination.current_page!=pagination.last_page" @click="getResults(pagination.next_page_url)" class="next">Next &raquo;</a></li>
          <li><a href="javascript:void(0)"  v-if="pagination.current_page!=pagination.last_page" @click="getResults('/patient/receiptlist?page='+pagination.last_page,perPage)" class="next">Last &raquo;</a></li>
        </ul>
      </div>
 		   <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(pagination.total > 0)">
    		<span data-v-744e717e="">Showing </span> {{pagination.from}} - {{pagination.to}} of {{pagination.total}}
    		<span data-v-744e717e="">records</span>
			  </div>
		</div>
	 </div>
   <!--    <div class="pagination">
    <button class="btn btn-default" @click="getResults(pagination.prev_page_url)"
            :disabled="!pagination.prev_page_url">
        Previous
    </button>
    <span>Page {{pagination.current_page}} of {{pagination.last_page}}</span>
    <button class="btn btn-default" @click="getResults(pagination.next_page_url)"
            :disabled="!pagination.next_page_url">Next
    </button>
      
  </div> -->
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
 				</div>	
            </div>	
          </div>	
       </div>
   <div id="receiptEditModel" class="modal hide" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Patient Receipt Form</h4>
            </div>
            <div class="modal-body">
                <patientReceiptForm :receipt_id="receipt_id" v-if="modal_enabled=='true'"></patientReceiptForm>
            </div>
            <div class="modal-footer">
              <button type="button" class="closem btn btn-default" @click="close_popup()">Close</button>
            </div>
          </div>
        </div>
      </div>	
  
</div>
</template>
<script>
	import User from '../../../api/users.js';
	import moment from 'moment';
	import patientReceiptForm from './patientsReceiptEditForm.vue';
	let  receptDataArrays = [];
	export default{
		data (){
			return {
				'login_user_id' :this.$store.state.Users.userDetails.id,
				'receiptData' :receptDataArrays,
				'next_page_url' :'',
				'prev_page_url' : '',
				'path' : '',
				'pagination': {},
				'print_counter':0,
				'receipt_id':'',
				'modal_enabled':false,
				'perPage':5,
			}
		},
		components: {
           patientReceiptForm,
        },
         created: function() {
             this.$root.$on('close_modal', this.close_popup);
            
        },
		mounted(){
			 let vm =this;
			 vm.getUserRole('view.receipt','view','','');
			if(vm.$store.state.Users.userDetails.user_type != '3'){
              vm.$root.$emit('logout','You are not authorise to access this page'); 
            }
			vm.getResults();
			 //this.fetchStories()/
		},
		methods: {
			setPerPage(e){
		      let vm =this;
		      vm.getResults('/patient/receiptlist');
		    },
			getUserRole(permission,type,id,rec_type){
                 var vm = this;
                User.getUserRole(vm.login_user_id,permission).then(
                    (responce) => {
                       if(responce.data.data == ''){
                       	 if(type=='print')
                       	 {
                       	 	$('#receiptModal').modal('hide');
                       	 }
                         vm.$root.$emit('logout','You are not authorise to access this page');
                       }
                       else
                       {
                       		if(type=='print')
                       		{
                       			$('#receiptModal').modal('show');
                       			vm.printReceiptAllow(id,rec_type);
                       		}
                       }
                    },
                    (error) =>{

                    }
                    );
            },
			close_popup()
	        {
	        	let vm=this;
	        	vm.modal_enabled='false';
	            $('#receiptEditModel').modal('hide');
	        },
			receiptEdit(receipt_id)
			{
				let vm =this;
				vm.receipt_id=receipt_id;
				vm.modal_enabled='true';

			},
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
				var noperPage=vm.perPage;
				page_url = page_url || '/patient/receiptlist';
				User.getReceiptList(page_url,noperPage).then(
			 		(response) => {
			 			 vm.receiptData = response.data.data;
			 			 vm.makePagination(response.data);
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
								$('#receipt_'+id).remove();
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
			receiptPrintView(id,rec_type) {   	
	            	
	            let vm=this;
	            vm.getUserRole('print.receipt','print',id,rec_type);
			},
			printReceiptAllow(id,rec_type){
				let vm=this;
				let content = [];	
        		let type = 'opd';
        		
        		User.generateReceiptDataById(id,type,rec_type).then(	
	                (response) => { 
	                	$('#printContent').html('');
		                	if ($("#printContent .printReceiptPage" ).length == 0){	
		                		$('#printContent').append(response.data.html);	
		                	}else{	
		                		$('#printContent').append(response.data.html)	
		                	}
		                	 User.generatePrintCounter(id).then(
			        			(response) => {
			        				//vm.print_counter=response.data;
			        				vm.getResults();
				            	},	
				                (error) => {

				                }	
			        		);	

	            	},	
	                (error) => {	
	                	 $("body .js-loader").addClass('d-none');	

	                }	
                );
               
			},
			makePagination: function(data){
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url,
                    total : data.total,
					from : data.from,
					to : data.to
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