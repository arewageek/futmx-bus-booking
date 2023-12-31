// import * as dotenv from 'dotenv'

// dotenv.config()

const processPayment = async (email, amount, bookingId) => {
    let handler = PaystackPop.setup({
        key: "pk_live_4015eb9337f3fb5b66bc3880d2c9fd2ab500d3f9", // Replace with your public key
        email,
        amount: amount* 100,
        ref: bookingId + '-' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
          alert('Payment canceled');
        },
        callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            console.log(message)
            console.log(response);

            fetch(`/api/paystack/verify/${response.reference}/${amount* 100}`).then(async (data) => {
                const res = await data.json()

                if(res.status === 200){
                    alert(res.message?.message)
                    fetchData()
                }
                else{
                    alert(res.message)
                }

                console.log(res)
            })
            // res = resRaw.json();

            // console.log(res)
        }
    });

    handler.openIframe();
    
    return false;
}

// const paymentForm = document.getElementById('paymentForm');


// paymentForm.addEventListener("submit", payWithPaystack, false);

// function payWithPaystack(e) {
//   e.preventDefault();

//   let handler = PaystackPop.setup({
//     key: process.env.API_KEY, // Replace with your public key
//     email: document.getElementById("email-address").value,
//     amount: document.getElementById("amount").value * 100,
//     ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
//     // label: "Optional string that replaces customer email"
//     onClose: function(){
//       alert('Window closed.');
//     },
//     callback: function(response){
//       let message = 'Payment complete! Reference: ' + response.reference;
//       alert(message);
//     }
//   });

//   handler.openIframe();
// }

window.paystack = {
    pay: processPayment
}