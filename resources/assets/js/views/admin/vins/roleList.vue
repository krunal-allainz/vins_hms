<template>
    <div>
        <!--First Table-->
        <div class="row">
            <div class="col-lg-12">
                 <div class="card bg-success-card">
            <h4 class="card-header">
               <div> Role List</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3" v-if="getRoleData.length>0">
              <div data-v-744e717e="" class="table-header">
                  <h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
              </div>

              <div data-v-744e717e="" class="table-responsive">
                <table data-v-744e717e="" class="table">
                  <thead data-v-744e717e="">
                    <tr data-v-744e717e="">
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            #
                        </th>
                        <th data-v-744e717e="" class="sortable sorting-asc" style="width: 200px;">
                                Role Name 
                        </th>
                        <th style="width: auto;">
                            Slug 
                             <i data-v-744e717e="" class="fa float-right"></i>
                         </th>
                         <th data-v-744e717e="" class="sortable" style="width: auto;">
                           Description
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                       
                        <th data-v-744e717e="" class="sortable" style="width: auto;" >
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e="" v-for="role in getRoleData">
                      <td data-v-744e717e="" class="">
                        {{role.id}}
                      </td>
                      <td data-v-744e717e="" class="">
                        {{role.name }}
                      </td> <!---->
                      <td data-v-744e717e="" class="">
                       {{role.slug }}
                      </td>
                      <td data-v-744e717e="" class="numeric">
                       {{role.description }}
                      </td> 
                      <td data-v-744e717e="" class="">
                        <a  :href="'/role/edit/'+role.id"> <i class="fa fa-pencil"  title="role edit"></i></a>
                                      <a > <i class="fa fa-trash"  title="Role delete" @click="deleteRole(role.id)"  ></i></a>                    
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
                          <li> <a href="javascript:void(0)"  @click="getRolesListWithPaggination(pagination.prev_page_url,perPage)" class="previous" v-if="pagination.current_page!=1">&laquo; Prev</a></li>
                          <li  v-for="record_pagination,index in pagination.last_page" v-if="index<=2"><a v-bind:class="[pagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getRolesListWithPaggination('role/getRoleList/?page='+index,perPage)">{{index}}</a></li>
                          <li><a href="javascript:void(0)"  v-if="pagination.current_page!=pagination.last_page" @click="getRolesListWithPaggination(pagination.next_page_url,perPage)" class="next">Next &raquo;</a></li>
                        </ul>
                      </div>
                   
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(pagination.total>0)">
                        <span data-v-744e717e="">Showing </span> {{pagination.current_page}} - {{pagination.to}} of {{pagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
            <div v-else>
              <h6 class="card-header">
               <div>No records available</div>
            </h6>
            </div>
          </div>
        </div>
            </div>
        </div>
    </div>
     </template>
<script>
    import User from '../../../api/users.js';
    import RoleDetailEdit from './roleDetailEdit.vue'

    export default {
        data() {
            return {
                  'login_user_id' :this.$store.state.Users.userDetails.id,
                  'deleteConfirmMsg':'Are you sure you want to delete this role?',
                  'getRoleData':{},
                  'pagination': {},
                   'perPage' : 5,
            }
        },
        mounted() {
            var vm = this;
            vm.getUserRole('view.role');
            let pageUrl = 'role/getRoleList/';
            let noOfPage = vm.perPage;
            vm.getRolesListWithPaggination(pageUrl,noOfPage);
        },
        methods: {
           getUserRole(permission){
                 var vm = this;
                User.getUserRole(vm.login_user_id,permission).then(
                    (responce) => {
                       if(responce.data.data == ''){
                         vm.$root.$emit('logout','You are not authorise to access this page');
                       }
                    },
                    (error) =>{

                    }
                    );
            },
            getRolesListWithPaggination(pageUrl,noOfPage){
                var vm = this;
                var roleData;
                  User.getRolesListWithPaggination(pageUrl,noOfPage).then(
                     (response)=>{
                            //roleData=response.data.data.data;
                            vm.getRoleData = response.data.data.data;
                            vm.makePagination(response.data.data);
                        },
                    (error)=>{
                     }
                );
            },
            deleteRole(roleId){
                let vm = this;
                if(confirm(vm.deleteConfirmMsg))
                {
                    User.deleteRoleById(roleId).then(
                     (response) => {
                        if(response.data.code == 200){
                              toastr.success('Role Delete successfully', 'Delete Role', {timeOut: 5000});
                               let vm =this;
                               let pageUrl = 'role/getRoleList/';
                               let noOfPage = vm.perPage;
                               vm.getRolesListWithPaggination(pageUrl,noOfPage);
                        }
                     },
                     (error) => {

                     }
                );
                }
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
                 },
            setPerPage(e){
            let vm =this;
            let pageUrl = 'role/getRoleList/';
            let noOfPage = vm.perPage;
            vm.getRolesListWithPaggination(pageUrl,noOfPage);
            }
        }
    }
</script>
