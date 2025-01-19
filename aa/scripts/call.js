document.getElementById("callButton1").addEventListener("click", function () {
  const phoneNumber = "+1234567890";

  // Check if the device supports making calls (i.e., a mobile device)
  if (/Mobi|Android/i.test(navigator.userAgent)) {
    window.location.href = `tel:${phoneNumber}`;
  } else {
    // For desktop users: copy the number to the clipboard
    navigator.clipboard.writeText(phoneNumber).then(() => {
      const message = document.getElementById("message");
      message.textContent = `The number ${phoneNumber} has been copied to your clipboard.`;
    }).catch(err => {
      console.error("Failed to copy the number: ", err);
    });
  }
  });

