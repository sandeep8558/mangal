<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'branches'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Branch History Manager",
                formName : "BranchHistoryForm",
                model : "BranchHistory",
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
                    { key : 'staff_id', val : 'Staff ID', type : 'text' },
                    { key : 'branch_id', val : 'Branch ID', type : 'text' },
                    { key : 'effective_from', val : 'Effective From', type : 'text' },
                    { key : 'effective_till', val : 'Effective Till', type : 'text' },
                    { key : 'remark', val : 'Remark', type : 'text' },

                ],
                elements : [

                    {
                        label : 'Staff ID',
                        name : 'staff_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Staff ID',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Staff ID',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Branch',
                        name : 'branch_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.branches,
                        placeholder : 'Please Select Branch',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Select Branch',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Effective From',
                        name : 'effective_from',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Effective From',
                        type : 'date',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Effective From',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Effective Till',
                        name : 'effective_till',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Effective Till',
                        type : 'date',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Effective Till',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Remark',
                        name : 'remark',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Remark',
                        type : 'text',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Remark',
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
