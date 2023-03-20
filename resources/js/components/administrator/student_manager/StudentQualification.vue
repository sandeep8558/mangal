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
                title : "Student Qualification Manager",
                formName : "StudentQualificationForm",
                model : "StudentQualification",
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
                    { key : 'particular', val : 'Particular', type : 'text' },
                    { key : 'year', val : 'Year', type : 'text' },
                    { key : 'university', val : 'University', type : 'text' },
                    { key : 'grade', val : 'Grade / %', type : 'text' },
                    { key : 'remark', val : 'Remark', type : 'text' },

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
                        name : 'particular',
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
                        label : 'Year',
                        name : 'year',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Year',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Year',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'University',
                        name : 'university',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter University',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter University',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Grade/Percentage',
                        name : 'grade',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Grade/Percentage',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Grade/Percentage',
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
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
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
