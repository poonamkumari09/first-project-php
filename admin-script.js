let clickOnBookingDetails = document.querySelector('.booking_details_on');
    let blockOnBD = document.querySelector('.main-content');

    clickOnBookingDetails.onclick = () => {
      blockOnBD.style.display = 'inline-block';
    }