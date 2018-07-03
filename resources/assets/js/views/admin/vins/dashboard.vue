<template>
	 <section class="content">
		<div class="row">
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon float-left">
                                <i class="ti-eye text-warning"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>{{counterData.dailyPatient}}</b></h3>
                                <p>Daily Visits</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="loadspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon float-left">
                                <i class="ti-shopping-cart text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3><b id="widget_count3">{{counterData.dailyOPD}}</b></h3>
                                <p>Daily OPD</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span class="linechart" id="salesspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon float-left">
                                <i class="ti-thumb-up text-danger"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>{{counterData.monthlyPatient}}</b></h3>
                                <p>Monthly Visits</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                <!--         <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="visitsspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon float-left">
                                <i class="ti-user text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>{{counterData.monthlyOPD}}</b></h3>
                                <p>Monthly OPD</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="subscribers-chart"></span>
                               </div>
                           </div>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-12">
                </div>
                <div class="col-xl-4  col-12">
                	<div class="row">
                        <div class="col-xl-12 col-sm-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Timeline</h3>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <ul class="timeline timeline-update">
                                            <li>
                                                <div class="timeline-badge primary wow lightSpeedIn center">
                                                 <!--    <img src="img/authors/avatar1.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image"> -->
                                                </div>
                                                <div class="timeline-card wow slideInLeft"
                                                     style="display:inline-block;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Patient Add </h4>
                                                        <p>
                                                            <small class="text-primary">11 hours ago</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            new patient add
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="timeline-badge info wow lightSpeedIn center">
                                                  <!--   <img src="img/authors/avatar.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image"> -->
                                                </div>
                                                <div class="timeline-card wow slideInLeft">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">New 
                                                        OPD</h4>
                                                        <p>
                                                            <small class="text-primary">July 03, 2018</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            New OPD case added.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge default wow lightSpeedIn center">
                                                  <!--   <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image"> -->
                                                </div>
                                                <div class="timeline-card wow slideInLeft">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Vasculer Patient </h4>
                                                        <p>
                                                            <small class="text-primary">Jan 02, 2018</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                           old patient on vasculer department.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge primary wow lightSpeedIn center">
                                                   <!--  <img src="img/authors/avatar3.jpg" height="36" width="36"
                                                         class="rounded-circle float-right" alt="avatar-image"> -->

                                                </div>
                                                <div class="timeline-card wow slideInLeft"
                                                     style="display:inline-block;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Daily Status </h4>
                                                        <p>
                                                            <small class="text-primary"></small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                           average patient count
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>

                                         
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</template>
<script >
	import User from '../../../api/users.js';
	export default{
		data(){
			return {
				post: null,
				'counterData' : {
					'dailyPatient' : '0',
					'dailyOPD' : '0',
					'monthlyPatient' : '0',
					'monthlyOPD' : '0',

				},
				'type' : 'OPD'

			}
		},
		 
		 mounted(){

		 	this.getPatientCounters();
		 	this.getOPDCounters();
		 	 if ($('.timeline-update').length > 0) {
		        $('.timeline-update').newsTicker({
		            row_height: 117,
		            max_rows: 4,
		            speed: 2000,
		            direction: 'up',
		            duration: 3500,
		            autostart: 1,
		            pauseOnHover: 1
		        });
		 	 
   			 }
		 },
		  methods:{
		  		getPatientCounters(){
		  			User.getNumberOfPatient(this.type).then(
		  				 (response) => {
		  				 	this.counterData.dailyPatient = response.data.data.today;
		  				 	this.counterData.monthlyPatient = response.data.data.month;
		  				 },
		  				  (error) => {	
		  				  }

		  				);

		  		},
		  		getOPDCounters(){

		  			User.getOPDCounters().then(
		  				(response) => {
		  					this.counterData.dailyOPD = response.data.data.today;
		  				 	this.counterData.monthlyOPD = response.data.data.month;
		  				 
		  				},
		  				(error) => {

		  				}
		  			);

		  		}
		  },
	}
</script>
