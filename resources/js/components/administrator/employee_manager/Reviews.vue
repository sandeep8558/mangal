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
                title : "EmployeeReview Manager",
                formName : "EmployeeReviewForm",
                model : "EmployeeReview",
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
                    { key : 'review_title', val : 'Title', type : 'text' },
                    { key : 'review_date', val : 'Review Date', type : 'text' },
                    { key : 'impression', val : 'Impression', type : 'text' },
                    { key : 'review_remark', val : 'Remark', type : 'text' },
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
                        label : 'Impression',
                        name : 'impression',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Impression', value : '' },
                            { key : 'Positive', value : 'Positive' },
                            { key : 'Negative', value : 'Negative' },
                        ],
                        placeholder : 'Please Select Impression',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Impression',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Review Date',
                        name : 'review_date',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Review Date',
                        type : 'date',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Review Date',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Review Title',
                        name : 'review_title',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Review Title',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Review Title',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Explain Details',
                        name : 'review_remark',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Explain Details',
                        type : 'textarea',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Explain Details',
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
