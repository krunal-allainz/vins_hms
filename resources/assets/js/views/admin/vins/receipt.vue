<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<h1 class="text-center">Receipt List</h1>
			</div>
		</div>
		 <div class="row form-group">
		 	<div class="">
		 		Receipt 1
		 	</div>
		 </div>
	</div>
</template>
<script>
	import User from '../../../api/users.js';

	export default{
		data (){
			return {

			}
		},
		mounted(){
			 let vm =this;

			 User.getReceiptList().then(
			 		(response) => {
			 			console.log(response);
			 		},
			 		(error) => {

			 		}



			 	);
		}
	}

</script>