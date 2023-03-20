<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'salary_groups'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Student Employment Manager",
                formName : "StudentEmploymentForm",
                model : "StudentEmployment",
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
                    { key : 'student_id', val : 'Student ID', type : 'text' },
                    { key : 'company', val : 'Company', type : 'text' },
                    { key : 'doj', val : 'Joining Date', type : 'text' },
                    { key : 'designation', val : 'Designation', type : 'text' },
                    { key : 'location', val : 'Location', type : 'text' },
                ],
                elements : [

                    {
                        label : 'Student ID',
                        name : 'student_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Student ID',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Student ID',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Particular',
                        name : 'company',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Particular',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Particular',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Joining Date',
                        name : 'doj',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Joining Date',
                        type : 'date',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Joining Date',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Designation',
                        name : 'designation',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Designation',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Designation',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Location',
                        name : 'location',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Location',
                        type : 'text',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Location',
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
