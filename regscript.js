document.getElementById('registration-form').addEventListener('submit', function(e) )
{
    e.preventDefault(); // Prevent the default form submission

    // Get form values
    const wing = document.getElementById('wing').value;
    const flatNo = document.getElementById('flat-no').value;
    const phone = document.getElementById('phone').value;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Log the values (you can replace this with an actual registration process)
    console.log('Wing:', wing);
    console.log('Flat No:', flatNo);
    console.log('Phone:', phone);
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Password:', password);

    // Here you can add code to send
}