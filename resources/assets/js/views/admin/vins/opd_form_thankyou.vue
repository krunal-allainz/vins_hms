<template id="">
  <div class="container">
    <div class="page-header">
      <div class="row text-center">
        <div class="col-md-12">
          <h1>Thank You</h1>
        </div>
      </div>
    </div>
    <form action="" method="post">
    	 <div class="row form-group text-center">
    	 	 <div class="col-md-12">
    	 	 	<!-- <div class="col-md-4"> -->
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printAdvice()">Advice</button>
    	 	 <!-- 	</div>
    	 	 	<div class="col-md-4">-->
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printPriscription()">Prescription</button>
    	 	 	<!--</div>
    	 	 	<div class="col-md-4"> -->
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printReferal()">Referal</button>
    	 	 	<!--</div> -->
    	 	 </div>
    	 </div>
    </form>
     <div id="printModal" class="modal fade">
     	<div class="modal-dialog">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<vinsletterheadheaderpart></vinsletterheadheaderpart>
		 			</div>
		 			<div class="modal-body" id="printContent">	
		 				
		 				
            			</div>	
            	
				<vinsletterheadfooterpart></vinsletterheadfooterpart>
       		<div class="modal-footer">	
				
				<button  type="button" class="btn btn-primary"  @click="ClickHereToPrint()">Print</button>		      	
			
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	

             <!--  <button type="button" class="btn btn-primary">Save</button>-->	
            </div>	
        </div>
     </div>
  </div>
</div>
</template>
<script >
	import vinsletterheadheaderpart from './vins_letter_header.vue';
	import vinsletterheadfooterpart from './vins_letter_footer.vue';
	import moment from 'moment';
	var myDate = new Date();
				var month = ('0' + (myDate.getMonth() + 1)).slice(-2);
				var date = ('0' + myDate.getDate()).slice(-2);
				var year = myDate.getFullYear();
				var formattedDate = date + '/' + month + '/' + year ;
	export default {
		data() {
			return{
				'adviceData':this.$store.state.Patient.opdData.advise,
				'adviceDoctor':'Dr. '+this.$store.state.Users.userDetails.first_name+' '+this.$store.state.Users.userDetails.last_name,
				'priscriptionData':this.$store.state.Patient.opdData.prescription,
				'referalType':this.$store.state.Patient.opdData.referral,
				'crossType':this.$store.state.Patient.opdData.cross,
				'radiologyData':this.$store.state.Patient.resultData,
			}
		},
		components: {
         vinsletterheadheaderpart,
         vinsletterheadfooterpart,
       },

		methods: {
			printAdvice(){
				
				$('#printContent').html('');
				$('.printReceiptPage').html('');
				var html = "<div class='row'><div class='col-md-6 text-left'>";
					html +="<span class='text-left'><b>By :</b>"+this.adviceDoctor; 
    	 	 		html +="</div><div class='col-md-6 text-right'><span class='text-right'><b>Date :</b>";  
				 	html += formattedDate + "</span></div></div><br/><br/><div class='row text-center'>";
				 	html += "<div class='col-md-12'><span class='text-center'><h4><b><u>Advice</u></b>";
				 	html += "</h4></span>"+this.adviceData+"</div></div>";
		                if ($("#printContent .printReceiptPage").length == 0){	
		                		$("#printContent").append(html);	
		                }else{	
		                		$("#printContent").append(html);
		               	}
			},
			printPriscription(){
				$('#printContent').html('');
				$('.printReceiptPage').html('');
				var html = "<div class='row'><div class='col-md-6 text-left'>";
					html +="<span class='text-left'><b>By :</b>"+this.adviceDoctor; 
    	 	 		html +="</div><div class='col-md-6 text-right'><span class='text-right'><b>Date :</b>";  
				 	html += formattedDate + "</span></div></div><br/><br/><div class='row text-center'>";
				 	html += "<div class='col-md-12'><span class='text-center'><h4><b><u>Prescription</u></b>";
				 	html += "</h4></span> <ol class='text-left'>";
				 	$.each(this.priscriptionData,function(key,value){
  									html += "<li class='text-left'>"+value+"</li>";	
  									});
				 	html += "</ol></div></div>";
       

		                	 if ($("#printContent .printReceiptPage").length == 0){	
		                		$("#printContent").append(html);	
		                	}else{	
		                		$("#printContent").append(htmls);
		                	}
			},
			printReferal(){
				$('#printContent').html('');
				$('.printReceiptPage').html('');
				let getReferalType =  this.referalType;
				
				let data = '';
				var html = "<div class='row'><div class='col-md-6 text-left'>";
					html +="<span class='text-left'><b>By :</b>"+this.adviceDoctor; 
    	 	 		html +="</div><div class='col-md-6 text-right'><span class='text-right'><b>Date :</b>";  
				 	html += formattedDate + "</span></div></div><br/><br/><div class='row text-center'>";
				 	html += "<div class='col-md-12'><span class='text-center'><h4><b><u>Referal</u></b></h4></span>";
				 	html += "</div></div>";
				 	if (getReferalType == 'cross'){
				 		let crossType =  this.crossType;
				 		if(crossType == 'internal'){
				 			console.log(this.$store.state.Patient.opdData.cross_type_int);
				 			data = "<div class='row'><div class='col-md-12'><span class='text-left'><b>";
				 			data += crossType+":</b></span>Dr. "+this.$store.state.Patient.opdData.cross_type_int;
				 			data += "</div></div>";
				 		}
				 		if(crossType == 'external'){
				 			data = "<div class='row'><div class='col-md-12'><span class='text-left text-capitalize' style='padding-left:30px;padding-right;20px'><b>";
				 			data += crossType+" : </b></span>Dr. "+this.$store.state.Patient.opdData.cross_type_ext;
				 			data += "</div></div>";
				 		}

					}else if(getReferalType == 'radiology'){
						data = "<div class='table-responsive'><table class='table' id='radio_list'";
						 data += "align='center'><thead><tr><th>#</th>";
                        data += "<th>Type</th><th>Body parts</th><th>Qualifier</th><th>Special request</th>";
                        data +="</tr></thead><tbody><tr style='font-size:13px;'><td>1</td><td>CT</td>";
                         data +="<td>Upper Abdomen</td>";
                        data += "<td> Qualifires</td><td> Special request</td></tr> </tbody> </table> </div>";

					}else{
						data ="";
					}
					html +=  data;
		            if ($("#printContent .printReceiptPage").length == 0){	
		            	$("#printContent").append(html);	
		            }else{	
		            	$("#printContent").append(html);
		            }
			},
			ClickHereToPrint() {	
				    try {	
				    	var  printContent = '';	
				        printContent = document.getElementById('printContent').innerHTML;	
					        var windowUrl = '';	
					        var uniqueName = new Date();	
					        var windowName = 'Print' + uniqueName.getTime();	
					        var printWindow = window.open(windowUrl, windowName, 'left=50000,top=50000,width=0,height=0');	
					        printWindow.document.write('<html><body><div class="wrapper">'+printContent+'</div></body></html>');	
	
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