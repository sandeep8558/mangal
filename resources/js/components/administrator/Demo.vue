<template>
    <div>
        <my-form :myFormData="myFormData" :myForm="myForm"></my-form>
    </div>
    </template>
    
    <script>
    import MyForm from '../form/MyForm.vue';
    export default {
        
        components: {
            MyForm,
        },
    
    
        /* Data */
        data(){
            return {
                myFormData : {
                    ShowForm: true,
                    HeaderTitle: "Courses Manager",
                    Model: 'Course',
                    Rows: 10,
                    Buttons: [],
                    Grid: [
                        {key: 'category_id', text: 'Category ID', type: 'text'},
                        {key: 'category.category', text: 'Category', type: 'text'},
                        {key: 'fee.fees_amount', text: 'Fee', type: 'text'},
                        {key: 'course', text: 'Course', type: 'text'},
                        {key: 'display', text: 'Display', type: 'text'},
                        {key: 'media', text: 'Media', type: 'image'},
                    ],
                    With: ['category', 'fee'],
                    Where: [],
                    WhereIn: [],
                },
                myForm: [
                    {
                        label: 'Gender',
                        name: 'gender',
                        value : '',
                        values : [],
                        options : [
                            { value: "Male", text: "Male" },
                            { value: "Female", text: "Female" },
                            { value: "Other", text: "Other" },
                        ],
                        placeholder: '',
                        type: 'select',
                        validation : 'required | string',
                        hint : 'Please Enter Gender',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },

                    {
                        label: 'Display',
                        name: 'display',
                        value : '',
                        values : [],
                        options : [
                            { value: "Show", text: "Show" },
                            { value: "Hide", text: "Hide" },
                        ],
                        placeholder: '',
                        type: 'radio',
                        validation : 'required | string',
                        hint : 'Please Enter Display',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },

                    {
                        label: 'Hobby',
                        name: 'hobby',
                        value : '',
                        values : [],
                        options : [
                            { value: "Music", text: "Music" },
                            { value: "Reading", text: "Reading" },
                            { value: "Playing", text: "Playing" },
                        ],
                        placeholder: '',
                        type: 'checkbox',
                        validation : 'required | string',
                        hint : 'Please Enter Hobby',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },



                    {
                        label: 'Date of Birth',
                        name: 'dob',
                        value : '',
                        placeholder: '',
                        type: 'date',
                        validation : 'required | string',
                        hint : 'Please Enter Date of Birth',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },
                    {
                        label: 'Category',
                        name: 'category',
                        value : '',
                        placeholder: '',
                        type: 'text',
                        validation : 'required | string',
                        hint : 'Please Enter Category',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },
                    {
                        label: 'Email',
                        name: 'email',
                        value : '',
                        placeholder: '',
                        type: 'email',
                        validation : 'required | string',
                        hint : 'Please Enter Email',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },
                    {
                        label: 'Time',
                        name: 'time',
                        value : '',
                        placeholder: '',
                        type: 'time',
                        validation : 'required | string',
                        hint : 'Please Enter Time',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },
                    {
                        label: 'Password',
                        name: 'password',
                        value : '',
                        placeholder: '',
                        type: 'password',
                        validation : 'required | string',
                        hint : 'Please Enter Password',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },
                    {
                        label: 'Description',
                        name: 'description',
                        value : '',
                        placeholder: '',
                        type: 'textarea',
                        validation : 'required | string',
                        hint : 'Please Enter Description',
                        isError : false,
                        readonly: false,
                        class : 'col-12',
                    },
                ],
            };
        },
    
    
        /* Properties */
        props: {},
    
    
        /* All methods goes here */
        methods: {},
    
    
        /* Lifecycle Hooks */
    
        created() {},
    
    }
    </script>
    
    <style>
    </style>