/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./sidebar');

$(document).ready(()=>{

    $(".autofocus").focus();

    $("#sub_cats").change(()=> {
        let link = $("#sub_cats").val();
        window.location.href = link;
    });

    $("#show_hide_password").on('click', function(event) {

        if($('#login_password').attr("type") == "text" || $('#password').attr("type") == "text"){
            $('#login_password').attr('type', 'password');
            $('#password').attr('type', 'password');
            $('#password-confirm').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else{
            $('#login_password').attr('type', 'text');
            $('#password').attr('type', 'text');
            $('#password-confirm').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    

});












window.Vue = require('vue');
import vueDebounce from 'vue-debounce'
Vue.use(vueDebounce)

import AdminUserManager from './components/administrator/UserManager.vue';

import AdminBootstrapAccreditation from './components/administrator/bootstrap/Accreditation.vue';
import AdminBootstrapBranches from './components/administrator/bootstrap/Branches.vue';
import AdminBootstrapSalaryGroup from './components/administrator/bootstrap/SalaryGroup.vue';
import AdminBootstrapDesignation from './components/administrator/bootstrap/Designation.vue';
import AdminBootstrapBranchAssets from './components/administrator/bootstrap/BranchAssets.vue';
import AdminBootstrapClassroomSlots from './components/administrator/bootstrap/ClassroomSlots.vue';
import AdminBootstrapClassroom from './components/administrator/bootstrap/Classroom.vue';

import AdminCourseBootstrapRelatedDocuments from './components/administrator/courses_bootstrap/RelatedDocuments.vue';
import AdminCourseBootstrapMaterial from './components/administrator/courses_bootstrap/Material.vue';
import AdminCourseBootstrapCourseCategory from './components/administrator/courses_bootstrap/CourseCategory.vue';
import AdminCourseBootstrapCourses from './components/administrator/courses_bootstrap/Courses.vue';
import AdminCourseBootstrapCourseSubjects from './components/administrator/courses_bootstrap/CourseSubjects.vue';
import AdminCourseBootstrapCourseFees from './components/administrator/courses_bootstrap/CourseFees.vue';
import AdminCourseBootstrapCourseDocuments from './components/administrator/courses_bootstrap/CourseDocuments.vue';
import AdminCourseBootstrapCourseSections from './components/administrator/courses_bootstrap/CourseSections.vue';
import AdminCourseBootstrapCourseMaterial from './components/administrator/courses_bootstrap/CourseMaterial.vue';
import AdminCourseBootstrapCourseMaterialPurchase from './components/administrator/courses_bootstrap/CourseMaterialPurchase.vue';

import AdminEmployeeManagerStaffManager from './components/administrator/employee_manager/StaffManager.vue';
import AdminEmployeeManagerStaffDocuments from './components/administrator/employee_manager/StaffDocuments.vue';
import AdminEmployeeManagerDesignationHistory from './components/administrator/employee_manager/DesignationHistory.vue';
import AdminEmployeeManagerBranchHistory from './components/administrator/employee_manager/BranchHistory.vue';
import AdminEmployeeManagerSalaryHistory from './components/administrator/employee_manager/SalaryHistory.vue';
import AdminEmployeeManagerReviews from './components/administrator/employee_manager/Reviews.vue';

import AdminStudentManagerStudents from './components/administrator/student_manager/Students.vue';
import AdminStudentManagerStudentEducation from './components/administrator/student_manager/StudentEducation.vue';
import AdminStudentManagerStudentQualification from './components/administrator/student_manager/StudentQualification.vue';
import AdminStudentManagerStudentEmployment from './components/administrator/student_manager/StudentEmployment.vue';
import AdminStudentManagerStudentCourses from './components/administrator/student_manager/StudentCourses.vue';
import AdminStudentManagerStudentCourseDocuments from './components/administrator/student_manager/StudentCourseDocuments.vue';

import AdminBatchManagerBatches from './components/administrator/batch_manager/Batches.vue';
import AdminBatchManagerBatchFaculties from './components/administrator/batch_manager/BatchFaculties.vue';
import AdminBatchManagerBatchStudents from './components/administrator/batch_manager/BatchStudents.vue';
import AdminBatchManagerBatchCourses from './components/administrator/batch_manager/BatchCourses.vue';

import AdminExamResultManagerExam from './components/administrator/exam_result_manager/Exam.vue';

/* Staff Components */
import StaffSessionStart from './components/staff/SessionStart.vue';
import StaffSwitch from './components/staff/Switch.vue';


const app = new Vue({
    el: '#app',
    components: {
        AdminUserManager,

        AdminBootstrapAccreditation,
        AdminBootstrapBranches,
        AdminBootstrapSalaryGroup,
        AdminBootstrapDesignation,
        AdminBootstrapBranchAssets,
        AdminBootstrapClassroomSlots,
        AdminBootstrapClassroom,

        AdminCourseBootstrapRelatedDocuments,
        AdminCourseBootstrapMaterial,
        AdminCourseBootstrapCourseCategory,
        AdminCourseBootstrapCourses,
        AdminCourseBootstrapCourseSubjects,
        AdminCourseBootstrapCourseFees,
        AdminCourseBootstrapCourseDocuments,
        AdminCourseBootstrapCourseSections,
        AdminCourseBootstrapCourseMaterial,
        AdminCourseBootstrapCourseMaterialPurchase,

        AdminEmployeeManagerStaffManager,
        AdminEmployeeManagerStaffDocuments,
        AdminEmployeeManagerDesignationHistory,
        AdminEmployeeManagerBranchHistory,
        AdminEmployeeManagerSalaryHistory,
        AdminEmployeeManagerReviews,

        AdminStudentManagerStudents,
        AdminStudentManagerStudentEducation,
        AdminStudentManagerStudentQualification,
        AdminStudentManagerStudentEmployment,
        AdminStudentManagerStudentCourses,
        AdminStudentManagerStudentCourseDocuments,

        AdminBatchManagerBatches,
        AdminBatchManagerBatchFaculties,
        AdminBatchManagerBatchStudents,
        AdminBatchManagerBatchCourses,

        AdminExamResultManagerExam,

        /* Staff Components */
        StaffSessionStart,
        StaffSwitch,
    }
});
