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
                title : "Asset Manager",
                formName : "AssetForm",
                model : "Asset",
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
                    { key : 'branch_id', val : 'Branch ID', type : 'text' },
                    { key : 'dt', val : 'Date', type : 'text' },
                    { key : 'particular', val : 'Particular', type : 'text' },
                    { key : 'narration', val : 'Narration', type : 'text' },
                    { key : 'supplier', val : 'Supplier', type : 'text' },
                    { key : 'amount', val : 'Amount', type : 'text' },
                    { key : 'expiry', val : 'Expiry', type : 'text' },

                ],
                elements : [

                    {
                        label : 'Branch',
                        name : 'branch_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Branch', value : '' },
                        ],
                        placeholder : 'Please Select Branch',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Branch',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Particular',
                        name : 'particular',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Particular',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Particular',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Narration',
                        name : 'narration',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Narration',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Narration',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Supplier',
                        name : 'supplier',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Supplier',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Supplier',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Amount',
                        name : 'amount',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Amount',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Amount',
                        error : '',
                        isError : false,
                        readonly : false,
                    },

                    {
                        label : 'Date of Purchase',
                        name : 'dt',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Date of Purchase',
                        type : 'date',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Date of Purchase',
                        error : '',
                        isError : false,
                        readonly : false,
                    },

                    {
                        label : 'Date of Expiry',
                        name : 'expiry',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Date of Expiry',
                        type : 'date',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Date of Expiry',
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
        this.formData.elements[0].options = this.branches;
    },

    mounted() {
    },

}
</script>
