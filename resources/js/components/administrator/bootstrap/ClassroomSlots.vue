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
                title : "Classroom Slot Manager",
                formName : "ClassroomSlotForm",
                model : "ClassroomSlot",
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
                    { key : 'order', val : 'Order', type : 'text' },
                    { key : 'name', val : 'Name', type : 'text' },
                    { key : 'from', val : 'From', type : 'text' },
                    { key : 'to', val : 'To', type : 'text' },
                    { key : 'minutes', val : 'Minutes', type : 'text' },
                ],
                elements : [
                    {
                        label : 'Order',
                        name : 'order',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Order',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Order',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'From Time',
                        name : 'from',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter From',
                        type : 'time',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter From',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'To Time',
                        name : 'to',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter To Time',
                        type : 'time',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter To Time',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Minutes',
                        name : 'minutes',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Minutes',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Minutes',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Name of slot',
                        name : 'name',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Name of slot',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Name of slot',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Description',
                        name : 'description',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Description',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Description',
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
