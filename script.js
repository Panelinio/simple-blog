document.addEventListener('DOMContentLoaded', function () {

    const addComBack = document.getElementById('addComBack');
    const addCom = document.getElementById('addCom');
    const closePopup = document.getElementById('close');
    const comment = document.getElementById('comment');
    const username = document.getElementById('username');

    function openAddCom() {
        addComBack.style.display = 'flex';
    }

    function closePopupFunc() {
        addComBack.style.display = 'none';
        comment.value = '';
        username.value = '';
    }

    function addComment(event) {
        event.preventDefault();
        const commentText = comment.value;
        const usernameText = username.value;

        if (commentText && usernameText) {
            console.log(`Username: ${usernameText}, Comment: ${commentText}`);
            closePopupFunc();
        } else {
            alert('Please enter both comment and username.');
        }
    }

    document.querySelector('.commenting').addEventListener('click', openAddCom);
    closePopup.addEventListener('click', closePopupFunc);
    document.getElementById('comment-form').addEventListener('submit', addComment);

    addComBack.addEventListener('click', function (event) {
        if (event.target === addComBack) {
            closePopupFunc();
        }
    });
});
