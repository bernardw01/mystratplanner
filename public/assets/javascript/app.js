$(document).ready(function () {

    $('#editUserCancel').on('click', function () {
        window.location = '/users';
    });

    function editUser(e) {
        window.location = '/users/' + $(this).attr('id');
    }

    $('#cancelEditGoal').on('click', function () {
        window.location = '/home';
        console.log("cancel the edit of a goal");
    });
    $('#cancelCreateReview').on('click', function () {
        window.location = '/home';
        console.log("cancel the edit of a goal");
    });

});