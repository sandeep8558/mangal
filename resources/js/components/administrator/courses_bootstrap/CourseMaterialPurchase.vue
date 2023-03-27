<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'material'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Course Material Purchase Manager",
                formName : "CourseMaterialPurchaseForm",
                model : "CourseMaterialPurchase",
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
                    { key : 'course_instrument_id', val : 'Course Instrument', type : 'text' },
                    { key : 'dt', val : 'Date', type : 'text' },
                    { key : 'amount', val : 'Amount', type : 'text' },
                    { key : 'qty', val : 'QTY', type : 'text' },
                    { key : 'narration', val : 'Narration', type : 'text' },

                ],
                elements : [

                    {
                        label : 'Course Instrument',
                        name : 'course_instrument_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.material,
                        placeholder : 'Please Select Course Instrument',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Course Instrument',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Date',
                        name : 'dt',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Date',
                        type : 'date',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Date',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Aount',
                        name : 'amount',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Aount',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Aount',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Quantity',
                        name : 'qty',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Quantity',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Quantity',
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
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Narration',
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
