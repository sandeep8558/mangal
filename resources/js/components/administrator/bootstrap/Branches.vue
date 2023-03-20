<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Branch Manager",
                formName : "BranchForm",
                model : "Branch",
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
                    { key : 'location_name', val : 'Location Name', type : 'text' },
                    { key : 'city', val : 'City', type : 'text' },
                    { key : 'contact_number', val : 'Contact Number', type : 'text' },
                    { key : 'email', val : 'Email', type : 'text' },
                    { key : 'status', val : 'Status', type : 'text' },

                ],
                elements : [

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
                        label : 'Branch Name',
                        name : 'location_name',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Branch Name',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Branch Name',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Address',
                        name : 'address',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Address',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Address',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'City',
                        name : 'city',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter City',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter City',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Pincode',
                        name : 'pincode',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Pincode',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Pincode',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'State',
                        name : 'state',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter State',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter State',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Country',
                        name : 'country',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Country',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Country',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Contact Number',
                        name : 'contact_number',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Contact Number',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Contact Number',
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
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Email',
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
