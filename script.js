document.addEventListener("DOMContentLoaded", function () {
    const orderForm = document.getElementById("order-form");
    

    orderForm.addEventListener("submit", function (event) {
        event.preventDefault(); 

        const formData = new FormData(orderForm);

        
        fetch("process_order.php", {
            method: "POST",
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                alert(data); 
                orderForm.reset(); 
            })
            .catch(error => {
                console.error("Error:", error);
            });
    });
});

