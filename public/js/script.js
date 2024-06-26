const form = document.querySelector('form');
const fullName = document.getElementById("name");
const email = document.getElementById("email");
const guitar = document.getElementById("guitar");
const subject = document.getElementById("subject");
const mess = document.getElementById("message");

function sendEmail(){

    const bodyMessage = `Full Name: ${fullName.value}<br> E-mail: ${email.value}<br> Guitar: ${guitar.value}<br> Message: ${mess.value}`;

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "projekatw@gmail.com",
        Password : "44152F96BAEA07D20CB338828885E847D50B",
        To : 'projekatw@gmail.com',
        From : "projekatw@gmail.com",
        Subject : subject.value,
        Body : bodyMessage
    }).then(
      message => alert(message)
    );
}

form.addEventListener("submit", (e) =>{
    e.preventDefault();

    sendEmail();
});