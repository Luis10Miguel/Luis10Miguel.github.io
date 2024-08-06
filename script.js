document.addEventListener('DOMContentLoaded', (event) => {
    const showMessageButton = document.getElementById('showMessageButton');
    const messageContainer = document.getElementById('messageContainer');
    const birthdaySong = document.getElementById('birthdaySong');

    showMessageButton.addEventListener('click', () => {
        messageContainer.classList.toggle('hidden');
        if (!messageContainer.classList.contains('hidden')) {
            birthdaySong.play();
        } else {
            birthdaySong.pause();
            birthdaySong.currentTime = 0;
        }
    });
});
