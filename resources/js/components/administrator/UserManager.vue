<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../form/NewForm.vue'
export default {

    props: ['id'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "User Manager",
                formName : "UserForm",
                model : "User",
                action : "CRUD", /* CRUD | EDIT | SEARCH */
                method : "",
                custom_query : [],
                with : [],
                mail : {
                    name : "Sandeep Rathod",
                    to : "sandeep198558@yahoo.com",
                    subject : "Email From Users of Zataks",
                },
                settings : {
                    isTitle : true,
                    isReset : true,
                    isSubmit : true,
                    isDateSearch : false,
                    isExport : true,

                    isForm : true,
                    isSearch : true,
                    isResults : true,
                    isAction : true,
                    isLoadMore : true,
                },
                display : [
                    { key : 'name', val : 'Name', type : 'text' },
                    { key : 'mobile', val : 'Mobile', type : 'text' },
                    { key : 'email', val : 'Email', type : 'text' },
                    { key : 'role', val : 'Role', type : 'text' },
                    { key : 'status', val : 'Status', type : 'text' },
                ],
                elements : [

                    {
                        label : 'Full Name',
                        name : 'name',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Full Name',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Full Name',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Status',
                        name : 'status',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Status', value : '' },
                            { key : 'Active', value : 'Active' },
                            { key : 'Non-Active', value : 'Non-Active' },
                            { key : 'Block', value : 'Block' },
                            { key : 'Hold', value : 'Hold' },
                            { key : 'Discontinue', value : 'Discontinue' },
                        ],
                        placeholder : 'Please Select Status',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Status',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Role',
                        name : 'role',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Role', value : '' },
                            { key : 'Administrator', value : 'Administrator' },
                            { key : 'Staff', value : 'Staff' },
                            { key : 'Student', value : 'Student' },
                        ],
                        placeholder : 'Please Select Role',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Role',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Mobile',
                        name : 'mobile',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Mobile',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Mobile',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Email',
                        name : 'email',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Email',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Email',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Password',
                        name : 'password',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Password',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Password',
                        error : '',
                        isError : false,
                        readonly : false,
                    },


                ],
            },
        }
    },

    methods : {

        change(e){
            /* console.log(e.target.value); */
        },

        /* getBusinessPlan(){
            window.axios.get('/auth/crud/showall?model=BusinessPlan&key=plan_name&val=id').then(res => {
                this.formData.elements[1].options = res.data;
            });
        } */
    },

    created(){
        if(this.id == null){
            this.formData.id = 0;
        } else {
            this.formData.id = this.id;
        }
    },

    mounted() {
    },

}
</script>
