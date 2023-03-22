<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'batches', 'students'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Batch Student Manager",
                formName : "BatchStudentForm",
                model : "BatchStudent",
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
                    { key : 'batch_id', val : 'Batch ID', type : 'text' },
                    { key : 'batch_name', val : 'Batch', type : 'text' },
                    { key : 'student_data', val : 'Student', type : 'text' },

                ],
                elements : [

                    {
                        label : 'Batch',
                        name : 'batch_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.batches,
                        placeholder : 'Please Select Batch',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Batch',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Student',
                        name : 'student_course_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.students,
                        placeholder : 'Please Select Student',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Student',
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

        getStudents(){
            let a = [];
            this.students.forEach(std => {
                console.log(std);
                let b = {
                    key: std.student_data,
                    value: std.id
                }
                a.push(b);
            });
            this.formData.elements[1].options = a;
        }
    },

    created(){
        if(this.id == null){
            this.formData.id = 0;
        } else {
            this.formData.id = this.id;
        }

        this.getStudents();
    },

    mounted() {
    },

}
</script>
